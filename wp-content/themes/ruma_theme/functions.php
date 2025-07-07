<?php require_once 'parts/blocks/init.php';

add_action( 'wp_enqueue_scripts', function () { #ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ К ТЕМЕ ПРОЕКТА
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), [], filemtime( get_stylesheet_directory() . '/style.css' ) );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/main.js', [ 'jquery' ], filemtime( get_stylesheet_directory() . '/main.js' ) );
} );

add_action( 'wp_head', function () {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
} );

add_theme_support( 'post-thumbnails' );

add_action( 'admin_head', function () {
    wp_enqueue_script( 'cat-script', get_template_directory_uri() . '/cat.js' );
} );

add_filter( 'login_headerurl', function () { #ДОБАВЛЯЕМ ССЫЛКУ НА СТУДИЮ В ШАПКЕ АДМИНКИ
    return 'https://01cat.ru';
} );

add_action( 'login_header', function () { #БРЕНДИРУЕМ ФОРМУ ВХОДА В АДМИНКУ ?>
    <style>
        #login h1 a {
            background: url("logo.png") center top no-repeat !important;
            width:      111px !important;
            height:     180px !important;
        }
    </style>
<?php } );

add_filter( 'admin_footer_text', function () { #БРЕНДИРУЕМ ПОДВАЛ АДМИНКИ
    return '<b>Сделано:</b>
			<a href="https://01cat.ru/" target="_blank">Двоичный кот</a>
			<br>
			<b>Техническая поддержка:</b> тел. <a href="tel:+79145416354">+7 (914) 541-63-54</a>, email: <a href="mailto:hello@01cat.ru">hello@01cat.ru</a>';
} );

add_filter('site_transient_update_plugins', 'my_remove_update_nag'); #УДАЛЕНИЕ НАПОМИНАНИЯ ОБНОВЛЕНИЯ У ACF
function my_remove_update_nag($value) {
    unset($value->response[ 'advanced-custom-fields-pro/acf.php' ]);
    return $value;
}

if ( function_exists( 'acf_add_options_page' ) ) { #ДОБАВЛЯЕМ ДОПОЛНИТЕЛЬНЫЙ ПУНКТ МЕНЮ ДЛЯ ОБЩЕЙ ИНФОРМАЦИИ
    acf_add_options_page( [
        'page_title' => 'Общая информ.',
        'menu_title' => 'Общая информ.',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ] );
}

function clearPhone( $phone ) { #ФУНКЦИЯ ДЛЯ ОЧИЩЕНИЯ НОМЕРА ТЕЛЕФОНА ОТ НЕНУЖНЫХ ЗНАКОВ
    $to_replace = [ ' ', '-', '(', ')' ];

    return str_replace( $to_replace, '', $phone );
}

add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' ); #ОТКЛЮЧАЕМ СОЗДАНИЕ КОПИЙ КАРТИНОК
function delete_intermediate_image_sizes( $sizes ){
    return array_diff( $sizes, [
        'large',
        'medium_large',
        'medium',
        'post-thumbnail',
        '1536x1536',
        '2048x2048',
    ] );
}

add_action("admin_menu", "remove_menus"); #УДАЛЕНИЕ ПУНКТОВ МЕНЮ В АДМИНКЕ
function remove_menus() {
    remove_menu_page("edit-comments.php"); #КОММЕНТАРИИ
    remove_menu_page("edit.php"); #ЗАПИСИ
}

add_action('admin_bar_init', function() { #УДАЛЕНИЕ ОТСТУПА У АДМИН ПАНЕЛИ
    remove_action('wp_head', '_admin_bar_bump_cb');
});

//ПОКАЗАТЬ ЕЩЕ СПЕЦПРЕДЛОЖЕНИЯ
add_action( "wp_ajax_load_more-specials", "load_specials" );
add_action( "wp_ajax_nopriv_load_more-specials", "load_specials" );
function load_specials() {

    if (wp_is_mobile()) {
        $maxPosts = 4;
    } else {
        $maxPosts = 8;
    }

    $args = json_decode( stripslashes( $_POST["query"] ), true );

    $args["paged"]          = $_POST["page"] + 1;
    $args["posts_per_page"] = $maxPosts;
    $args["order"]          = 'DESC';

    $posts = new WP_Query( $args );
    $html  = '';

    if ( $posts->have_posts() ) {
        while ( $posts->have_posts() ) {
            $posts->the_post();

            $html   .= get_template_part( "parts/components/item", 'specials');
        }
    } else {
        echo 'На данный момент предложения отсутствуют';
    }

    wp_reset_postdata();
    die( $html );
}

add_action("wpcf7_before_send_mail", "wpcf7_to_telegram");
function wpcf7_to_telegram($cf7) {
    $form_id = $cf7->id();

    // Конфигурации форм
    $forms_config = [
        334 => [
            'form_name' => 'Связаться с нами',
            'fields' => [
                'Имя' => 'feedback-name',
                'Почта' => 'feedback-mail',
                'Телефон' => 'feedback-phone',
                'Сообщение' => 'feedback-message',
            ],
        ],
        331 => [
            'form_name' => 'Бронь конференц-зала',
            'fields' => [
                'Имя' => 'conference-name',
                'Почта' => 'conference-mail',
                'Телефон' => 'conference-phone',
                'Сообщение' => 'conference-message',
            ],
        ],
        96 => [
            'form_name' => 'Подписка на рассылку',
            'fields' => [
                'Имя' => 'questions-name',
                'Email' => 'questions-mail',
            ],
        ],
        52 => [
            'form_name' => 'Задать вопрос',
            'fields' => [
                'Имя' => 'questions-name',
                'Телефон' => 'questions-phone',
                'Сообщение' => 'questions-message',
            ],
        ],
    ];

    if (!isset($forms_config[$form_id])) {
        return; // Выход если форма не настроена
    }

    $config = $forms_config[$form_id];
    $message = "<b>Заявка с сайта Ruma Hotel</b>";
    $message .= "\n\n<b>Форма:</b> " . htmlspecialchars($config['form_name'], ENT_QUOTES, 'UTF-8') . "\n";

    foreach ($config['fields'] as $label => $post_key) {
        $value = isset($_POST[$post_key]) ? sanitize_text_field($_POST[$post_key]) : '';
        $message .= "\n<b>" . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . ":</b> " . htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    $token = "token";
    $chat_ids = ["1", "2"];

    // Отправка сообщений
    foreach ($chat_ids as $chat_id) {
        wp_remote_get("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text=" . urlencode($message) . "&parse_mode=HTML");
    }
}