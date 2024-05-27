@extends('frontend.layouts.master')
@section('title', 'Logistique')
@section('main-content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Accueil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Logistique</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="moi">
        <div class="montexte">
            <h3>Logistique</h3>
            <p>
                Bienvenue chez MINUTE, où l'excellence logistique est notre maître-mot. Nous transformons vos idées en
                réalité grâce à des solutions innovantes et une performance inégalée. Notre équipe hautement qualifiée
                relève avec succès les défis logistiques les plus complexes, s'adaptant à vos besoins spécifiques, que ce
                soit pour le transport, la gestion de la chaîne d'approvisionnement, la planification d'événements ou des
                conseils stratégiques.

                Avec une technologie de pointe, une collaboration solide, et une gamme complète de services logistiques,
                nous garantissons la rapidité, la sécurité, et la réussite de vos projets, peu importe où dans le monde.
                Votre satisfaction est notre priorité absolue. Contactez MINUTE dès aujourd'hui pour faire de vos projets un
                succès indiscutable.

                .</p>
            <a href="{{ route('contact') }}" class="btn-voir-plus">Nous contactez-></a>
        </div>
        <div class="imagemoi">
            <img src="./images/T2.jpg" alt="Image">
        </div>
    </section>




    @include('frontend.layouts.newsletter')



@endsection

@push('styles')
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons'
        async='async'></script>
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons'
        async='async'></script>
    <style>
        /* Banner Sliding */
        #Gslider .carousel-inner {
            background: red;
            color: black;
        }

        #Gslider .carousel-inner {
            height: 550px;
        }

        #Gslider .carousel-inner img {
            width: 100% !important;
            opacity: .7;
        }

        #Gslider .carousel-inner .carousel-caption {
            bottom: 60%;
        }

        #Gslider .carousel-inner .carousel-caption h1 {
            font-size: 50px;
            font-weight: bold;
            line-height: 100%;
            color: #F7941D;
        }

        #Gslider .carousel-inner .carousel-caption p {
            font-size: 18px;
            color: black;
            margin: 28px 0 28px 0;
        }

        #Gslider .carousel-indicators {
            bottom: 70px;
        }

        @media only screen and (max-width: 890px) {
            #Gslider .carousel-inner {
                height: 300px;
            }

            .content {
                text-align: center;
            }
        }

        @media only screen and (max-width: 390px) {
            #Gslider .carousel-inner {
                height: 150px;
            }

            .content {
                text-align: center;
            }

        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        /*==================================================================
                                                                                                                                                    [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function() {
            $filter.on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({
                    filter: filterValue
                });
            });

        });

        // init Isotope
        $(window).on('load', function() {
            var $grid = $topeContainer.each(function() {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine: 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function() {
            $(this).on('click', function() {
                for (var i = 0; i < isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
        function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen || el.webkitCancelFullScreen || el.mozCancelFullScreen || el
                .exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el
                .msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>
@endpush
