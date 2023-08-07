<!DOCTYPE html>
<html lang="{{__('language')['lang']}}">

<head>
    <meta charset="utf-8">
    <title>Máximo Prandi</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="Soy Máximo Luciano Prandi, un programador y desarrollador especializado en aplicaciones para la web y con experiencia en redes, servidores y sistemas Linux. Si necesitas un desarrollador comprometido y apasionado por su trabajo, no dudes en contactarme para hablar de cómo puedo ayudarte o trabajar para ti." name="description">
    <meta content="Máximo Luciano Prandi, Desarrollador web, Desarrollador software, freelancer, Programador, Desarrollador PHP, Desarrollador Laravel, Desarrollador Backend, Desplegar sevidores, Desplegar Linux" name="keywords">
    <meta name="title" content="Máximo Prandi Portfolio">
    <meta name="author" content="M&P">
    <meta name="robots" content="index, follow">
    <meta name="language" content="{{__('language')['fullname']}}">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' cdn.tailwindcss.com cdn.jsdelivr.net fonts.googleapis.com unpkg.com fonts.gstatic.com; " />

    <link rel="alternate" href="https://maximoprandi.tech/es" hreflang="es" />
    <link rel="alternate" href="https://maximoprandi.tech/en" hreflang="en" />
    <link rel="alternate" href="https://maximoprandi.tech/it" hreflang="it" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://maximoprandi.tech/{{__('language')['lang']}}" />
    <meta property="og:title" content="Máximo Prandi" />
    <meta property="og:description" content="{{__('language')['description']}}" />
    <meta property="og:image" content="/img/favicon.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://maximoprandi.tech/{{__('language')['lang']}}" />
    <meta property="twitter:title" content="Máximo Prandi" />
    <meta property="twitter:description" content="{{__('language')['description']}}" />
    <meta property="twitter:image" content="/img/favicon.png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="/css/all.min.css" rel="stylesheet">
    <link href="/lib/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>


    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->



    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+54 9 11 3771-2754</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>contact@maximoprandi.me</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" data-bs-interval="12000" class="carousel slide"  data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="absolute md:static top-0 left-0 w-full h-full object-cover z-0" autoplay loop muted playsinline alt="Stay video">
                        <source src="/video/av1/Stay.mp4" type='video/mp4'>
                        <source src="/video/h265/Stay.mp4" type='video/mp4'>
                        <source src="/video/h264/Stay.mp4" type='video/mp4'>
                    </video>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">{{__('stay-title')}}</h1>
                                    <a target="_blank" href="https://stay.com.ar" class="btn btn-primary py-sm-3 px-sm-4">{{__('know-more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <video class="absolute md:static top-0 left-0 w-full h-full object-cover z-0" autoplay loop muted playsinline alt="Larn video">
                        <source src="/video/av1/Larn.mp4" type='video/mp4'>
                        <source src="/video/h265/Larn.mp4" type='video/mp4'>
                        <source src="/video/h264/Larn.mp4" type='video/mp4'>
                    </video>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">{{__('larn-title')}}</h1>
                                    <a target="_blank" href="https://larn.ar" class="btn btn-primary py-sm-3 px-sm-4">{{__('know-more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div data-parallax="scroll" @if (Browser::isEdge() || (Browser::isMac() && Browser::isMobile())) data-image-src="img/png/stay-banner.png" @else data-image-src="img/avif/stay-banner.avif" @endif class="facts container-fluid py-5">
        <div class="mt-56 mb-56 container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 style="text-shadow: 2px 2px 4px #000000; color:azure" class="display-5 mb-4">{{__('stay-title')}}</h1>
                    <p style="text-shadow: 2px 2px 4px #000000; color:rgb(103, 103, 103)" class="mb-4">{{__('stay-subtitle')}}</p>
                    <a target="_blank" class="btn btn-primary py-3 px-4" href="https://stay.com.ar">{{__('know-more')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div data-parallax="scroll" @if (Browser::isEdge() || (Browser::isMac() && Browser::isMobile())) data-image-src="img/png/larn-banner.png" @else data-image-src="img/avif/larn-banner.avif" @endif class="facts container-fluid py-5">
        <div class="mt-56 mb-56 container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 style="text-shadow: 2px 2px 4px #000000; color:azure" class="display-5 mb-4">{{__('larn-title')}}</h1>
                    <p style="text-shadow: 2px 2px 4px #000000; color:rgb(103, 103, 103)" class="mb-4">{{__('larn-subtitle')}}</p>
                    <a target="_blank" class="btn btn-primary py-3 px-4" href="https://larn.ar">{{__('know-more')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div data-parallax="scroll" @if (Browser::isEdge() || (Browser::isMac() && Browser::isMobile())) data-image-src="img/png/jildam.png" @else data-image-src="img/avif/jildam.avif" @endif class="facts container-fluid py-5">
        <div class="mt-56 mb-56 container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-5 mb-4" style="text-shadow: 2px 2px 4px #000000; color:azure">{{__('jildam-title')}}</h1>
                    <p class="mb-4" style="text-shadow: 2px 2px 4px #000000; color:rgb(103, 103, 103)">{{__('jildam-subtitle')}}</p>
                    <a target="_blank" class="btn btn-primary py-3 px-4" href="https://github.com/MaximoBrandi/Jildam">{{__('know-more')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div data-parallax="scroll" @if (Browser::isEdge() || (Browser::isMac() && Browser::isMobile())) data-image-src="img/png/LAC.png" @else data-image-src="img/avif/LAC.avif" @endif class="facts container-fluid py-5">
        <div class="mt-56 mb-56 container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 style="text-shadow: 2px 2px 4px #000000; color:azure" class="display-5 mb-4">{{__('lac-title')}}</h1>
                    <p style="text-shadow: 2px 2px 4px #000000; color:rgb(103, 103, 103)" class="mb-4">{{__('lac-subtitle')}}</p>
                    <a target="_blank" class="btn btn-primary py-3 px-4" href="https://github.com/MaximoBrandi/lac">{{__('know-more')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">{{__('my-projects')}}</p>
                <h1 class="display-5 mb-5">{{__('my-projects-description')}}</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">{{__('all')}}</li>
                        <li class="mx-2" data-filter=".first">{{__('complete-projects')}}</li>
                        <li class="mx-2" data-filter=".second">{{__('ongoing-projects')}}</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <picture >
                            <source srcset="img/avif/stay.avif" type="image/avif">
                            <img class="img-fluid" alt="Stay" src="img/png/stay.png" type="image/png">
                        </picture>
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Stay</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="https://github.com/MaximoBrandi/stay"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="https://stay.com.ar/"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <picture >
                            <source srcset="img/avif/Project-1.avif" type="image/avif">
                            <img class="img-fluid" alt="Larn" src="img/png/Project-1.png" type="image/png">
                        </picture>
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Larn</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="https://github.com/Lavor-workspace/larn"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="https://larn.ar/"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <picture >
                            <source srcset="img/avif/Jildam.avif" type="image/avif">
                            <img src="img/png/Jildam.png" class="img-fluid" alt="Jildam" type="image/png">
                        </picture>
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Jildam</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="https://github.com/MaximoBrandi/Jildam"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <picture>
                            <source srcset="img/avif/LAC.avif" type="image/avif" />
                            <img src="img/png/LAC.png" class="img-fluid" type="image/png" alt="LAC"/>
                        </picture>
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">LAC</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="https://github.com/MaximoBrandi/lac"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">{{__('contact-me')}}</h4>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+54 9 11 2407-9549</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@maximoprandi.me</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://api.whatsapp.com/send/?phone=5491124079549&text&type=phone_number&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.linkedin.com/in/m%C3%A1ximo-prandi/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div ass="col-lg-3 col-md-6">
                    <div class="container flex justify-center mx-auto">
                        <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                            <!-- Dropdown toggle button -->
                            <button @mouseover="open = true" class="flex items-center block rounded-md ">
                                <span><span class='fi fi-{{__('language')['name']}}'></span></span>
                                <svg class="w-6 h-6 text-white text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div x-show="open"
                            x-transition:enter.duration.500ms
                            x-transition:leave.duration.800ms
                            class="absolute right-0 rounded-md shadow-xl">
                                <a href="{{ __('language')['selector']['first']['url'] }}"
                                    class="hover:text-white">
                                    <span class='fi fi-{{ __('language')['selector']['first']['name'] }}'></span>
                                </a>
                                <a href="{{ __('language')['selector']['second']['url'] }}"
                                    class="hover:text-white">
                                    <span class='fi fi-{{ __('language')['selector']['second']['name'] }}'></span>
                                </a>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/parallax/parallax.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>
