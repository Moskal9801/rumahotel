
( function ( $ ) {
	document.addEventListener( 'DOMContentLoaded', function () {
		let isExist = ( selector ) => {
			return document.querySelector( selector );
		}

		// new isvek.Bvi( {
		// 	target:'.start-bvi',
		// 	fontSize:24,
		// } );

		let cookie = document.querySelector( '.cookie' ),
			cookieButton = document.querySelector( '.cookie .cookie-button' ),
			cookieDuration;

		if ( isExist( '.home-page' ) ) {
			cookieDuration = 5500;
		} else {
			cookieDuration = 0;
		}

		if (!getCookie('userAccept')) {
			setTimeout(function () {
				cookie.classList.add('active');
			}, cookieDuration);
		}

		function getCookie(name) {
			let matches = document.cookie.match(new RegExp(
				"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
			));
			return matches ? decodeURIComponent(matches[1]) : undefined;
		}

		cookieButton.onclick = function (e) {
			e.preventDefault()

			cookie.classList.remove('active');
			let name = 'userAccept';
			let value = 1;
			let date = new Date(Date.now() + 86400e3 * 365);
			document.cookie = encodeURIComponent(name) + '=' + encodeURIComponent(value) + `; path=/; expires=${date};`;
		};

		if ( isExist( '.main-header' ) ) {
			let mainHeader = document.querySelector( '.main-header' ),
				hamburger = mainHeader.querySelector( '.control__menu' ),
				noBackground,
				prevScrollpos = window.scrollY;

			if ( mainHeader.classList.contains( 'no-background' ) ) {
				noBackground = true;
			}

			hamburger.onclick = function ( e ) { //ЛОГИКА ГАМБУРГЕРА И ОТКРЫТИЯ МЕНЮ
				e.preventDefault();

				if ( window.outerWidth <= 1024 ) {
					document.documentElement.classList.toggle( 'no-scroll' );
				}

				mainHeader.classList.toggle( 'open-menu' );
				hamburger.classList.toggle( 'active' );
			};

			window.addEventListener( 'scroll', function () {
				let currentScrollPos = window.scrollY;

				if ( window.scrollY <= 2 ) {
					if ( noBackground === true ) {
						mainHeader.classList.add( 'no-background' );
					}

					if ( window.outerWidth <= 1024 ) {
						mainHeader.classList.remove( 'hide' );
						mainHeader.classList.remove( 'no-hide' );
					} else {
						mainHeader.classList.remove( 'open-menu' );
						hamburger.classList.remove( 'active' );
					}
				} else if ( prevScrollpos > currentScrollPos ) {
					if ( noBackground === true ) {
						mainHeader.classList.remove( 'no-background' );
					}

					if ( window.outerWidth <= 1024 ) {
						mainHeader.classList.remove( 'hide' );
						mainHeader.classList.add( 'no-hide' );
					} else {
						mainHeader.classList.remove( 'open-menu' );
						hamburger.classList.remove( 'active' );
					}
				} else {
					if ( noBackground === true ) {
						mainHeader.classList.remove( 'no-background' );
					}

					if ( window.outerWidth <= 1024 ) {
						mainHeader.classList.add( 'hide' );
						mainHeader.classList.remove( 'no-hide' );
						mainHeader.classList.remove( 'no-background' );
					} else {
						mainHeader.classList.remove( 'open-menu' );
						hamburger.classList.remove( 'active' );
					}
				}
				prevScrollpos = currentScrollPos;
			} );
		}

		if ( isExist( '.full-gallery' ) ) { //ИНИЦИАЛИЗАЦИЯ СВАЙПЕРА НА ВСЮ ШИРИНУ ЭКРАНА (КОМПОНЕНТ)
			let slider = document.querySelector( '.full-gallery .swiper' );

			const swiperSlider = new Swiper( slider, { //ИНИЦИАЛИЗИРУЕМ СЛАЙДЕР ГАЛЛЕРЕИ
				slidesPerView:'auto',
				spaceBetween:10,
				loop:false,
				freeMode:true,
				pagination:{
					el:".swiper-pagination",
					clickable:true
				},
				navigation:{
					nextEl:'.swiper-btn.next',
					prevEl:'.swiper-btn.prev',
				},
				breakpoints:{
					1025:{
						spaceBetween:20,
					},
				},
			} );
		}

		if ( isExist( '.full-advantages' ) ) { //ЛОГИКА ПРЕИМУЩЕСТВ (СКРОЛЛ КОГДА ВЫХОДИТ ЗА РАМКИ КОНТЕЙНЕРА) (КОМПОНЕНТ)
			if ( window.outerWidth > 1024 ) {
				let slider = document.querySelector( '.full-advantages .swiper' );

				const swiperSlider = new Swiper( slider, { //ИНИЦИАЛИЗИРУЕМ СЛАЙДЕР ГАЛЛЕРЕИ
					slidesPerView:'auto',
					spaceBetween:10,
					loop:false,
					freeMode:true,
					pagination:{
						el:".swiper-pagination",
						clickable:true
					},
					navigation:{
						nextEl:'.swiper-btn.next',
						prevEl:'.swiper-btn.prev',
					},
					breakpoints:{
						1025:{
							spaceBetween:10,
						},
					},
				} );
			}
		}

		if ( isExist( '.full-conveniences' ) ) { //ВНУТРЕННЯЯ СТРАНИЦА НОМЕРОВ

			//РАСКРЫТИЕ И ЗАКРЫТИЕ БЛОКА С УДОБСТВАМИ
			let items = document.querySelectorAll( '.full-conveniences .contents__item' );

			items.forEach( function ( item ) {
				item.onclick = function ( e ) {
					e.preventDefault();

					let isActive = item.classList.contains( 'active' );

					items.forEach( function ( el ) {
						el.classList.remove( 'active' );
					} );

					if ( !isActive ) {
						item.classList.add( 'active' );
					}
				}
			} );
		}

		if ( isExist( '.home-page' ) ) {
			let header = document.querySelector( '.main-header' ),
				preloader = document.querySelector( '.home-page__preloader' ),
				menu = document.querySelector( '.home-page__menu' ),
				logo = document.querySelector( '.header__logo' ),
				controls = document.querySelector( '.header__control' );

			if ( window.outerWidth > 1024 ) {
				const menus = document.querySelectorAll( '.home-page__menu .menu__item' );

				menus.forEach( ( menu, index ) => { //ХОВЕР НА ПЕРВЫЙ ЭЛЕМЕНТ КОГДА КУРСОР НЕ НАВЕДЕН, И ХОВЕР НА ЭЛЕМЕНТ КОГДА НАВЕДЕН КУРСОР
					if ( index === 0 ) {
						menu.classList.add( 'hover' );
					}

					menu.addEventListener( 'mouseenter', () => {
						menus.forEach( r => r.classList.remove( 'hover' ) );

						if ( logo.classList.contains( 'active' ) ) {
							logo.classList.remove( 'active' );
						}

						if ( controls.classList.contains( 'active' ) ) {
							controls.classList.remove( 'active' );
						}

						menu.classList.add( 'hover' );

						if ( index === 0 ) {
							logo.classList.add( 'active' );
						}

						if ( index === 3 ) {
							controls.classList.add( 'active' );
						}
					} );

					menu.addEventListener( 'mouseleave', () => {
						menus.forEach( r => r.classList.remove( 'hover' ) );
						menus[0].classList.add( 'hover' );
						logo.classList.add( 'active' );
						controls.classList.remove( 'active' );
					} );
				} );

				setTimeout( function () {
					let itemMenu = document.querySelector( '.home-page__menu .menu__item:first-child' ),
						itemMenuWidth = itemMenu.offsetWidth,
						lastPreloader = document.querySelector( '.home-page__preloader .preloader__images .images__image:nth-child(5)' );

					lastPreloader.style.width = `${ itemMenuWidth }px`;
				}, 1000 );

				setTimeout( function () {
					header.classList.remove( 'hide' );
				}, 5750 );
			} else {
				setTimeout( function () {
					let lastPreloader = document.querySelector( '.home-page__preloader .preloader__images .images__image:nth-child(5)' );

					lastPreloader.style.height = `360px`;
				}, 1000 );

				setTimeout( function () {
					header.classList.remove( 'hide' );
				}, 2750 );
			}

			setTimeout( function () {
				preloader.classList.add( 'active' );
			}, 1000 );

			setTimeout( function () {
				preloader.style.pointerEvents = 'none';
			}, 3750 );

			setTimeout( function () {
				menu.classList.add( 'active' );
			}, 3750 );

			setTimeout( function () {
				menu.style.pointerEvents = 'unset';
			}, 5750 );

			if ( isExist( '.special' ) && !sessionStorage.getItem( 'special' ) ) {
				setTimeout( function () {
					$.magnificPopup.open( {
						type:'inline',
						fixedContentPos:true,
						closeOnBgClick:false,
						midClick:true,
						mainClass:'mfp-fade',
						items:{
							src:'.special',
						},
						callbacks:{
							open:function () {

							}, close:function () {

								sessionStorage.setItem( 'special', '1' );
							}
						},
					} );
				}, 7000 );
			}
		}

		if ( isExist( '.about-page' ) ) {
			//AUTOPLAY ДЛЯ БАННЕРА
			let video = document.querySelector( '.about-page__banner video' );

			video.setAttribute( 'autoplay', 'true' );
			video.play();

			//СЛАЙДЕР ПРЕИМУЩЕСТВ
			let sliderAdvantages = document.querySelector( '.about-page__advantages .swiper' );

			const swiperAdvantages = new Swiper( sliderAdvantages, { //ИНИЦИАЛИЗИРУЕМ СЛАЙДЕР ГАЛЛЕРЕИ
				slidesPerView:1,
				spaceBetween:10,
				loop:false,
				freeMode:false,
				pagination:{
					el:".swiper-pagination",
					clickable:true
				},
				navigation:{
					nextEl:'.swiper-btn.next',
					prevEl:'.swiper-btn.prev',
				},
				breakpoints:{
					1025:{
						slidesPerView:3,
						spaceBetween:20,
					},
				},
			} );

			//СЛАЙДЕР ОТЗЫВОВ
			let sliderReviews = document.querySelector( '.about-page__reviews .swiper' );

			const swiperReviews = new Swiper( sliderReviews, { //ИНИЦИАЛИЗИРУЕМ СЛАЙДЕР ГАЛЛЕРЕИ
				slidesPerView:1,
				spaceBetween:10,
				loop:false,
				freeMode:false,
				pagination:{
					el:".swiper-pagination",
					clickable:true
				},
				navigation:{
					nextEl:'.swiper-btn.next',
					prevEl:'.swiper-btn.prev',
				},
				breakpoints:{
					1025:{
						slidesPerView:3,
						spaceBetween:20,
					},
				},
			} );

			//РАСКРЫТИЕ И ЗАКРЫТИЕ БЛОКА С ЛЕГЕНДАМИ
			let legend = document.querySelector( '.about-page__advantages .contents__item' );

			legend.onclick = function ( e ) {
				e.preventDefault();

				let isActive = legend.classList.contains( 'active' );

				legend.classList.remove( 'active' );

				if ( !isActive ) {
					legend.classList.add( 'active' );
				}
			}

			//РАСКРЫТИЕ И ЗАКРЫТИЕ БЛОКА С УСЛОВИЯМИ
			let items = document.querySelectorAll( '.about-page__conditions .contents__item' );

			items.forEach( function ( item ) {
				item.onclick = function ( e ) {
					e.preventDefault();

					let isActive = item.classList.contains( 'active' );

					items.forEach( function ( el ) {
						el.classList.remove( 'active' );
					} );

					if ( !isActive ) {
						item.classList.add( 'active' );
					}
				}
			} );

			//РАСКРЫТИЕ ОТЗЫВА В ПОПАПЕ
			let reviews = document.querySelectorAll( '.about-page__reviews .items__item .item__more' );

			reviews.forEach( function ( item ) {
				$( item ).magnificPopup( {
					type:'inline',
					preloader:false,
					focus:'#username',
					modal:true,
					mainClass:'mfp-fade',
				} );
			} );
		}

		if ( isExist( '.conference-page' ) ) {
			//ВЫВОД ПОПАПА ОСТАВИТЬ ЗАЯВКУ
			$( '.call-conference' ).magnificPopup( {
				type:'inline',
				mainClass:'mfp-fade',
				callbacks:{
					beforeClose:function () {
						var form = this.content.find( 'form' );
						if ( form.length ) {
							form[0].reset();
						}
					},
					open:function () {
						if ( window.outerWidth > 1024 ) {
							document.querySelector( 'html' ).style.marginRight = 17 + 'px';
							document.querySelector( '.main-header' ).style.marginRight = 17 + 'px';
							document.querySelector( '.main-header .header__control' ).style.marginRight = 17 + 'px';
						}

						let type = this.st.el[0].getAttribute( 'data-type' );

						document.querySelector( '.form__inputs .hidden .inputs__type' ).value = type;

						console.log( document.querySelector( '.form__inputs .hidden .inputs__type' ) )
					},
					close:function () {
						if ( window.outerWidth > 1024 ) {
							document.querySelector( 'html' ).style.marginRight = 'unset';
							document.querySelector( '.main-header' ).style.marginRight = 'unset';
							document.querySelector( '.main-header .header__control' ).style.marginRight = 'unset';
						}
					}
				},
				fixedContentPos:true,
				closeOnBgClick:false,
				midClick:true,
				items:{
					src:'.form-conference',
				},
			} );
		}

		if ( isExist( '.archive-page__rooms' ) ) { //АРХИВНАЯ СТРАНИЦА НОМЕРОВ


			if ( window.outerWidth <= 1024 ) { //УБИРАЕМ ПОЛУПРОЗРАЧНОСТЬ НА МОБИЛЬНЫХ УСТРОЙСТВАХ
				let header = document.querySelector( '.main-header' );

				header.classList.remove( 'half-background' )
			} else {
				const rooms = document.querySelectorAll( '.rooms__contents .rooms' );

				rooms.forEach( ( room, index ) => { //ХОВЕР НА ПЕРВЫЙ ЭЛЕМЕНТ КОГДА КУРСОР НЕ НАВЕДЕН, И ХОВЕР НА ЭЛЕМЕНТ КОГДА НАВЕДЕН КУРСОР
					if ( index === 0 ) {
						room.classList.add( 'hover' );
					}

					room.addEventListener( 'mouseenter', () => {
						rooms.forEach( r => r.classList.remove( 'hover' ) );
						room.classList.add( 'hover' );

						if ( room.classList.contains( 'category' ) ) {
							let itemsMore = room.querySelector( '.items__more' ),
								heightMore = room.querySelector( '.more__rooms' ).offsetHeight;

							itemsMore.style.maxHeight = heightMore + 'px';
						}
					} );

					room.addEventListener( 'mouseleave', () => {
						rooms.forEach( r => r.classList.remove( 'hover' ) );
						rooms[0].classList.add( 'hover' );

						let itemsMore = room.querySelector( '.items__more' );

						itemsMore.style.maxHeight = 0;
					} );
				} );
			}
		}

		if ( isExist( '.single-rooms' ) ) {
			if ( window.outerWidth > 1024 ) {
				let rooms = document.querySelectorAll( '.contents__items.category' );

				rooms.forEach( function ( room ) {
					room.addEventListener( 'mouseenter', () => {

						let itemsMore = room.querySelector( '.items__more' ),
							heightMore = room.querySelector( '.more__rooms' ).offsetHeight;

						itemsMore.style.maxHeight = heightMore + 'px';
					} );

					room.addEventListener( 'mouseleave', () => {
						let itemsMore = room.querySelector( '.items__more' );

						itemsMore.style.maxHeight = 0;
					} );
				} );
			}
		}

		if ( isExist( '.archive-page__specials' ) ) { //АРХИВНАЯ СТРАНИЦА СПЕЦПРЕДЛОЖЕНИЙ
			function loadMoreSpecials () { //ПОДГРУЗКА ПОСТОВ ВАКАНСИЙ ПРИ СКРОЛЛЕ

				let bottomOffset; //ИНИЦИАЛИЗИРУЕТ ПЕРМЕННУЮ ОТСТУПА СНИЗУ (ЧТОБЫ ПОСТЫ ПОДГРУЖАЛИСЬ ОТ РАЗНОЙ ДЛИНЫ СНИЗУ НА ДЕСКТОПЕ И МОБИЛКЕ)

				if ( window.outerWidth > 1024 ) {
					bottomOffset = 2250;
				} else {
					bottomOffset = 2750;
				}

				let loadMore = jQuery( '#more-projects' ),
					currentPage = loadMore.attr( 'data-current-page' );

				let data = {
					'action':'load_more-specials',
					'query':loadMore.attr( "data-query" ),
					'page':currentPage
				};

				if ( (jQuery( document ).scrollTop() > (jQuery( document ).height() - bottomOffset)) && !jQuery( 'body' ).hasClass( 'loading' ) && !loadMore.hasClass( 'hidden' ) ) {
					jQuery.ajax( {
						url:'/wp-admin/admin-ajax.php',
						data:data,
						type:'POST',
						beforeSend:function ( xhr ) {
							jQuery( 'body' ).addClass( 'loading' );
							loadMore.css( 'opacity', 1 );
						},
						success:
							function ( data ) {
								if ( data ) {
									loadMore.html( '<div class="loader-inner"></div>' );
									loadMore.prev().append( data );

									currentPage++;
									loadMore.attr( 'data-current-page', currentPage.toString() );

									if ( currentPage === parseInt( loadMore.attr( "data-max-pages" ) ) ) {
										loadMore.addClass( 'hidden' );
									}
									jQuery( 'body' ).removeClass( 'loading' );
									loadMore.css( 'opacity', 0 );
								} else {
									loadMore.addClass( 'hidden' );
									jQuery( 'body' ).removeClass( 'loading' );
								}
							},
					} );
				}
			}

			window.addEventListener( 'scroll', function () { //ВЫЗОВ ФУНКЦИИ ПОДГРУЗКИ ПОСТОВ ПРИ СКРОЛЛЕ
				loadMoreSpecials();
			} );
		}

		if ( isExist( '.default-container' ) ) { //ДЕФОЛТНАЯ СТРАНИЦА
			if ( window.outerWidth > 1024 ) { //ОТРИЦАТЕЛЬНЫЕ ОТСТУПЫ НА СЛАЙДЕРЕ ДЕСКТОПА
				let sliders = document.querySelectorAll( '.swiper-acf-block-default.swiper' );

				sliders.forEach( function ( slider ) {
					let container = document.querySelector( '.default-container' ),
						containerWidth = container.offsetWidth,
						windowWidth = window.innerWidth,
						marginLeft = ((windowWidth - containerWidth) / 2) + 3,
						marginRight = marginLeft;

					slider.style.marginLeft = `-${ marginLeft }px`;
					slider.style.marginRight = `-${ marginRight }px`;
				} );
			}
		}
	} );

	window.addEventListener( 'load', function () {
		//ВЫВОД ПОПАПА ОСТАВИТЬ ЗАЯВКУ
		$( '.call-feedback' ).magnificPopup( {
			type:'inline',
			mainClass:'mfp-fade',
			callbacks:{
				beforeClose:function () {
					var form = this.content.find( 'form' );
					if ( form.length ) {
						form[0].reset();
					}
				},
				open:function () {
					if ( window.outerWidth > 1024 ) {
						document.querySelector( 'html' ).style.marginRight = 17 + 'px';
						document.querySelector( '.main-header' ).style.marginRight = 17 + 'px';
						document.querySelector( '.main-header .header__control' ).style.marginRight = 17 + 'px';
					}
				},
				close:function () {
					if ( window.outerWidth > 1024 ) {
						document.querySelector( 'html' ).style.marginRight = 'unset';
						document.querySelector( '.main-header' ).style.marginRight = 'unset';
						document.querySelector( '.main-header .header__control' ).style.marginRight = 'unset';
					}
				}
			},
			fixedContentPos:true,
			closeOnBgClick:false,
			midClick:true,
			items:{
				src:'.form-feedback',
			},
		} );

		//ЛОГИКА РАБОТЫ КУРСОРА
		$( window ).mousemove( ( e ) => {
			if ( $( window ).width() >= 768 ) {
				requestAnimationFrame( () => {
					var scrollTop = $( window ).scrollTop();
					var top = e.pageY - scrollTop;
					var left = e.pageX;

					$( '.cursor' ).addClass( 'show' ).css( 'transform', 'translate3d(' + left + 'px, ' + top + 'px, 0)' );
				} );
			}
		} );

		$( '.border-cursor, .default-container a, .bvi-open' ).hover( () => {
			$( '.cursor' ).addClass( 'show-icon show-border' );
		}, () => {
			$( '.cursor' ).removeClass( 'show-icon show-border' );
		} );

		$( '.view-cursor' ).hover( () => {
			$( '.cursor' ).addClass( 'show-icon show-view' );
		}, () => {
			$( '.cursor' ).removeClass( 'show-icon show-view' );
		} );

		$( '.scroll-cursor, .swiper-acf-block-default' ).hover( () => {
			$( '.cursor' ).addClass( 'show-icon show-scroll' );
		}, () => {
			$( '.cursor' ).removeClass( 'show-icon show-scroll' );
		} );


		$( ".phone" ).click().mask( "+7 (999) 999-99-99" );


		//ВЫВОД УСПЕШНОЙ И НЕУСПЕШНОЙ ОТПРАВКИ ФОРМЫ
		let wpcf7 = document.querySelectorAll( '.wpcf7' );

		for ( let form of wpcf7 ) {
			if ( form.id === 'wpcf7-f96-o1' ) {
				form.addEventListener( 'wpcf7mailsent', function () {
					$.magnificPopup.close();
					$.magnificPopup.open( {
						type:'inline',
						mainClass:'mfp-fade',
						items:{
							src:'.sent-newsletter',
						},
						fixedContentPos:true,
						callbacks:{
							open:function () {
								if ( window.outerWidth > 1024 ) {
									document.querySelector( 'html' ).style.marginRight = 17 + 'px';
									document.querySelector( '.main-header' ).style.marginRight = 17 + 'px';
									document.querySelector( '.main-header .header__control' ).style.marginRight = 17 + 'px';
								}
							}, close:function () {
								if ( window.outerWidth > 1024 ) {
									document.querySelector( 'html' ).style.marginRight = 'unset';
									document.querySelector( '.main-header' ).style.marginRight = 'unset';
									document.querySelector( '.main-header .header__control' ).style.marginRight = 'unset';
								}
							}
						},
					} );
				} );
			} else {
				form.addEventListener( 'wpcf7mailsent', function () {
					$.magnificPopup.close();
					$.magnificPopup.open( {
						type:'inline',
						mainClass:'mfp-fade',
						items:{
							src:'.sent-main',
						},
						fixedContentPos:true,
						callbacks:{
							open:function () {
								if ( window.outerWidth > 1024 ) {
									document.querySelector( 'html' ).style.marginRight = 17 + 'px';
									document.querySelector( '.main-header' ).style.marginRight = 17 + 'px';
									document.querySelector( '.main-header .header__control' ).style.marginRight = 17 + 'px';
								}
							}, close:function () {
								if ( window.outerWidth > 1024 ) {
									document.querySelector( 'html' ).style.marginRight = 'unset';
									document.querySelector( '.main-header' ).style.marginRight = 'unset';
									document.querySelector( '.main-header .header__control' ).style.marginRight = 'unset';
								}
							}
						},
					} );
				} );
			}
			form.addEventListener( 'wpcf7mailfailed', function () {
				$.magnificPopup.close();
				$.magnificPopup.open( {
					type:'inline',
					mainClass:'mfp-fade',
					items:{
						src:'.popup-failed',
					},
					fixedContentPos:true,
					callbacks:{
						open:function () {
							if ( window.outerWidth > 1024 ) {
								document.querySelector( 'html' ).style.marginRight = 17 + 'px';
								document.querySelector( '.main-header' ).style.marginRight = 17 + 'px';
								document.querySelector( '.main-header .header__control' ).style.marginRight = 17 + 'px';
							}
						}, close:function () {
							if ( window.outerWidth > 1024 ) {
								document.querySelector( 'html' ).style.marginRight = 'unset';
								document.querySelector( '.main-header' ).style.marginRight = 'unset';
								document.querySelector( '.main-header .header__control' ).style.marginRight = 'unset';
							}
						}
					},
				} );
			} );
		}
	} );
} )( jQuery );