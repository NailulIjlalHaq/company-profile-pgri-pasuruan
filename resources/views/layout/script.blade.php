<script src={{ asset('./assets/leaflet/leaflet.js') }}></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src={{ asset('./assets/swiper/swiper.js') }}></script>

{{-- component script --}}
<script>
    // leaflet maps
    var map = L.map('map', {
        zoomControl: false,
    }).setView([-7.76764, 112.74839], 13);
    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        minZoom: 12,
        maxZoom: 17,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);

    var marker = L.marker([-7.76764, 112.74839]).addTo(map).bindPopup('<b>SMKN 1 Purwosari, Pasuruan</b>')
        .openPopup();

    var circle = L.circle([-7.76764, 112.74839], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 100,
        })
        .addTo(map)
        .bindPopup('Linkungan SMKN 1 PURWOSARI');
</script>


<script>
    // navbar link active
    $(document).ready(function() {
        activeLink('about');
        activeLink('home');

        modalToggle('header-phone', 'navbar', '-phone');

        toggleElement('fasilitas');
        toggleElement('location');
        toggleElement('prestasi');
    });

    function activeLink(name) {
        if (window.location.href.indexOf(name) > -1) {
            $(`.${name}-link`).addClass('active-link');
        }
    }

    // navbar scroll
    $(window).scroll(function() {
        //     if (window.location.href.indexOf('home') > -1) {
        //         navScroll('897');
        //     } else if (window.location.href.indexOf('about') > -1) {
        //         navScroll('50');
        //     }

        if ($(window).scrollTop() >= 50) {
            $('.header').addClass('header-dark');
        } else {
            $('.header').removeClass('header-dark');
        }

    });



    $('.header__list-box--item').hover(function() {
        $('.list-dropdown').hover(function() {
            $(this).addClass('show')
        }, function() {
            $(this).removeClass('show')
        })
        $(this).siblings('.list-dropdown').addClass('show')
    }, function() {
        $(this).siblings('.list-dropdown').removeClass('show')
    })

    // modal
    function modalToggle(modal, name, ec) {
        $(`.btn-show-${name}${ec}`).on('click', function() {
            $(`.${modal}`).toggleClass('show');
            $(`.${modal}`).toggleClass('trans-0');
        });
        $(`.btn-close-${name}${ec}`).on('click', function() {
            $(`.${modal}`).toggleClass('show');
            $(`.${modal}`).toggleClass('trans-0');
        });
    }

    // home - sambutan text overflow elipsis
    $('.card__desc--show').on('click', function() {
        let desc = '.card__desc--text';
        $(this).siblings(desc).toggleClass('undesc');
        if ($(this).siblings(desc).hasClass('undesc')) {
            $(this).addClass('card-down');
            $(this).text('Lebih Sedikit');
        } else if ($(this).siblings(`${desc}:not(.undesc)`)) {
            $(this).removeClass(`card-down`);
            $(this).text('...Selengkapnya');
        }
    });

    // popup profile sectionar
    function toggleElement(name) {
        $(`.btn-show-${name}`).on('click', function() {
            $(`.${name}`).addClass('show');
            $(`.${name}__wrapper`).addClass('trans-0');
            $(document).on('keyup', function(evt) {
                if ($(`.${name}`).hasClass('show')) {
                    if (evt.keyCode == 27) {
                        $(`.${name}`).removeClass('show');
                        $(`.${name}__wrapper`).removeClass('trans-0');
                    }
                }
            });
        });

        $(`.btn-close-${name}`).on('click', function() {
            $(`.${name}`).removeClass('show');
            $(`.${name}__wrapper`).removeClass('trans-0');
        });
    }

    $('.btn-swipe').on('click', function() {
        $(this).toggleClass('btn-top-swipe');
        $(this).parents('.fasilitas-box__info--swipe').toggleClass('trans-0');
        $(this).parents('.fasilitas-box').toggleClass('bg-primary');

        if ($(this).hasClass('btn-top-swipe')) {
            $(this).children('p').text('Hide Detail');
            $(this).children('ion-icon').attr('name', 'chevron-down-outline');
        } else {
            $(this).children('p').text('Show Detail');
            $(this).children('ion-icon').attr('name', 'chevron-up-outline');
        }
    });

    // $(window).on('click', function (e) {
    //   if (!$('.fasilitas-box__info--swipe').get(0).contains(e.target) && !$('.btn-swipe').get(0).contains(e.target)) {
    //     $('.fasilitas-box__info--swipe').removeClass('trans-0');
    //     $('.btn-swipe').removeClass('btn-top-swipe');
    //   }
    // });

    // swiperr / about.html
    if (window.location.href.indexOf('about') > -1) {
        var swiper = new Swiper('.mySwiper', {
            loop: true,
            loopFillGroupWithBlank: true,
            breakpoints: {
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                700: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1000: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
</script>
