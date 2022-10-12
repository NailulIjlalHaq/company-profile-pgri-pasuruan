<script src={{ asset('./frontend/assets/leaflet/leaflet.js') }}></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src={{ asset('./frontend/assets/swiper/swiper.js') }}></script>

{{-- component script --}}
<script>
    // leaflet maps
    if (window.location.href.indexOf('contact') > -1) {
        var map = L.map('map', {

            zoomControl: false,
        }).setView([-7.674797087422843, 112.94377816931632], 13);
        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            minZoom: 12,
            maxZoom: 17,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);

        var marker = L.marker([-7.674797087422843, 112.94377816931632]).addTo(map).bindPopup(
                '<b>PGRI KABUPATEN PASURUAN/b>')
            .openPopup();

        var circle = L.circle([-7.674797087422843, 112.94377816931632], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 100,
            })
            .addTo(map)
            .bindPopup('Linkungan PGRI KABUPATEN PASURUAN');
    }
</script>


<script>
    // navbar link active
    $(document).ready(function() {
        activeLink('about', 'about');
        activeLink('artikel', 'artikel');
        activeLink('home', 'home');
        activeLink('contact', 'contact');
        activeLink('berita', 'berita');
        activeLink('gallery', 'gallery');
        activeLink('profile-sejarah', 'about');
        activeLink('profile-makna', 'about');
        activeLink('profile-visi-misi', 'about');
        activeLink('profile-visi-misi', 'vm');
        activeLink('profile-makna', 'makna');
        activeLink('profile-sejarah', 'sejarah');

        modalToggle('header-phone', 'navbar', '-phone');

        toggleElement('gallery-popup', 'gallery-container-box');


        if (!$('.about-link , .artikel-link , .contact-link , .gallery-link , .berita-link').hasClass(
                'active-link')) {
            $('.home-link').addClass('active-link')
        }


        setTimeout(() => {
            // $('.loader').addClass('trans-100')
            $('.loader').addClass('hide')
        }, 3000);



    });

    $('.header__list-box--item , .header-phone-list-item ').hover(function() {
        $(this).addClass('active-link-hover')
    }, function() {
        if (!$(this).hasClass('active-link')) {
            $(this).removeClass('active-link-hover')
        }
    })

    $('.header-phone-list-dropdown').on('click', function() {
        $(this).children('.header-phone-list-dropdown-box').toggleClass('mh-15 ')
        
        // if (!$(this).children('.header-phone-list-dropdown-box').hasClass('mt-1')) {
        //     setTimeout(() => {
        //         $(this).children('.header-phone-list-dropdown-box').removeClass('mt-1')
                
        //     }, 1000);
        // }

    })



    $('.cp-link-text').text(window.location.href)
    $('.share-btn-wrapper-btn.share-wa').on('click', function() {
        let link = window.location.href
        let url = `https://wa.me/?text=${link}`;
        window.open(url)
    });

    $('.cp-link').on('click', function() {
        $('.cp-link').select();
        navigator.clipboard.writeText($('.cp-link-text').text());
        $('.alert-cp-link').addClass('show')

        setTimeout(() => {
            $('.alert-cp-link').removeClass('show')
        }, 1000);
    })

    function activeLink(name, link) {
        if (window.location.href.indexOf(name) > -1) {
            $(`.${link}-link`).addClass('active-link');
        }
    }



    function dropdownProfile(drop, hov) {
        $(`.${hov}`).hover(function() {
            $(this).siblings(`.${drop}`).hover(function() {
                $(this).addClass('show')
            }, function() {
                $(this).removeClass('show')
            })
            $(this).siblings(`.${drop}`).addClass('show')
        }, function() {
            $(this).siblings(`.${drop}`).removeClass('show')
        })
    }
    dropdownProfile('header__list-box-dropdown', 'header-phone-list-item')
    dropdownProfile('header__list-box-dropdown', 'header__list-box--item')

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
    function toggleElement(name, box) {
        $(`.btn-show-${name}`).on('click', function() {
            $(this).siblings(`.${name}`).addClass('show');
            $(this).siblings(`.${name}`).children(`.${name}__wrapper`).addClass('trans-0');
            $(document).on('keyup', function(evt) {
                if ($(`.${name}`).hasClass('show')) {
                    if (evt.keyCode == 27) {
                        $(`.${name}`).removeClass('show');
                        $(`.${name}`).children(`.${name}__wrapper`).removeClass('trans-0');
                    }
                }
            });

            // $(window).on('click', function(e) {
            //     if (!$(this).siblings(`.${name}`).children(`.${name}__wrapper`).get(0).contains(e.target) && !$(this).get(0)
            //         .contains(e.target)) {
            //         $(this).siblings(`.${name}`).addClass('show');
            //         $(this).siblings(`.${name}`).children(`.${name}__wrapper`).addClass('trans-0');

            //     }
            // })

        });
        $(`.btn-close-${name}`).on('click', function() {
            $(`.${name}__wrapper`).removeClass('trans-0');
            $(`.${name}`).removeClass('show');
        });
    }





    $('.artikel-container-box__top--info').hover(function() {
        // $(this).siblings(' .artikel-container-box__top--info').hover(function() {
        //     $(this).addClass('show')
        // }, function() {
        //     $(this).removeClass('show')
        // })
        $(this).siblings('.artikel-container-box__top--img').css('transform', 'scale(1.1)')
    }, function() {
        $(this).siblings('.artikel-container-box__top--img').css('transform', 'scale(1)')
    })

    $('.btn-close-alert-news').on('click', function() {
        $('.alert-news').addClass('hide')
    })

    $('.share-btn-share').on('click', function() {
        $(this).siblings('.share-btn-wrapper').toggleClass('trans-0')
        $(this).siblings('.share-btn-wrapper').toggleClass('show')
    })
    // swiperr / about.html
    if (window.location.href.indexOf('gallery') > -1) {
        var swiper = new Swiper('.mySwiper', {
            loop: true,
            loopFillGroupWithBlank: true,
            slidesPerView: 1,
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
