<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'rumahotel' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-ZLco^zJbVCCQR?bT2e=6%f3HvvL)S^q+s|fk_1!j?_a0E]/&R+/BqVh#=S8T=@0' );
define( 'SECURE_AUTH_KEY',  'kzB8PacVRL@&1F]Ek>w>q.Czi;Kjr+h]Fuy]V_VeI3ZHWB8nn_gz,3fL@W4R_0na' );
define( 'LOGGED_IN_KEY',    'uHhh7xB,D&(JST_orgId7Y~PIfEGz,b&%0sia`opjfk?q5YMh@ZvU[_ztseLQ=t|' );
define( 'NONCE_KEY',        '$`Uy{_}ec5eQVmcq3qe+oorU@g-Ql`-Nqa=5h}&+FiCq^, 6Vadn<7*pAR3(9:UR' );
define( 'AUTH_SALT',        '(7$,Vs/!,&(`kt#u[^:Xj)Re^>FT|Dg|e%%QFvqqQh&G713F5-c2/#1[ZD7.>qa7' );
define( 'SECURE_AUTH_SALT', '^ODp*K6TgE+j}J^nP%^r%|D`[Ej{G 0=hBb0+LRR]o(:md^ TjM3S[Bbr+t:+})g' );
define( 'LOGGED_IN_SALT',   'PZ<C9rrKpWs7Xy>eU8s{M/-eNI2wz,s=YI54*&ODvd=JS_>rz^OlZ:D5vjPa1-yc' );
define( 'NONCE_SALT',       'G,ajAOt#wHkYt9D}3>)0`WtFA (#:e/|&in>wrk?6(>hNiY.[0=PP,t-rz&ilsQQ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
