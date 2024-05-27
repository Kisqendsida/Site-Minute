<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            @php
                                $settings = DB::table('settings')->get();
                                
                            @endphp
                            <li><i class="ti-headphone-alt"></i>
                                @foreach ($settings as $data)
                                    {{ $data->phone }}
                                @endforeach
                            </li>
                            <li><i class="ti-email"></i>
                                @foreach ($settings as $data)
                                    {{ $data->email }}
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">


                            {{-- <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> --}}
                            @auth
                                @if (Auth::user()->role == 'admin')
                                    <li><i class="ti-user"></i> <a href="{{ route('admin') }}" target="_blank">Tableau de Bord</a>
                                    </li>
                                @else
                                    <li><i class="ti-user"></i> <a href="{{ route('user') }}" target="_blank">Tableau de Bord</a>
                                    </li>
                                @endif
                                <li><i class="ti-power-off"></i> <a href="{{ route('user.logout') }}">Se Déconnecter</a></li>
                            @else
                                <li><i class="ti-power-off"></i><a href="{{ route('login.form') }}">Se Connecter | </a> 
                                <a href="{{route('register.form')}}">S'inscrire</a></li>
                                        
                            @endauth

                            

                                <div class="right-bar">
                                    <!-- Search Form -->
                                    <div class="sinlge-bar shopping">
                                        @php
                                            $total_prod = 0;
                                            $total_amount = 0;
                                        @endphp
                                        @if (session('wishlist'))
                                            @foreach (session('wishlist') as $wishlist_items)
                                                @php
                                                    $total_prod += $wishlist_items['quantity'];
                                                    $total_amount += $wishlist_items['amount'];
                                                @endphp
                                            @endforeach
                                        @endif
                                        <a href="{{ route('wishlist') }}" class="single-icon"><i
                                                class="fa fa-heart-o"></i> <span
                                                class="total-count">{{ Helper::wishlistCount() }}</span></a>
                                        <!-- Shopping Item -->
                                        @auth
                                            <div class="shopping-item">
                                                <div class="dropdown-cart-header">
                                                    <span>{{ count(Helper::getAllProductFromWishlist()) }} Items</span>
                                                    <a href="{{ route('wishlist') }}">View Wishlist</a>
                                                </div>
                                                <ul class="shopping-list">
                                                    {{-- {{Helper::getAllProductFromCart()}} --}}
                                                    @foreach (Helper::getAllProductFromWishlist() as $data)
                                                        @php
                                                            $photo = explode(',', $data->product['photo']);
                                                        @endphp
                                                        <li>
                                                            <a href="{{ route('wishlist-delete', $data->id) }}"
                                                                class="remove" title="Remove this item"><i
                                                                    class="fa fa-remove"></i></a>
                                                            <a class="cart-img" href="#"><img
                                                                    src="{{ $photo[0] }}"
                                                                    alt="{{ $photo[0] }}"></a>
                                                            <h4><a href="{{ route('product-detail', $data->product['slug']) }}"
                                                                    target="_blank">{{ $data->product['title'] }}</a>
                                                            </h4>
                                                            <p class="quantity">{{ $data->quantity }} x - <span
                                                                    class="amount">${{ number_format($data->price, 2) }}</span>
                                                            </p>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <div class="bottom">
                                                    <div class="total">
                                                        <span>Total</span>
                                                        <span
                                                            class="total-amount">${{ number_format(Helper::totalWishlistPrice(), 2) }}</span>
                                                    </div>
                                                    <a href="{{ route('cart') }}" class="btn animate">Cart</a>
                                                </div>
                                            </div>
                                        @endauth
                                        <!--/ End Shopping Item -->
                                    </div>
                                    {{-- <div class="sinlge-bar">
                                            <a href="{{route('wishlist')}}" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div> --}}
                                    <div class="sinlge-bar shopping">
                                        <a href="{{ route('cart') }}" class="single-icon"><i class="ti-bag"></i>
                                            <span class="total-count">{{ Helper::cartCount() }}</span></a>
                                        <!-- Shopping Item -->
                                        @auth
                                            <div class="shopping-item">
                                                <div class="dropdown-cart-header">
                                                    <span>{{ count(Helper::getAllProductFromCart()) }} Items</span>
                                                    <a href="{{ route('cart') }}">View Cart</a>
                                                </div>
                                                <ul class="shopping-list">
                                                    {{-- {{Helper::getAllProductFromCart()}} --}}
                                                    @foreach (Helper::getAllProductFromCart() as $data)
                                                        @php
                                                            $photo = explode(',', $data->product['photo']);
                                                        @endphp
                                                        <li>
                                                            <a href="{{ route('cart-delete', $data->id) }}" class="remove"
                                                                title="Remove this item"><i class="fa fa-remove"></i></a>
                                                            <a class="cart-img" href="#"><img
                                                                    src="{{ $photo[0] }}"
                                                                    alt="{{ $photo[0] }}"></a>
                                                            <h4><a href="{{ route('product-detail', $data->product['slug']) }}"
                                                                    target="_blank">{{ $data->product['title'] }}</a>
                                                            </h4>
                                                            <p class="quantity">{{ $data->quantity }} x - <span
                                                                    class="amount">${{ number_format($data->price, 2) }}</span>
                                                            </p>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <div class="bottom">
                                                    <div class="total">
                                                        <span>Total</span>
                                                        <span
                                                            class="total-amount">${{ number_format(Helper::totalCartPrice(), 2) }}</span>
                                                    </div>
                                                    <a href="{{ route('checkout') }}" class="btn animate">Vérifier</a>
                                                </div>
                                            </div>
                                        @endauth
                                        <!--/ End Shopping Item -->
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <style>
                        .logo{
                            padding-top:0px;
                        }
                    </style>
                    <div class="logo">
                        @php
                            $settings = DB::table('settings')->get();
                        @endphp
                        <a href="{{ route('home') }}"><img
                                src="@foreach ($settings as $data) {{ $data->logo }} @endforeach" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->

                    <div class="mobile-nav"></div>
                </div>




                <div class="col-lg-8 col-md-7 col-12">
                    <div class="header-inner">
                        <div class="container">
                            <div class="cat-nav-head">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="menu-area">
                                            <!-- Main Menu -->
                                            <nav class="navbar navbar-expand-lg">
                                                <div class="navbar-collapse">
                                                    <div class="nav-inner">
                                                        <ul class="nav main-menu menu navbar-nav">
                                                            <li
                                                                class="{{ Request::path() == 'home' ? 'active' : '' }}">
                                                                <a href="{{ route('home') }}">Accueil</a>
                                                            </li>
                                                            
                                                            <li
                                                                class= "{{ Request::path() == 'home' ? 'active' : '' }}"> 
                                                                <a href="#">Nos services <i class="ti-angle-down"></i></a>
                                                                    <ul class="dropdown border-0 shadow">
               
                                                                    <li><a href="{{ route('livraison') }}">Livraison</a></li>
                                                                    <li><a href="{{ route('demenagement') }}">Déménagement </a></li>
                                                                    <li><a href="{{ route('logistique') }}">Logistique</a></li>
                                                                    <li><a href="{{ route('evenementiel') }}">Evènementiel</a></li>
                                            
                                                                
                                                                     </ul>
                                                
        
                                                            </li>
                                                                {{Helper::getHeaderCategory()}}
                                                            <li
                                                                class="{{ Request::path() == 'partenaire' ? 'active' : '' }}">
                                                                <a href="{{ route('partenaire') }}">Nos partenaires</a>
                                                            </li>
                                                            <li
                                                                class="{{ Request::path() == 'about-us' ? 'active' : '' }}">
                                                                <a href="{{ route('about-us') }}">A Propos</a>
                                                            </li>

                                                            <li
                                                                class="{{ Request::path() == 'contact' ? 'active' : '' }}">
                                                                <a href="{{ route('contact') }}">Contactez-Nous</a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>
                                            <!--/ End Main Menu -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </div>
    <!-- Header Inner -->

    <!--/ End Header Inner -->
</header>
