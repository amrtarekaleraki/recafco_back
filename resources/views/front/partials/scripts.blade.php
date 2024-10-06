<script src="{{asset('assets-front')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!--JQuery Js-->
<script src="{{asset('assets-front')}}/jq/jQuery.js"></script>
<!-- AOS JS -->
<script src="{{asset('assets-front')}}/aos/js/aos.js"></script>
<!--ScrollTrigger-->
<script src="{{asset('assets-front')}}/js/ScrollTrigger.min.js"></script>
<!--lenis-->
<script src="{{asset('assets-front')}}/js/lenis.js"></script>
<script src="{{asset('assets-front')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('assets-front')}}/js/script_lenis.js"></script>
<!-- Swiper JS -->
<script src="{{asset('assets-front')}}/swiper/js/swiper.min.js"></script>
<!--Main Js-->
<script src="{{asset('assets-front')}}/js/main.js"></script>

<script>
    $(document).ready(function () {
        var $btns = $('.btn').click(function () {
            if (this.id == 'all') {
                $('#parent > div').fadeIn(450);
            } else {
                var $el = $('.' + this.id).fadeIn(450);
                $('#parent > div').not($el).hide();
            }
            $btns.removeClass('active');
            $(this).addClass('active');
        })
    });
</script>

<script>
    var swiper = new Swiper(".mySwiper.related-project", {
        slidesPerView: 1,
        autoplay: true,
        spaceBetween: 30,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            400: {
                slidesPerView: 1,
            },
            880: {
                slidesPerView: 1.5,
            },
            1025: {
                slidesPerView: 2,
            },
            1366: {
                slidesPerView: 2,
            }
        },
        navigation: {
            nextEl: ".swiper-button-next.arrow-related-proj",
            prevEl: ".swiper-button-prev.arrow-related-proj",
        },
    });
</script>
<script>
    const swiperCounter = new Swiper('.swiper.project-value', {
        loop: true,
        autoplay:true,
        slidesPerView: 'auto',
        spaceBetween: 0,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true
        },
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-button-next.project-value-arrow',
            prevEl: '.swiper-button-prev.project-value-arrow',
        }
    });
</script>

<script>
    var swiperMain = new Swiper(".mySwiper.main-swiper", {
        // autoplay: {
        // delay: 4000,
        // disableOnInteraction: false,
        // },
        speed: 4000,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        navigation: {
            nextEl: ".swiper-button-next.main-swiper-arrow",
            prevEl: ".swiper-button-prev.main-swiper-arrow",
        },
    });
</script>
<!-- Initialize Swiper -->
<script>
    var swiperClients = new Swiper(".mySwiper.clients", {
        slidesPerView: 4,
        autoplay: true,
        spaceBetween: 10,
        breakpoints: {
            0: {
                slidesPerView: 4,
            },
            400: {
                slidesPerView: 4,
            },
            880: {
                slidesPerView: 4,
            },
            1025: {
                slidesPerView: 6,
            },
            1366: {
                slidesPerView: 7,
            }
        },
        navigation: {
            nextEl: ".swiper-button-next.clients",
            prevEl: ".swiper-button-prev.clients",
        },
    });
</script>
<!-- Initialize three-logo -->
<script>
    var swiperLogo = new Swiper(".mySwiper.three-logo", {
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            400: {
                slidesPerView: 2,
            },
            880: {
                slidesPerView: 2,
            },
            1025: {
                slidesPerView: 3,
            },
            1366: {
                slidesPerView: 3,
            }
        },
        navigation: {
            nextEl: ".swiper-button-next.three-logo-arrow",
            prevEl: ".swiper-button-prev.three-logo-arrow",
        },
    });
</script>
<!--five-logo Swiper-->
<script>
    var swiperFiveLogo = new Swiper(".mySwiper.five-logo", {
        spaceBetween: 10,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            400: {
                slidesPerView: 2,
            },
            880: {
                slidesPerView: 3,
            },
            1025: {
                slidesPerView: 4,
            },
            1366: {
                slidesPerView: 5,
            }
        },
        navigation: {
            nextEl: ".swiper-button-next.five-logo-arrow",
            prevEl: ".swiper-button-prev.five-logo-arrow",
        },
    });
</script>




