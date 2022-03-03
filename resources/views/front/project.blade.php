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
<body class="sticky">
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
            @foreach($projects as $key=>$project)
                @if($key)
                    <div class="slide projec close slide{{$project->id}}">
                @else
                            <div class="slide projec close active slide{{$project->id}}">
                                @endif
                    <img src="{{asset($project->getFirstİmage->image)}}" alt="">
                <div class="slide-text animate__animated active">
                    <h2> to new challenges</h2>
                    <a type="submit" class="button discover" id="slide{{$project->id}}"><span class="button__text">Discover More</span></a>
                </div>
                <div class="hoverText">
                    <h3>to new challenges</h3>
                   <p>{!!$project->description!!}</p>
                    <a class="back"><i class="fal fa-chevron-left"></i> </a>
                    <ul>
                        <li><i class="fal fa-map-marker-alt"></i>{{$project->konum}}</li>
                        <li><i class="fal fa-calendar-alt"></i> {{$project->phoneNumber}}</li>
                        <li><i class="far fa-ruler-triangle"></i>{{$project->metre_kare}}</li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        <div class="slider-foot projects">
            <ul class="social-icons">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
            <span>
                <i class="fal fa-map-marker-alt"></i> İstanbul
            </span>
            <span>
                +90 542 841 4545
            </span>
            <span>
                yusufcaglar_aksoy@hotmail.com
            </span>
        </div>
        <div class="slider-buttons">
            <a id="prev">
                <i class="fal fa-chevron-left"></i>
            </a>
            <a id="next">
                <i class="fal fa-chevron-right"></i>
            </a>
        </div>
        <a class="bulb active"><i class="fas fa-lightbulb-slash"></i></a>
    </div>
        @foreach($projects as $project)
        <div class="gallery slide{{$project->id}}">
            @foreach($project->getImages as $images)
        <div data-aos="fade-up">
            <img src="{{asset($images->image)}}" alt="">
        </div>
            @endforeach
        </div>
        @endforeach
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
                        <a class="mainMenu__socialsLink" href="https://www.facebook.com/drowartstudio/" target="_blank"
                           rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">facebook</span>
                            <span class="mainMenu__socialsLink--icon icon-facebook"></span>
                        </a>
                    </li>
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://www.instagram.com/drowartteam/" target="_blank"
                           rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">instagram</span>
                            <span class="mainMenu__socialsLink--icon icon-instagram"></span>
                        </a>
                    </li>
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://www.behance.net/info70baaa5b" target="_blank"
                           rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">behance</span>
                            <span class="mainMenu__socialsLink--icon icon-behance"></span>
                        </a>
                    </li>
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://www.linkedin.com/company/drowart/"
                           target="_blank" rel="noopener noreferrer">
                            <span class="mainMenu__socialsLink--text">linkedin</span>
                            <span class="mainMenu__socialsLink--icon icon-linkedin"></span>
                        </a>
                    </li>
                    <li class="mainMenu__socialsItem">
                        <a class="mainMenu__socialsLink" href="https://twitter.com/DrowartTeam" target="_blank"
                           rel="noopener noreferrer">
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
    $('.bulb').click(function () {
        if($('.slide.projec').hasClass('close')){
            $('.slide.projec').removeClass('close')
            $('.bulb').removeClass('active')
        }
        else{
            $('.slide.projec').addClass('close')
            $('.bulb').addClass('active')
        }
    })
</script>
<script>
    function update(e) {
        var x = e.clientX || e.touches[0].clientX
        var y = e.clientY || e.touches[0].clientY

        document.documentElement.style.setProperty('--cursorX', x + 'px')
        document.documentElement.style.setProperty('--cursorY', y + 'px')
    }

    document.addEventListener('mousemove', update)
    document.addEventListener('touchmove', update)
</script>
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
    const slides = document.querySelectorAll('.slide');
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    var auto = true;

    const intervalTime = 5000;
    let slideInterval;
    function clearGalery() {
        $('.gallery').css('display', 'none');
    }
    $('.discover').click(function (event) {
        clearGalery()
        id='.gallery.'+event.currentTarget.id;
        $('.slide.active .slide-text').removeClass('active')
        $('.slide.active .hoverText').addClass('active')
        $(id).css('display','flex');
        $('.slider-buttons').addClass('hide');
        $('body').removeClass('sticky');
        auto = false;
        clearInterval(slideInterval)
        AOS.init();
    })
    $('.back').click(function () {
        clearGalery()
        $('.slide.active .slide-text').addClass('active')
        $('.slide.active .hoverText').removeClass('active')
        $('.slider-buttons').removeClass('hide');
        $('body').addClass('sticky');
        auto = true;
        if (auto) {
            clearInterval(slideInterval)
            slideInterval = setInterval(nextSlide, intervalTime)
        }
    })
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
    $(document).ready(function () {

        var counter = 0;
        var c = 0;
        var b=0;
        var i = setInterval(function () {
            $(".loading-page .counter h1").html(b + "%");
            $(".loading-page .counter h1").css('margin-bottom' , b/1.2+ "vh");
            $(".loading-page .counter hr").css("width", c + "vh");
            if(c%2 === 0){
                b++
            }
            counter++;
            c++;
            if (counter == 201) {
                clearInterval(i);
                $('.loading-page').fadeOut();
                $('.wrap').show();
            }
        }, 15);

    });
</script>
<script>
    AOS.init();
</script>
</html>
