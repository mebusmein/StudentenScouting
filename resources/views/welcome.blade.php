<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>Studentenscouting</title>

    {{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>

    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
</head>
<body>

<!-- PRELOADER -->
{{--<div id="st-preloader">--}}
{{--<div id="pre-status">--}}
{{--<div class="preload-placeholder"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- /PRELOADER -->--}}


<!-- HEADER -->
<header id="header">
    <nav class="navbar st-navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#st-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="/"><img style="height: 70px;margin-top: -20px;" src="{{ asset('img/logo.png') }}"
                                              alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="st-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#header">{!! __('home.menu.home') !!}</a></li>
                    <li><a href="#services">{!! __('home.menu.groups') !!}</a></li>
                    <li><a href="#contact">{!! __('home.menu.contact') !!}</a></li>
                    {{--<li><a href="blog.html">Blog</a></li>--}}
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!-- /HEADER -->


<!-- SLIDER -->
<section id="slider">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url({{ asset('img/bg1.jpg') }})">
                <div class="carousel-caption container">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1>{!! __('home.slider.1.head') !!}</h1>
                            <h2>{!! __('home.slider.1.title') !!}</h2>
                            <p>{!! __('home.slider.1.subtitle') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url({{ asset('img/bg4.jpg') }})">
                <div class="carousel-caption container">
                    <div class="row">
                        <h1>{!! __('home.slider.2.head') !!}</h1>
                        <h2>{!! __('home.slider.2.title') !!}</h2>
                        <p>{!! __('home.slider.2.subtitle') !!}</p>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url({{ asset('img/bg2.jpg') }})">
                <div class="carousel-caption container">
                    <div class="row">
                        <h1>{!! __('home.slider.3.head') !!}</h1>
                        <h2>{!! __('home.slider.3.title') !!}</h2>
                        <p>{!! __('home.slider.3.subtitle') !!}</p>
                    </div>
                </div>
            </div>
            <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div> <!--/#home-carousel-->
</section>
<!-- /SLIDER -->


<!-- SERVICES -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>{!! __('home.groups.title') !!}</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-university"></i> Amsterdam</h2>
                        <p>{!! __('home.description_amsterdam') !!}</p>
                        <a href="http://www.studentenscoutingamsterdam.nl">{{ __('home.read_more') }}</a>
                    </div>

                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-cogs"></i> Delft</h2>
                        <p>{!! __('home.description_delft') !!}</p>
                        <a href="http://www.delftschezwervers.nl">{{ __('home.read_more') }}</a>
                    </div>

                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-laptop"></i> Enschede</h2>
                        <p>{!! __('home.description_enschede') !!}</p>
                        <a href="http://www.radixenschede.nl">{{ __('home.read_more') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-glass"></i> Groningen</h2>
                        <p>{!! __('home.description_groningen') !!}</p>
                        <a href="https://martinistam.nl">{{ __('home.read_more') }}</a>
                    </div>

                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-key"></i> Leiden</h2>
                        <p>{!! __('home.description_leiden') !!}</p>
                        <a href="https://www.facebook.com/sleutelstam">{{ __('home.read_more') }}</a>
                    </div>

                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-coffee"></i> Nijmegen</h2>
                        <p>{!! __('home.description_nijmegen') !!}</p>
                        <a href="https://www.facebook.com/studentenstam">{{ __('home.read_more') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-leaf"></i> Wageningen</h2>
                        <p>{!! __('home.description_wageningen') !!}</p>
                        <a href="http://www.yggdrasilstam.nl">{{ __('home.read_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /SERVICES -->


<!-- ABOUT US -->
<section id="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="about-us text-center">
                    <h4>{{ __('home.info.1.title') }}</h4>
                    <p>{!! __('home.info.1.description') !!}</p>
                </div>
            </div>
            <div class="col-sm-6 our-office">
                <div id="office-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('img/bg2.jpg') }}" alt="">
                        </div>
                        <a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i
                                    class="fa fa-angle-left"></i></a>
                        <a class="office-carousel-right" href="#office-carousel" data-slide="next"><i
                                    class="fa fa-angle-right"></i></a>
                    </div>
                </div> <!--/#office-carousel-->
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT US -->

{{--<section id="our-team">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<div class="section-title">--}}
{{--<h1>Our Team</h1>--}}
{{--<span class="st-border"></span>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}

{{--</div>--}}
{{--<div class="col-md-6">--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}


{{--<!-- ABOUT US -->--}}
{{--<section id="about-us">--}}
{{--<div class="container-fluid">--}}
{{--<div class="row">--}}
{{--<div class="col-sm-6 our-office">--}}
{{--<div id="office-carousel" class="carousel slide" data-ride="carousel">--}}
{{--<div class="carousel-inner">--}}
{{--<div class="item active">--}}
{{--<img src="{{ asset('img/bg3.jpg') }}" alt="">--}}
{{--</div>--}}
{{--<div class="item">--}}
{{--<img src="{{ asset('img/bg2.jpg') }}" alt="">--}}
{{--</div>--}}
{{--<div class="item">--}}
{{--<img src="{{ asset('img/bg1.jpg') }}" alt="">--}}
{{--</div>--}}

{{--<a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i--}}
{{--class="fa fa-angle-left"></i></a>--}}
{{--<a class="office-carousel-right" href="#office-carousel" data-slide="next"><i--}}
{{--class="fa fa-angle-right"></i></a>--}}
{{--</div>--}}
{{--</div> <!--/#office-carousel-->--}}
{{--</div>--}}
{{--<div class="col-sm-6">--}}
{{--<div class="about-us text-center">--}}
{{--<h4>{{ __('home.info.2.title') }}</h4>--}}
{{--<p>{!! __('home.info.2.description') !!}</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}
{{--<!-- /ABOUT US -->--}}

<!-- TESTIMONIAL -->
<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="overlay"></div>
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="st-testimonials">

                    <div class="item active text-center">
                        <p>"Ok het mag dan twee jaar geduurt hebben. Maar dan heb je me toch een website!"</p>
                        <div class="st-border"></div>
                        <div class="client-info">
                            <h5>Tim Mein</h5>
                            <span>Prominent lid Martinistam</span>
                        </div>
                    </div>

                    <div class="item text-center">
                        <p>""</p>
                        <div class="st-border"></div>
                        <div class="client-info">
                            <h5>Yke wijnker</h5>
                            <span>Babbelbox</span>
                        </div>
                    </div>

                    <div class="item text-center">
                        <p>""</p>
                        <div class="st-border"></div>
                        <div class="client-info">
                            <h5>Amber wijnker</h5>
                            <span>Doet ook iets met Scouting</span>
                        </div>
                    </div>

                    <div class="item text-center">
                        <p>""</p>
                        <div class="st-border"></div>
                        <div class="client-info">
                            <h5>Lennard de Vries</h5>
                            <span>Voormalig voorzitter</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /TESTIMONIAL -->


<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>{{ __('home.contact.title') }}</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            <div class="col-sm-4 contact-info">
                <p class="contact-content">
                    {!! __('home.contact.detail') !!}
                </p>
            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <form action="php/send-contact.php" class="contact-form" name="contact-form" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" required="required" placeholder="Name*">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" required="required" placeholder="Email*">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="city" placeholder="In welke stad je studeert/gaat studeren">
                        </div>
                        <div class="col-sm-12">
                            <textarea name="message" required="required" cols="30" rows="7"
                                      placeholder="Message*"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <input type="submit" name="submit" value="Verstuur" class="btn btn-send">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /CONTACT -->

<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <!-- SOCIAL ICONS -->
            <div class="col-sm-6 col-sm-push-6 footer-social-icons">
                <span>{!! __('home.follow_us') !!}:</span>
                <a href="https://www.facebook.com/studentenscouting"><i class="fa fa-facebook"></i></a>
            </div>
            <!-- /SOCIAL ICONS -->
            <div class="col-sm-6 col-sm-pull-6 copyright">
                <p>&copy; {{ \Carbon\Carbon::now()->year }} <a href="https://martinistam.nl">Mstam designs</a>. All
                    Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- /FOOTER -->


<!-- Scroll-up -->
<div class="scroll-up">
    <ul>
        <li><a href="#header"><i class="fa fa-angle-up"></i></a></li>
    </ul>
</div>

{{--<script type="text/javascript" src="{{ asset('js/app.js')}}"></script><!-- jQuery -->--}}
<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script><!-- jQuery -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script><!-- Bootstrap -->
<script type="text/javascript" src="{{ asset('js/jquery.parallax.js')}}"></script><!-- Parallax -->
<script type="text/javascript" src="{{ asset('js/smoothscroll.js')}}"></script><!-- Smooth Scroll -->
<script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js')}}"></script><!-- masonry -->
<script type="text/javascript" src="{{ asset('js/jquery.fitvids.js')}}"></script><!-- fitvids -->
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js')}}"></script><!-- Owl-Carousel -->
<script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js')}}"></script><!-- CounterUp -->
<script type="text/javascript" src="{{ asset('js/waypoints.min.js')}}"></script><!-- CounterUp -->
<script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js')}}"></script><!-- isotope -->
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script><!-- magnific -->
<script type="text/javascript" src="{{ asset('js/scripts.js')}}"></script><!-- Scripts -->

</body>
</html>