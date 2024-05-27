@extends('frontend.layouts.master')
@section('title', 'E-SHOP || HOME PAGE')
@section('main-content')
    <!-- Slider Area -->
    @if (count($banners) > 0)
        <section id="Gslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($banners as $key => $banner)
                    <li data-target="#Gslider" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}">
                    </li>
                @endforeach

            </ol>
            <style>
                .carou {
                    position: absolute;
                    top: 20%;
                    margin-left: 150px;
                                
                                
                }.beau{
                    margin-bottom: 70px;
                }
                @media only screen and (min-width: 768px) and (max-width: 991px)  {
                    .carou {
                        margin-left: 60px;
                        }

                        .montexte h3 {
                            font-size: 20px;
                            margin-bottom: 30px;
                            padding-bottom: 15px;
                        }
                        .montexte{
                            margin-left: 180px;
                            flex-basis: 30%;
	
                        }
                        .montexte h3{
                            padding-bottom: 20px;
                        }
                        .montexte p{
                            font-size: 18px;
                            padding-bottom: 60px;
                            color: black;

                        }
                        .mimi {
                            padding-top: 100px;
                            margin-bottom: 100px;
                        }
                    }
                    @media only screen and (max-width: 767px)  {
                    .carou {
                        margin-left: 40px;
                                    
                        }
                        .beau{
                            font-size: 30px;
                            margin-bottom: 20px;

                        }
                        .montexte h3 {
                            font-size: 20px;
                            margin-bottom: 10px;
                            padding-bottom: 15px;
                        }
                        .montexte h3::before {
                            position: absolute;
                            content: "";
                            height: 4px;
                            width: 120px;
                            background: red;
                            left: 10%;
                            bottom: 0;
                            margin-left: -40px;
                        }
                        .mimi {
                            padding-top: 100px;
                            margin-bottom: 100px;
                        }
                    }
                    @media only screen and (max-width: 450px){
                    .carou {
                        margin-left: 20px;
                                    
                        }
                        .beau{
                            font-size: 20px;

                        }
                        .mimi {
                            padding-top: 60px;
                            margin-bottom: 100px;
                        }
                        .montexte p{
                            font-size: 18px;
                            padding-bottom: 60px;
                            color: black;
                            margin-left: 10px;

                        }

                                   
                    }
            </style>
            
            <div class="carousel-inner" role="listbox">
                @foreach ($banners as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="first-slide" src="{{ $banner->photo }}" alt="First slide">
                        <div class="carou">
                            <h1 class="beau">{{ $banner->title }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#Gslider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Gslider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>
    @endif

    <!--/ End Slider Area -->

    <!-- Start Small Banner  -->


    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="./images/ii.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="./images/m4.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">A Propos</h5>
                    <h1 class="mb-4"></h1>
                    <p>Minute est une entreprise polyvalente spécialisée dans la gestion de la logistique, la livraison de colis et de nourriture, ainsi que les services événementiels, le déménagement et l'e-commerce. Notre engagement envers la satisfaction de nos clients est au cœur de tout ce que nous faisons, et nous nous efforçons de simplifier la vie de nos clients, qu'il s'agisse de particuliers ou d'entreprises.</p>
                    <a href="{{ route('about-us') }}" class="btn btn-secondary rounded-pill px-5 py-3 text-white">Voir plus</a>
                </div>
            </div>
        </div>
    </div>




    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Nos services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="./images/2.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="{{ route('livraison') }}">service de livraison</a></h3>
                <p>Livraison de colis et de nourriture</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="./images/m5.jpg "alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="{{ route('logistique') }}">Service de Logistique</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="./images/m3.jpg "alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="{{ route('evenementiel') }}">Service Evènementiel</a></h3>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="./images/m4.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="{{ route('demenagement') }}">Service de déménagement</a></h3>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="./images/ii.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="{{ route('livraison') }}">Service E-Commerce</a></h3>
                
              </div>
            </div>
          </div>
  
        </div>
      </div>

    </section>


    
    {{-- @php
    $featured=DB::table('products')->where('is_featured',1)->where('status','active')->orderBy('id','DESC')->limit(1)->get();
    @endphp --}}

          
    <!-- End Shop Blog  -->
          
          
    <section class="moi">
        <div class="montexte">
            <h3> Devenir partenaire</h3>
            <p>Partenaire, si vous possédez des véhicules, vous avez la possibilité de les mettre à disposition en les louant via notre plateforme. De même, si vous vous trouvez à Bobo-Dioulasso, par exemple, et que vous envisagez de vous rendre à Ouagadougou sans transporter de marchandises, vous pouvez nous contacter. Nous disposons d'équipements à Bobo-Dioulasso que 
                nous souhaitons faire parvenir à Ouagadougou. Ensemble, nous pouvons établir un partenariat pour faciliter le transport de ces biens.</p>
            <a href="{{ route('partenaire') }}" class="btn-voir-plus">Devenir partenaire</a>
        </div>
        <div class="imagemoi">
            <img src="./images/par.jpg" alt="Image">
        </div>
    </section>

    



   
    <!-- End Shop Services Area -->

    @include('frontend.layouts.newsletter')

    <!-- Modal -->
    @if ($product_lists)
        @foreach ($product_lists as $key => $product)
            <div class="modal fade" id="{{ $product->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    class="ti-close" aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <!-- Product Slider -->
                                    <div class="product-gallery">
                                        <div class="quickview-slider-active">
                                            @php
                                                $photo = explode(',', $product->photo);
                                                // dd($photo);
                                            @endphp
                                            @foreach ($photo as $data)
                                                <div class="single-slider">
                                                    <img src="{{ $data }}" alt="{{ $data }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- End Product slider -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="quickview-content">
                                        <h2>{{ $product->title }}</h2>
                                        <div class="quickview-ratting-review">
                                            <div class="quickview-ratting-wrap">
                                                <div class="quickview-ratting">
                                                    {{-- <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="fa fa-star"></i> --}}
                                                    @php
                                                        $rate = DB::table('product_reviews')
                                                            ->where('product_id', $product->id)
                                                            ->avg('rate');
                                                        $rate_count = DB::table('product_reviews')
                                                            ->where('product_id', $product->id)
                                                            ->count();
                                                    @endphp
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($rate >= $i)
                                                            <i class="yellow fa fa-star"></i>
                                                        @else
                                                            <i class="fa fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <a href="#"> ({{ $rate_count }} customer review)</a>
                                            </div>
                                            <div class="quickview-stock">
                                                @if ($product->stock > 0)
                                                    <span><i class="fa fa-check-circle-o"></i> {{ $product->stock }} in
                                                        stock</span>
                                                @else
                                                    <span><i class="fa fa-times-circle-o text-danger"></i>
                                                        {{ $product->stock }} out stock</span>
                                                @endif
                                            </div>
                                        </div>
                                        @php
                                            $after_discount = $product->price - ($product->price * $product->discount) / 100;
                                        @endphp
                                        <h3><small><del
                                                    class="text-muted">${{ number_format($product->price, 2) }}</del></small>
                                            ${{ number_format($after_discount, 2) }} </h3>
                                        <div class="quickview-peragraph">
                                            <p>{!! html_entity_decode($product->summary) !!}</p>
                                        </div>
                                        @if ($product->size)
                                            <div class="size">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <h5 class="title">Size</h5>
                                                        <select>
                                                            @php
                                                                $sizes = explode(',', $product->size);
                                                                // dd($sizes);
                                                            @endphp
                                                            @foreach ($sizes as $size)
                                                                <option>{{ $size }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @endif
                                        <form action="{{ route('single-add-to-cart') }}" method="POST" class="mt-4">
                                            @csrf
                                            <div class="quantity">
                                                <!-- Input Order -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number"
                                                            disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="hidden" name="slug" value="{{ $product->slug }}">
                                                    <input type="text" name="quant[1]" class="input-number"
                                                        data-min="1" data-max="1000" value="1">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number"
                                                            data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ End Input Order -->
                                            </div>
                                            <div class="add-to-cart">
                                                <button type="submit" class="btn">Add to cart</button>
                                                <a href="{{ route('add-to-wishlist', $product->slug) }}"
                                                    class="btn min"><i class="ti-heart"></i></a>
                                            </div>
                                        </form>
                                        <div class="default-social">
                                            <!-- ShareThis BEGIN -->
                                            <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <!-- Modal end -->
@endsection

@push('styles')
    
      
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
                height: 200px;
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
