<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HERMESARTSTUDIO</title>
    <link rel="icon" href="{{asset('image/logo.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<body>
<div class='loading-page'>
    <div class='counter'>
        <h1>0%</h1>
        <hr>
    </div>
</div>
<header>
    <div class="header">
        <a class="head-logo" href="">
            <img src="{{asset('image/logo.png')}}" alt="">
            <img src="{{asset('image/logoText.png')}}" alt="">
        </a>
        <div class="head-buttons">
            <a href="">
                <h3>Projeler</h3>
                <i class="fal fa-boxes"></i>
            </a>
            <a id="fullMenu">
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
                <img src="{{asset($slider->photo_1)}}" alt="">
                <div class="slide-text animate__animated active">
                    <p>#3D IMAGE #ARCHITECTURAL VISUALIZATION #PHOTOREALISM</p>
                    <h2>We are always open to new challenges</h2>
                </div>
            </div>
            <div class="slide">
                <img src="{{asset($slider->photo_2)}}" alt="">
                <div class="slide-text animate__animated active">
                    <p>#3D IMAGE #ARCHITECTURAL VISUALIZATION #PHOTOREALISM</p>
                    <h2>We are always open to new challenges</h2>
                </div>
            </div>
            <div class="slide">
                <img src="{{asset($slider->photo_3)}}" alt="">
                <div class="slide-text animate__animated active">
                    <p>#3D IMAGE #ARCHITECTURAL VISUALIZATION #PHOTOREALISM</p>
                    <h2>We are always open to new challenges</h2>
                </div>
            </div>
            <div class="slide">
                <img src="{{asset($slider->photo_4)}}" alt="">
                <div class="slide-text animate__animated active">
                    <p>#3D IMAGE #ARCHITECTURAL VISUALIZATION #PHOTOREALISM</p>
                    <h2>We are always open to new challenges</h2>
                </div>
            </div>
            <div class="slide">
                <img src="{{asset($slider->photo_5)}}" alt="">
                <div class="slide-text animate__animated active">
                    <p>#3D IMAGE #ARCHITECTURAL VISUALIZATION #PHOTOREALISM</p>
                    <h2>We are always open to new challenges</h2>
                </div>
            </div>
        </div>
        <div class="slider-foot">
            <h4>{{$slider->slider_title}}</h4>
            <p>{{$slider->slider_text}}</p>
            <span class="headerHome__bottomLine"></span>
        </div>
        <div class="slider-buttons">
            <a id="prev">
                <i class="fal fa-chevron-left"></i>
            </a>
            <a id="next">
                <i class="fal fa-chevron-right"></i>
            </a>
        </div>
        <a class="headerHome__scroll" href="#bernardShaw">
            <div class="headerHome__scrollIcon"></div>
            <div class="headerHome__scrollText">Scroll down</div>
        </a>
    </div>
    <div class="bernardShaw" id="bernardShaw">
        <div class="firstDiv">
            <img src="{{asset('image/logoTextBlack.png')}}" alt="">

        </div>
        <div class="secondDiv">
            <h3 class=" animate__animated animate__pulse"> Without art, the crudeness of reality would make the world
                unbearable.</h3>

            <h3 class=" animate__animated animate__pulse">Sanat olmasaydı, gerçeğin çiğliği dünyayı dayanılmaz hale
                getirirdi.</h3>
        </div>
        <div class="bernardShawPhoto">
            <img src="{{asset('front/img/bernard.jfif')}}" alt="">
        </div>
    </div>
    <div class="projects" id="projects">
        @foreach($categories as $category)
        <a href="" data-aos="fade-up">
            <div class="project">
                <img src="{{asset($category->mainpage_photo)}}" alt="">
                <div class="project-text">
                    <h3>{{$category->name}}</h3>
                    <p>{!! $category->box_text  !!}</p>
                    <div><i class="fad fa-long-arrow-alt-right"></i> More information</div>
                </div>
            </div>
        </a>
       @endforeach
    </div>
    <div class="titleDesc" id="titleDesc">
        <div class="titleDesc__inner">
            <div class="titleDesc__title"><h2 class="titleDesc__titleSmall aos-init aos-animate" data-aos="fade-up"
                                              data-aos-delay="100">A few words about us</h2>
                <h3 class="titleDesc__titleBig aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">who<br>we&nbsp;are?
                </h3></div>
            <div class="titleDesc__desc aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">{!! $site_config->about_us !!}</div>
        </div>
        <div class="persons">
            <div class="person" data-aos="fade-up">
                <img src="{{asset('front/img/about1.png')}}" alt="">
                <h5>FEHMİ BULDUK</h5>
                <h5>MİMARİ GÖRSELLEŞTİRME UZMANI</h5>
                <h5>ARCVIZ ARTIST</h5>
            </div>
            <div class="person" data-aos="fade-up">
                <img src="{{asset('front/img/about2.png')}}" alt="">
                <h5>İBRAHİM SOLAK</h5>
                <h5>MİMARİ GÖRSELLEŞTİRME UZMANI</h5>
                <h5>ARCVIZ ARTIST</h5>
            </div>
            <div class="person" data-aos="fade-up">
                <img src="{{asset('front/img/about3.png')}}" alt="">
                <h5>CEREN ÇOLAK</h5>
                <h5>MİMAR</h5>
                <h5>ARCHITECT</h5>
            </div>
            <div class="person" data-aos="fade-up">
                <img src="{{asset('front/img/about4.png')}}" alt="">
                <h5>ÖZGE YAVUZ</h5>
                <h5>MİMAR</h5>
                <h5>ARCHITECT</h5>
            </div>
        </div>
    </div>
    <div class="beforeafter" id="beforeAfter">
        <h2 class="sliderTwoPhotos__title">exterior</h2>
        <div id="two" class="bal-container">
            <div class="bal-after">
                <img src="{{asset('front/img/count.jpg')}}">
                <div class="bal-afterPosition bal-afterPosition-default afterLabel">
                    After
                </div>
            </div>
            <div class="bal-before bal-before-default">
                <div class="bal-before-inset bal-before-inset-default">
                    <img src="{{asset('front/img/main.jpg')}}">
                    <div class="bal-beforePosition bal-beforePosition-default beforeLabel">
                        Before
                    </div>

                </div>
            </div>
            <div class="bal-handle bal-handle-default">
                <img src="{{asset('image/logo.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
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
                <img src="{{asset('image/logoText.png')}}" alt="">
                <ul  class="contact-form">
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="contact-form">
            <h4>Bizimle İletişime Geçin</h4>
            <div>
                <input name="email" id="email" class="check-mail" type="text">
                <label for="email">Ad-Soyad</label>
            </div>
            <div>
                <input name="email" id="email" class="check-mail" type="email">
                <label for="email">E-Posta</label>
            </div>
            <div>
                <input name="email" id="email" class="check-mail" type="tel">
                <label for="email">Telefon Numarası</label>
            </div>
            <div>
                <input name="email" id="email" class="check-mail" type="text">
                <label for="email">Mesaj</label>
            </div>
            <button type="submit" class="button"><span class="button__text">SEND MESSAGE</span></button>
        </div>
    </div>
{{--    <div class="contact-links">--}}
{{--            <div>--}}
{{--                <a href="">About Us <i class="fad fa-long-arrow-alt-right"></i></a>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <a href="">Services <i class="fad fa-long-arrow-alt-right"></i></a>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <a href="">Contact Us <i class="fad fa-long-arrow-alt-right"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
    <div class="footer__wrapper">
        <div class="footer__content container">
            <div class="footer__top">
                <div class="footer__topLeft">
                    <img class="footer__topLogo" src="{{asset('image/logoText.png')}}" alt="">

                    <ul class="social-icons">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="footer__topRight">
                    <p class="footer__topRightTitle">Contact us</p>
                    <a href="mailto:{{$site_config->email}}" class="footer__topRightLink footer__topRightLink--email">{{$site_config->email}}</a>
                    <a href="skype:live:.cid.cf298a4729b5592a?call" class="footer__topRightSkype">
                        <span class="footer__topRightSkypeIcon icon-skype"></span>
                    </a>
                    <a href="tel:{{$site_config->phoneNumber}}" style="color: white; font-size: 20px; margin-top: -5px"
                       class="footer__topRightLink">{{$site_config->phoneNumber}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="full-menu">
        <header>
            <div class="header">
                <a class="head-logo" href="">
                    <img src="{{asset('image/logo.png')}}" alt="">
                    <img src="{{asset('image/logoText.png')}}" alt="">
                </a>
                <div class="head-buttons">
                    <a id="closeFull">
                        <h3>Kapat</h3>
                        <i class="fal fa-times"></i>
                    </a>
                </div>
            </div>
        </header>
        <div class="mainMenu__content container">
            <div class="mainMenu__contentMenu">
                <ul class="mainMenu__nav">
                    <li class="mainMenu__navItem">
                        <a href="#projects" target="_self" class="mainMenu__navLink "> Projeler
                            <span>Projeler</span>
                        </a>
                    </li>
                    <li class="mainMenu__navItem">
                        <a href="#titleDesc" target="_self" class="mainMenu__navLink "> Hakkımızda
                            <span>Hakkımızda</span>
                        </a>
                    </li>
                    <li class="mainMenu__navItem">
                        <a href="#beforeAfter" target="_self" class="mainMenu__navLink "> Değişim
                            <span>Değişim</span>
                        </a>
                    </li>
                    <li class="mainMenu__navItem">
                        <a href="#contact" target="_self" class="mainMenu__navLink "> İletişim
                            <span>İletişim</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mainMenu__contentSocials"><h4 class="mainMenu__socialsTitle">Bize Ulaşın:</h4>
                <ul class="mainMenu__socials">
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://www.facebook.com/drowartstudio/" target="_blank" rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">facebook</span>
                            <span class="mainMenu__socialsLink--icon icon-facebook"></span>
                        </a>
                    </li>
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://www.instagram.com/drowartteam/" target="_blank" rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">instagram</span>
                            <span class="mainMenu__socialsLink--icon icon-instagram"></span>
                        </a>
                    </li>
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://www.behance.net/info70baaa5b" target="_blank" rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">behance</span>
                            <span class="mainMenu__socialsLink--icon icon-behance"></span>
                        </a>
                    </li>
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://www.linkedin.com/company/drowart/" target="_blank" rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">linkedin</span>
                            <span class="mainMenu__socialsLink--icon icon-linkedin"></span>
                        </a>
                    </li>
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://twitter.com/DrowartTeam" target="_blank" rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">twitter</span>
                            <span class="mainMenu__socialsLink--icon icon-twitter"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    $('#fullMenu').click(function () {
        $('.full-menu').addClass('active');
    })
    $('#closeFull').click(function () {
        $('.full-menu').removeClass('active');
    })
    $('.mainMenu__navLink').click(function () {
        $('.full-menu').removeClass('active');
    })
</script>
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
        console.log($(window).height() * 3)
        if ($(window).scrollTop() < $(window).height() * 3 && temp) {
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
    const slides = document.querySelectorAll('.slide');
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    const auto = true;
    const intervalTime = 5000;
    let slideInterval;

    const nextSlide = () => {
        const activeSlide = document.querySelector('.slide.active');
        activeSlide.classList.remove('active');
        if (activeSlide.nextElementSibling) {
            activeSlide.nextElementSibling.classList.add('active');
        } else {
            slides[0].classList.add('active');
        }
    }

    const prevSlide = () => {
        const activeSlide = document.querySelector('.slide.active');
        activeSlide.classList.remove('active');
        if (activeSlide.previousElementSibling) {
            activeSlide.previousElementSibling.classList.add('active');
        } else {
            slides[slides.length - 1].classList.add('active');
        }
    }

    next.addEventListener('click', () => {
        nextSlide();
        if (auto) {
            clearInterval(slideInterval)
            slideInterval = setInterval(nextSlide, intervalTime)
        }
    });

    prev.addEventListener('click', () => {
        if (auto) {
            clearInterval(slideInterval)
            slideInterval = setInterval(nextSlide, intervalTime)
        }
        prevSlide();
    })

    if (auto) {
        slideInterval = setInterval(nextSlide, intervalTime)
    }
</script>
<script>
    if ($(window).width() < 900) {
        $('.bal-before').addClass('bal-before-mobile');
        $('.bal-before-mobile').removeClass('bal-before-default');

        $('.bal-beforePosition').addClass('bal-beforePosition-mobile');
        $('.bal-beforePosition-mobile').removeClass('bal-beforePosition-default');

        $('.bal-afterPosition').addClass('bal-afterPosition-mobile');
        $('.bal-afterPosition-mobile').removeClass('bal-afterPosition-default');

        $('.bal-handle').addClass('bal-handle-mobile');
        $('.bal-handle-mobile').removeClass('bal-handle-default');

        $('.bal-before-inset').addClass('bal-before-inset-mobil');
        $('.bal-before-inset-mobil').removeClass('bal-before-inset-default');
    }
    else{
        $('.bal-before-mobile').addClass('bal-before-default');
        $('.bal-before').removeClass('bal-before-mobile');

        $('.bal-beforePosition-mobile').addClass('bal-beforePosition-default');
        $('.bal-beforePosition').removeClass('bal-beforePosition-mobile');

        $('.bal-afterPosition-mobile').addClass('bal-afterPosition-default');
        $('.bal-afterPosition').removeClass('bal-afterPosition-mobile');

        $('.bal-handle-mobile').addClass('bal-handle-default');
        $('.bal-handle').removeClass('bal-handle-mobile');

        $('.bal-before-inset-mobil').addClass('bal-before-inset-default');
        $('.bal-before-inset').removeClass('bal-before-inset-mobil');
    }
    $(window).resize(function (){
        if ($(window).width() < 900) {
            $('.bal-before').addClass('bal-before-mobile');
            $('.bal-before-mobile').removeClass('bal-before-default');

            $('.bal-beforePosition').addClass('bal-beforePosition-mobile');
            $('.bal-beforePosition-mobile').removeClass('bal-beforePosition-default');

            $('.bal-afterPosition').addClass('bal-afterPosition-mobile');
            $('.bal-afterPosition-mobile').removeClass('bal-afterPosition-default');

            $('.bal-handle').addClass('bal-handle-mobile');
            $('.bal-handle-mobile').removeClass('bal-handle-default');

            $('.bal-before-inset').addClass('bal-before-inset-mobil');
            $('.bal-before-inset-mobil').removeClass('bal-before-inset-default');
        }
        else{
            $('.bal-before-mobile').addClass('bal-before-default');
            $('.bal-before').removeClass('bal-before-mobile');

            $('.bal-beforePosition-mobile').addClass('bal-beforePosition-default');
            $('.bal-beforePosition').removeClass('bal-beforePosition-mobile');

            $('.bal-afterPosition-mobile').addClass('bal-afterPosition-default');
            $('.bal-afterPosition').removeClass('bal-afterPosition-mobile');

            $('.bal-handle-mobile').addClass('bal-handle-default');
            $('.bal-handle').removeClass('bal-handle-mobile');

            $('.bal-before-inset-mobil').addClass('bal-before-inset-default');
            $('.bal-before-inset').removeClass('bal-before-inset-mobil');
        }
    })

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
<script>

    class BeforeAfter {
        constructor(enteryObject) {

            const beforeAfterContainer = document.querySelector(enteryObject.id);
            const before = beforeAfterContainer.querySelector('.bal-before-default');
            const beforeText = beforeAfterContainer.querySelector('.bal-beforePosition-default');
            const afterText = beforeAfterContainer.querySelector('.bal-afterPosition-default');
            const handle = beforeAfterContainer.querySelector('.bal-handle-default');
            var widthChange = 0;

            beforeAfterContainer.querySelector('.bal-before-inset-default').setAttribute("style", "width: " + beforeAfterContainer.offsetWidth + "px;")
            window.onresize = function () {
                beforeAfterContainer.querySelector('.bal-before-inset-default').setAttribute("style", "width: " + beforeAfterContainer.offsetWidth + "px;")
            }
            before.setAttribute('style', "width: 50%;");
            handle.setAttribute('style', "left: 50%;");

            //touch screen event listener
            beforeAfterContainer.addEventListener("touchstart", (e) => {

                beforeAfterContainer.addEventListener("touchmove", (e2) => {
                    let containerWidth = beforeAfterContainer.offsetWidth;
                    let currentPoint = e2.changedTouches[0].clientX;

                    let startOfDiv = beforeAfterContainer.offsetLeft;

                    let modifiedCurrentPoint = currentPoint - startOfDiv;

                    if (modifiedCurrentPoint > 10 && modifiedCurrentPoint < beforeAfterContainer.offsetWidth - 10) {
                        let newWidth = modifiedCurrentPoint * 100 / containerWidth;

                        before.setAttribute('style', "width:" + newWidth + "%;");
                        afterText.setAttribute('style', "z-index: 1;");
                        handle.setAttribute('style', "left:" + newWidth + "%;");
                    }
                });
            });

            //mouse move event listener
            beforeAfterContainer.addEventListener('mousemove', (e) => {
                let containerWidth = beforeAfterContainer.offsetWidth;
                widthChange = e.offsetX;
                let newWidth = widthChange * 100 / containerWidth;

                if (e.offsetX > 10 && e.offsetX < beforeAfterContainer.offsetWidth - 10) {
                    before.setAttribute('style', "width:" + newWidth + "%;");
                    afterText.setAttribute('style', "z-index:" + "1;");
                    handle.setAttribute('style', "left:" + newWidth + "%;");
                }
            })

        }
    }
</script>
<script>

    class BeforeAfterMobile {
        constructor(enteryObject) {

            const beforeAfterContainer = document.querySelector(enteryObject.id);
            const before = beforeAfterContainer.querySelector('.bal-before-mobile');
            const beforeText = beforeAfterContainer.querySelector('.bal-beforePosition-mobile');
            const afterText = beforeAfterContainer.querySelector('.bal-afterPosition-mobile');
            const handle = beforeAfterContainer.querySelector('.bal-handle-mobile');
            var widthChange = 0;

            beforeAfterContainer.querySelector('.bal-before-inset-mobil').setAttribute("style", "height: " + beforeAfterContainer.offsetWidth + "px;")
            window.onresize = function () {
                beforeAfterContainer.querySelector('.bal-before-inset-mobil').setAttribute("style", "height: " + beforeAfterContainer.offsetWidth + "px;")
            }
            before.setAttribute('style', "height: 50%;");
            handle.setAttribute('style', "top: 50%;");

            //touch screen event listener
            beforeAfterContainer.addEventListener("touchstart", (e) => {

                beforeAfterContainer.addEventListener("touchmove", (e2) => {
                    let containerWidth = beforeAfterContainer.offsetHeight;
                    let currentPoint = e2.changedTouches[0].clientY;

                    let startOfDiv = beforeAfterContainer.offsetTop;

                    let modifiedCurrentPoint = currentPoint - startOfDiv;

                    if (modifiedCurrentPoint > 10 && modifiedCurrentPoint < beforeAfterContainer.offsetHeight - 10) {
                        let newWidth = modifiedCurrentPoint * 100 / containerWidth;

                        before.setAttribute('style', "height:" + newWidth + "%;");
                        afterText.setAttribute('style', "z-index: 1;");
                        handle.setAttribute('style', "top:" + newWidth + "%;");
                    }
                });
            });

            //mouse move event listener
            beforeAfterContainer.addEventListener('mousemove', (e) => {
                let containerWidth = beforeAfterContainer.offsetHeight;
                widthChange = e.offsetY;
                let newWidth = widthChange * 100 / containerWidth;

                if (e.offsetY > 10 && e.offsetY < beforeAfterContainer.offsetHeight - 10) {
                    before.setAttribute('style', "height:" + newWidth + "%;");
                    afterText.setAttribute('style', "z-index:" + "1;");
                    handle.setAttribute('style', "top:" + newWidth + "%;");
                }
            })

        }
    }
</script>
<script>
    if ($(window).width() < 900) {

        new BeforeAfterMobile({
            id: '#two'
        });
    }
    else{
        new BeforeAfter({
            id: '#two'
        });
    }
    $(window).resize(function (){
        if ($(window).width() < 900) {

            new BeforeAfterMobile({
                id: '#two'
            });
        }
        else{
            new BeforeAfter({
                id: '#two'
            });
        }
    })

</script>
<script>
    $(document).ready(function () {

        var counter = 0;
        var c = 0;
        var i = setInterval(function () {
            $(".loading-page .counter h1").html(c + "%");
            $(".loading-page .counter hr").css("width", c + "%");
            counter++;
            c++;
            if (counter == 101) {
                clearInterval(i);
                $('.loading-page').fadeOut();
                $('.wrap').show();
            }
        }, 10);

    });
</script>
<script>
    AOS.init();
</script>
</html>
