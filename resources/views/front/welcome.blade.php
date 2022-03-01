<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Konferans</title>
    <link rel="icon" href="./images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<body>
<header>
    <div class="header">
        <a class="head-logo" href="">
            <img
                src="https://manoverboard.com/images/manoverboard-logo-white.svg?_cchid=568a00774965bff04763db9cf9d936c1"
                alt="">
        </a>
        <div class="head-buttons">
            <a href="">
                <h3>Projeler</h3>
                <i class="fal fa-boxes"></i>
            </a>
            <a href="">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</header>
<main>
    <div class="slider">
        <div class="slide-inner">
            <div class="slide active">
                <img src="{{asset('front/img/main.jpg')}}" alt="">
                <div class="slide-text animate__animated ">
                    <p>#3D IMAGE #ARCHITECTURAL VISUALIZATION #PHOTOREALISM</p>
                    <h2>We are always open to new challenges</h2>
                </div>
            </div>
            <div class="slide">
                <img src="{{asset('front/img/assembly.jpg')}}" alt="">
                <div class="slide-text animate__animated ">
                    <p>#3D IMAGE #ARCHITECTURAL VISUALIZATION #PHOTOREALISM</p>
                    <h2>We are always open to new challenges</h2>
                </div>
            </div>
        </div>
        <div class="slider-foot">
            <h4>Luxury Apartment</h4>
            <p>INTERIOR RENDERING</p>
            <span class="headerHome__bottomLine"></span>
        </div>
        <div class="slider-buttons">
            <a href="">
                <i class="fal fa-chevron-left"></i>
            </a>
            <a href="">
                <i class="fal fa-chevron-right"></i>
            </a>
        </div>
        <a class="headerHome__scroll" href="#titleDesc">
            <div class="headerHome__scrollIcon"></div>
            <div class="headerHome__scrollText">Scroll down</div>
        </a>
    </div>
    <div class="titleDesc" id="titleDesc">
        <div class="titleDesc__inner">
            <div class="titleDesc__title"><h2 class="titleDesc__titleSmall aos-init aos-animate" data-aos="fade-up"
                                              data-aos-delay="100">A few words about us</h2>
                <h3 class="titleDesc__titleBig aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">who<br>we&nbsp;are?
                </h3></div>
            <div class="titleDesc__desc aos-init aos-animate" data-aos="fade-up" data-aos-delay="300"><p>We are Drowart
                    – a 3D visualization studio. We use advanced computer techniques to combine the client’s vision,
                    beauty of designed objects and photorealistic look. By using our 3D rendering services, you can be
                    sure that, in addition to a high-end product, you will receive it on time, made with the use of the
                    latest legal software available in our industry. Even if you ask for something that we do not know
                    yet, we will do our best to gain the required knowledge in the blink of an eye, just to meet your
                    expectations.</p></div>
        </div>
    </div>
    <div class="bernardShaw" id="bernardShaw">
        <div class="firstDiv">
            <img
                src="https://manoverboard.com/images/manoverboard-logo-black.svg?_cchid=581cda2a45142441c5782898814e80c7"
                alt="">
        </div>
        <div class="secondDiv">
            <h3 class="animate__fadeInUp"> Without art, the crudeness of reality would make the world unbearable.</h3>

            <h3>Sanat olmasaydı, gerçeğin çiğliği dünyayı dayanılmaz hale getirirdi.</h3>
        </div>
        <div class="bernardShawPhoto">
            <img src="{{asset('front/img/bernard.jfif')}}" alt="">
            <h4>George Bernard Shaw</h4>
        </div>
    </div>
    <div class="projects">
        <a href="">
            <div class="project">
                <img src="{{asset('front/img/assembly.jpg')}}" alt="">
                <div class="project-text">
                    <h3>Interior Visualization</h3>
                    <p>Your need of a photo realistic interior image will be met in the blink of an eye</p>
                    <div> <i class="fad fa-long-arrow-alt-right"></i> More information</div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="project">
                <img src="{{asset('front/img/blog1.jpg')}}" alt="">
                <div class="project-text">
                    <h3>Interior Visualization</h3>
                    <p>Your need of a photo realistic interior image will be met in the blink of an eye</p>
                    <div> <i class="fad fa-long-arrow-alt-right"></i> More information</div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="project">
                <img src="{{asset('front/img/count.jpg')}}" alt="">
                <div class="project-text">
                    <h3>Interior Visualization</h3>
                    <p>Your need of a photo realistic interior image will be met in the blink of an eye</p>
                    <div> <i class="fad fa-long-arrow-alt-right"></i> More information</div>
                </div>
            </div>
        </a>
    </div>
    <div class="contact">
        <div class="contact-social">
            <div class="contact-us">
                <h4>Contact us</h4>
                <div>
                    <img src="{{asset("front/img/bernard.jfif")}}" alt="">
                    <div>
                        <h3>Pawel Sowa</h3>
                        <p>Co-founder</p>
                    </div>
                </div>
            </div>
            <div>
                <img
                    src="https://manoverboard.com/images/manoverboard-logo-white.svg?_cchid=568a00774965bff04763db9cf9d936c1"
                    alt="">
                <ul>
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li></ul>
            </div>
        </div>
        <div class="contact-form">

        </div>
    </div>
