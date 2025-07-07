<!DOCTYPE html>
<html lang="ru">

<head>
    <style>
		@media (max-width: 1024px) {
			.archive-page .archive-page__rooms {
				overflow: auto;
			}
		}
    </style>

    <style>
		body .bvi-body[data-bvi-theme] :not(.bvi-no-styles) {
			background-color: unset !important;
		}

		body .bvi-body .bvi-link-fixed-top {
			top: 7.5rem !important;
		}

    </style>

    <style>
		#tl-reputation-widget {
			width:     100%;
			max-width: 150px;
		}
    </style>
    <!-- start TL Reputation widget -->
    <script type='text/javascript'>
		(function ( w ) {
			var q = [
				[ 'setContext', 'TL-INT-ruma-hotel_2024-07-11', 'ru' ],
				[ 'embed', 'reputation-widget', {
					container:'tl-reputation-widget'
				} ]
			];
			var h = [ "ru-ibe.tlintegration.ru", "ibe.tlintegration.ru", "ibe.tlintegration.com" ];
			var t = w.travelline = (w.travelline || {}),
				ti = t.integration = (t.integration || {});
			ti.__cq = ti.__cq ? ti.__cq.concat( q ) : q;
			if ( !ti.__loader ) {
				ti.__loader = true;
				var d = w.document, c = d.getElementsByTagName( "head" )[0] || d.getElementsByTagName( "body" )[0];

				function e ( s, f ) {
					return function () {
						w.TL || (c.removeChild( s ), f())
					}
				}

				(function l ( h ) {
					if ( 0 === h.length ) return;
					var s = d.createElement( "script" );
					s.type = "text/javascript";
					s.async = !0;
					s.src = "https://" + h[0] + "/integration/loader.js";
					s.onerror = s.onload = e( s, function () {
						l( h.slice( 1, h.length ) )
					} );
					c.appendChild( s )
				})( h );
			}
		})( window );
    </script>
    <!-- end TL Reputation widget -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6MFC7JD"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if ( is_front_page() ) { ?>