</main>
{{--<div class="mobil-menu">--}}
{{--    <div class="side-menu">--}}
{{--        <div class="closeButton">--}}
{{--            <a class="closeSide"><i class="far fa-times"></i></a>--}}
{{--        </div>--}}
{{--        <ul>--}}
{{--            <li><a >Ana Sayfa</a>--}}
{{--                <ul>--}}
{{--                    <li><a href="">Ana Sayfa</a></li>--}}
{{--                    <li><a href="">Takvim</a></li>--}}
{{--                    <li><a href="">Konuşmacılar</a></li>--}}
{{--                    <li><a href="">Venue</a></li>--}}
{{--                    <li><a href="">Blog</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a >Takvim</a></li>--}}
{{--            <li><a >Konuşmacılar</a></li>--}}
{{--            <li><a >Venue</a></li>--}}
{{--            <li><a >Blog</a></li>--}}
{{--            <button>Bilet Satın Al</button>--}}
{{--        </ul>--}}
{{--        <div>--}}
{{--            <ul>--}}
{{--                <li class="facebook"><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                <li class="twitter"><a target="_blank" href="http://twitter.com/#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                <li class="youtube"><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>--}}
{{--                <li class="linkedin"><a target="_blank"  href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                <li class="instagram"><a target="_blank" href="http://instagram.com/tedxvienna"><i class="fab fa-instagram"></i></a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    function bernardactive() {
        $('.secondDiv').addClass('active');
        $('.bernardShawPhoto').addClass('active');
        $('.firstDiv').css('display', 'none');

    }

    function bernard() {
        $('.firstDiv').removeClass('active');
        setTimeout(() => {
            bernardactive()
        }, 500);
        ;
    }

    var temp = 1;
    $(window).scroll(function () {
        if ($(window).scrollTop() < $(window).height() && temp) {
            $('.firstDiv').addClass('active')
            setTimeout(() => {
                bernard()
            }, 3000);
            ;
            temp = 0;
        }
    });
</script>
<script>
    const news = document.querySelectorAll('.slide');
    var slideInterval
    let intervalTime = 10000
    const nextSlide = () => {

        clearInterval(slideInterval)

        slideInterval = setInterval(() => {
            const activeSlide = document.querySelector('.slide.active');
            activeSlide.classList.remove('active');
            if (activeSlide.nextElementSibling) {
                activeSlide.nextElementSibling.classList.add('active');
            } else {
                news[0].classList.add('active');
            }
            intervalTime = 10000
        }, intervalTime)
    }

    slideInterval = setInterval(nextSlide(), intervalTime)
</script>
<script>
    $('.side').removeClass();
    $(".side-menu>ul>li>a").click(function (event) {
        if ($(event.currentTarget.nextElementSibling).hasClass("active")) {
            $(event.currentTarget.nextElementSibling).removeClass("active");
        } else {
            $(event.currentTarget.nextElementSibling).addClass("active")
        }
    })
</script>
<script>
    AOS.init();
</script>
<script>
    if ($(window).width() > 900) {
        $(window).scroll(function () {
            if ($(window).scrollTop() == 0) {
                $('header').removeClass('sticky');
            } else {
                $('header').addClass('sticky');
            }
        });
    }
</script>
{{--<script>--}}
{{--    $("#mobil-menu").click(function(){--}}
{{--        $(".mobil-menu").addClass("opened")--}}
{{--        $("header").css("filter","blur(10px)");--}}
{{--        $("main").css("filter","blur(10px)");--}}
{{--    })--}}
{{--    $(".closeSide").click(function(){--}}
{{--        $(".mobil-menu").removeClass("opened")--}}
{{--        $("header").css("filter","blur(0px)");--}}
{{--        $("main").css("filter","blur(0px)");--}}
{{--    })--}}
{{--</script>--}}
</html>