<div class="home-page section-page">
	<?php } else if ( is_page( 'about' ) ) { ?>
    <div class="about-page section-page">
		<?php } else if ( is_page( 'restaurant' ) ) { ?>
        <div class="restaurant-page section-page">
			<?php } else if ( is_page( 'conference' ) ) { ?>
            <div class="conference-page section-page">
				<?php } else if ( is_page( 'contacts' ) ) { ?>
                <div class="contacts-page section-page">
					<?php } else if ( is_page( 'document' ) ) { ?>
                    <div class="documents-page section-page">
						<?php } else if ( is_page( 'club' ) ) { ?>
                        <div class="club-page section-page">
							<?php } else if ( is_page( 'booking' ) ) { ?>
                            <div class="booking-page section-page">
								<?php } else if ( is_archive() ) { ?>
                                <div class="archive-page section-page <?php echo get_body_class()[ 2 ] ?>">
									<?php } else if ( is_single() && is_singular('rooms')) { ?>
                                    <div class="single-page single-rooms section-page <?php echo get_body_class()[ 2 ] ?>">
									<?php } else if ( is_single() ) { ?>
                                    <div class="single-page section-page <?php echo get_body_class()[ 2 ] ?>">
										<?php } else if ( is_404() ) { ?>
                                        <div class="error-page section-page">
											<?php } else { ?>
                                            <div class="default-page section-page">
												<?php } ?>

												<?php $currentPath = $_SERVER[ 'REQUEST_URI' ]; ?>

                                                <header class="main-header <?php if ( is_page( 'about' ) || is_page( 'booking' ) || is_page( 'restaurant' ) || is_page( 'conference' ) || is_page( 'club' ) || in_array( 'single-rooms', get_body_class() ) || is_404() ) {
													echo 'no-background';
												} else if ( in_array( 'post-type-archive-rooms', get_body_class() ) ) {
													echo 'half-background';
												} else if ( is_front_page() ) {
													echo 'hide for-main';
												} ?> bvi-no-styles ">
                                                    <div class="header">
                                                        <div class="header-container">
                                                            <a href="/" class="header__logo view-cursor<?php if ( is_front_page() ) {
																echo ' active';
															} ?>">
                                                                <svg width="120" height="37" viewBox="0 0 120 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M37 36.4633V30.108H38.0944V32.7506H41.065V30.108H42.1592V36.4633H41.065V33.7847H38.0944V36.4633H37Z"
                                                                          fill="#202020"/>
                                                                    <path d="M48.983 34.8896C49.3837 35.3287 49.8883 35.5475 50.4992 35.5475C51.11 35.5475 51.6131 35.3302 52.0083 34.894C52.4019 34.4578 52.5995 33.9229 52.5995 33.2865C52.5995 32.6573 52.3992 32.1237 51.9984 31.6848C51.599 31.2457 51.0934 31.0255 50.4824 31.0255C49.8713 31.0255 49.3684 31.2442 48.9745 31.6792C48.5795 32.1153 48.3819 32.6514 48.3819 33.2865C48.3819 33.9157 48.5823 34.4506 48.9831 34.8896H48.983ZM52.8222 35.6119C52.2044 36.2526 51.4254 36.5743 50.4824 36.5743C49.5393 36.5743 48.7617 36.2553 48.1507 35.6204C47.5398 34.9839 47.2344 34.2073 47.2344 33.2864C47.2344 32.3783 47.5427 31.6044 48.1606 30.9626C48.7771 30.3204 49.5561 30 50.4993 30C51.4422 30 52.2198 30.3175 52.8308 30.9524C53.4417 31.589 53.7471 32.3668 53.7471 33.2864C53.7471 34.1945 53.4389 34.9697 52.8223 35.6119H52.8222Z"
                                                                          fill="#202020"/>
                                                                    <path d="M60.3494 36.4633V31.1432H58.375V30.108H63.4279V31.1432H61.4521V36.4633H60.3494Z" fill="#202020"/>
                                                                    <path d="M68.3438 36.4633V30.108H72.9607V31.1061H69.4382V32.7593H72.5615V33.7576H69.4382V35.4652H73.0058V36.4633H68.3438Z"
                                                                          fill="#202020"/>
                                                                    <path d="M78.0547 36.836V30.4806H79.1489V35.8191H82.4223V36.836H78.0547Z" fill="#202020"/>
                                                                    <path d="M79.4762 0.155396H79.1343C76.1302 0.329833 73.6598 1.40536 71.7248 3.38184C71.3688 3.745 71.0479 4.11549 70.7636 4.49303C70.4791 4.11554 70.1581 3.745 69.8023 3.38184C67.8658 1.40536 65.3969 0.329833 62.3927 0.155396H62.0509C59.0467 0.329833 56.5763 1.40536 54.6412 3.38184C52.5913 5.47408 51.5515 8.0018 51.5234 10.9665V15.603V19.3792V21.9506H55.88V19.4229V15.603V11.01C55.88 10.8793 55.8715 10.7483 55.8574 10.6175C55.943 9.01943 56.5552 7.64646 57.6945 6.49802C58.9332 5.23377 60.4282 4.60165 62.1796 4.60165H62.2639C64.0153 4.60165 65.5103 5.23372 66.749 6.49802C67.8883 7.64651 68.5006 9.01943 68.5859 10.6175C68.5706 10.7483 68.5637 10.8793 68.5637 11.01V19.4229C68.5637 19.4772 68.5833 19.5143 68.5852 19.5665V21.9506H70.7424H70.7846H72.9418V19.5665C72.9438 19.5143 72.9635 19.4772 72.9635 19.4229V11.01C72.9635 10.8793 72.9551 10.7483 72.941 10.6175C73.0266 9.01943 73.6388 7.64646 74.7781 6.49802C76.0168 5.23377 77.5117 4.60165 79.2632 4.60165H79.3474C81.0988 4.60165 82.594 5.23372 83.8325 6.49802C84.9718 7.64651 85.5841 9.01943 85.6695 10.6175C85.6584 10.712 85.6522 13.8167 85.6492 15.603H85.6473V17.5044C85.6473 19.9605 87.5976 21.9506 90.0034 21.9506V19.3792V15.603V10.9665C89.9755 8.0018 88.9358 5.47408 86.886 3.38184C84.9493 1.40536 82.4804 0.329833 79.4762 0.155396H79.4762Z"
                                                                          fill="#202020"/>
                                                                    <path d="M10.722 0.164609C10.7058 0.163934 10.6925 0.155248 10.6773 0.155248C7.6014 0.301216 5.08204 1.37655 3.11763 3.38169C1.06769 5.47393 0.0279415 8.00166 0 10.9664V12.6861V19.379V21.9504C2.4058 21.9504 4.35622 19.9604 4.35622 17.5042V12.6861H4.35149C4.3479 11.7322 4.34232 10.6888 4.33386 10.6173C4.41939 9.01919 5.03178 7.64622 6.17076 6.49792C7.40946 5.23367 8.90463 4.6016 10.6562 4.6016H10.6773C10.6925 4.6016 10.7058 4.59359 10.722 4.59291V4.6016H12.8545V0.155151H10.722V0.164513V0.164609Z"
                                                                          fill="#202020"/>
                                                                    <path d="M109.324 17.5609C105.819 17.5609 102.969 14.6514 102.969 11.0746C102.969 7.4978 105.819 4.58829 109.324 4.58829C112.828 4.58829 115.679 7.4978 115.679 11.0746C115.679 11.1154 115.668 11.1532 115.667 11.194H115.646V11.4178C115.466 14.8323 112.714 17.5609 109.324 17.5609ZM119.972 11.194C119.972 11.1532 119.984 11.1154 119.984 11.0746C119.984 5.07604 115.202 0.194824 109.324 0.194824C103.446 0.194824 98.6641 5.07604 98.6641 11.0746C98.6641 17.0733 103.446 21.9542 109.324 21.9542C111.903 21.9542 114.239 20.9775 116.084 19.4158C116.786 20.9101 118.269 21.95 120.002 21.95V11.194H119.972H119.972Z"
                                                                          fill="#202020"/>
                                                                    <path d="M42.8745 7.36968C40.5905 7.36968 38.7381 9.16877 38.5538 11.4513C38.5531 11.4534 38.5391 11.4656 38.5391 11.4663C38.4537 13.0652 37.8413 14.4381 36.7023 15.5851C35.4636 16.8492 33.9685 17.4815 32.2169 17.4815H32.1328C30.3812 17.4815 28.8877 16.8493 27.649 15.5851C26.5083 14.4382 25.8974 13.0652 25.8106 11.4663C25.8246 11.3376 25.8329 11.206 25.8329 11.0744V4.23989V3.71797V0.0710449H21.4766V3.67498V4.23993V11.1174C21.5046 14.0835 22.5442 16.6121 24.5943 18.7028C26.5307 20.6792 28.9997 21.7546 32.0038 21.9292H32.3458C35.35 21.7546 37.8189 20.6792 39.7554 18.7028C41.8067 16.612 42.845 14.0835 42.8746 11.1174V8.01546V7.99548V7.99616V7.36973L42.8745 7.36968Z"
                                                                          fill="#202020"/>
                                                                    <path d="M42.8799 0.0710449H38.4766V4.56526H42.8799V0.0710449Z" fill="#202020"/>
                                                                </svg>
                                                            </a>
                                                            <div class="header__control">
                                                                <a href="#" class="bvi-open">
                                                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M16 7.5C6 7.5 2 16.5 2 16.5C2 16.5 6 25.5 16 25.5C26 25.5 30 16.5 30 16.5C30 16.5 26 7.5 16 7.5Z"
                                                                              stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        <path d="M16 21.5C18.7614 21.5 21 19.2614 21 16.5C21 13.7386 18.7614 11.5 16 11.5C13.2386 11.5 11 13.7386 11 16.5C11 19.2614 13.2386 21.5 16 21.5Z"
                                                                              stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>

                                                                </a>

                                                                <a href="/booking/" class="control__reservation border-cursor" data-tl-booking-open='true'>ЗАБРОНИРОВАТЬ</a>
                                                                <div class="control__language border-cursor">
																	<?php echo do_shortcode( '[language-switcher]' ) ?>
                                                                </div>
                                                                <div id="hamburger-icon" class="control__menu border-cursor">
                                                                    <span class="line line-1"></span>
                                                                    <span class="line line-2"></span>
                                                                    <span class="line line-3"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu bvi-no-styles">
                                                        <div class="header-container bvi-no-styles">
                                                            <div class="menu__images">
                                                                <img src="<?php the_field( 'image-menu', 'option' ); ?>">
                                                            </div>
                                                            <div class="menu__sections">
                                                                <ul class="sections__menu">
                                                                    <li class="menu__item view-cursor">
                                                                        <a href="/about/">ОБ ОТЕЛЕ</a>
                                                                    </li>
                                                                    <li class="menu__item view-cursor">
                                                                        <a href="/rooms/">НОМЕРА</a>
                                                                    </li>
                                                                    <li class="menu__item view-cursor">
                                                                        <a href="/specials/">СПЕЦПРЕДЛОЖЕНИЯ</a>
                                                                    </li>
                                                                    <li class="menu__item view-cursor">
                                                                        <a href="/conference/">КОНФЕРЕНЦ-ЗАЛЫ</a>
                                                                    </li>
                                                                    <li class="menu__item view-cursor">
                                                                        <a href="/restaurant/">РЕСТОРАН RUMA</a>
                                                                    </li>
                                                                    <li class="menu__item view-cursor">
                                                                        <a href="/contacts/">КОНТАКТЫ</a>
                                                                    </li>
                                                                    <li class="menu__item view-cursor">
                                                                        <a href="/booking/" data-tl-booking-open='true'>ЗАБРОНИРОВАТЬ</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="sections__info">
                                                                    <ul class="info__contacts">
                                                                        <li class="contacts__item border-cursor">
                                                                            <a href="tel:<?php echo clearPhone( get_field( 'phone', 'option' ) ); ?>"><?php the_field( 'phone', 'option' ); ?></a>
                                                                        </li>
                                                                        <li class="contacts__item border-cursor">
                                                                            <a href="mailto:<?php the_field( 'mail', 'option' ); ?>"><?php the_field( 'mail', 'option' ); ?></a>
                                                                        </li>
                                                                        <!--<li class="contacts__item border-cursor">
                                    <a target="_blank" href="<?php /*the_field( 'wa', 'option' ); */ ?>">WHATSAPP</a>
                                </li>-->
                                                                        <li class="contacts__item border-cursor">
                                                                            <a target="_blank" href="<?php the_field( 'tg', 'option' ); ?>">TELEGRAM</a>
                                                                        </li>
                                                                        <li class="contacts__item border-cursor">
                                                                            <a target="_blank" href="<?php the_field( 'vk', 'option' ); ?>">VK</a>
                                                                        </li>
                                                                        <!--<li class="contacts__item border-cursor">
                                    <a target="_blank" href="<?php /*the_field( 'inst', 'option' ); */ ?>">INSTAGRAM</a>
                                </li>-->
                                                                    </ul>
                                                                    <ul class="info__documents">
                                                                        <li class="documents__item">
                                                                            <p><?php the_field( 'address', 'option' ); ?></p>
                                                                        </li>
                                                                        <li class="documents__item border-cursor">
                                                                            <a target="_blank"
                                                                               href="/wp-content/uploads/2025/04/Politika-v-otnoshenii-obrabotki-personalnyh-dannyh-1.pdf">Политика
                                                                                обработки персональных данных</a>
                                                                        </li>
                                                                        <li class="documents__item border-cursor">
                                                                            <a target="_blank" href="/document/">Правовая информация</a>
                                                                        </li>
                                                                        <!--<li class="documents__item border-cursor">
																			<a target="_blank" href="/club/">Клуб привилегий</a>
																		</li>-->
                                                                    </ul>

                                                                </div>
                                                                <div class=" copyright__item studio">
                                                                    <span>Разработано: </span>
                                                                    <a class="border-cursor" href="https://01cat.ru">Двоичный кот</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lines bvi-no-styles">
                                                        <div class="lines__line bvi-no-styles"></div>
                                                        <div class="lines__line bvi-no-styles"></div>
                                                        <div class="lines__line bvi-no-styles"></div>
                                                        <div class="lines__line bvi-no-styles"></div>
                                                    </div>
                                                </header>

                                                <main <?php body_class(); ?>>
