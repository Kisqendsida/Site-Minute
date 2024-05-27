@extends('frontend.layouts.master')
@section('title', 'Livraison') 
@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Accueil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Nos services-Livraison</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                @php
                                    $settings = DB::table('settings')->get();
                                @endphp
                                <h4>Livraison</h4>
                            <h3>Formulaire de Livraison @auth @else<span style="font-size:12px;"
                                    class="text-danger">[Vous avez besoin de vous connecter]</span>@endauth
                            </h3>
                        </div>
                        <form class="form-contact form contact_form" method="post"
                            action="{{ route('livraison.store') }}" id="livraisonForm">


                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Nom complet<span>*</span></label>
                                        <input name="name" id="name" type="text"
                                            placeholder="Entrer votre nom">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Votre Téléphone<span>*</span></label>
                                        <input id="phone" name="phone" type="text"
                                            placeholder="Entrez votre numéro de téléphone">
                                    </div>
                                </div>



                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="option_livraison">Option de livraison : </label>
                                        <select id="option_livraison" name="option_livraison" class="form-control"
                                            required>
                                            <!-- <option value="livraison_standard">--option--</option> -->
                                            <option value="livraison_colis">Livraison de colis</option>
                                            <option value="livraison_nourriture">Livraison de nourriture</option>

                                            <!-- Ajoutez d'autres options de livraison au besoin -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="lieu_prise_en_charge">Lieu de prise en charge :</label>
                                        <input type="text" id="lieu_prise_en_charge" name="lieu_prise_en_charge"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="lieu_destination">Lieu de destination :</label>
                                        <input type="text" id="lieu_destination" name="lieu_destination"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="date_livraison">Date de livraison :</label>
                                        <input type="date" id="date_livraison" name="date_livraison"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="heure_livraison">Heure de livraison :</label>
                                        <input type="time" id="heure_livraison" name="heure_livraison"
                                            class="form-control" required>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="button" id="sendWhatsApp" class="btn">Valider la
                                            commande</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        <div class="single-info">
                            <i class="fa fa-phone"></i>
                            <h4 class="title">Appelez:</h4>
                            <ul>
                                <li>
                                    @foreach ($settings as $data)
                                        {{ $data->phone }}
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-envelope-open"></i>
                            <h4 class="title">Email:</h4>
                            <ul>
                                <li><a href="mailto:info@yourwebsite.com">
                                        @foreach ($settings as $data)
                                            {{ $data->email }}
                                        @endforeach
                                    </a></li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-location-arrow"></i>
                            <h4 class="title">Où sommes nous?</h4>
                            <ul>
                                <li>
                                    @foreach ($settings as $data)
                                        {{ $data->address }}
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!--/ End Contact -->


@push('styles')
    <style>
        .modal-dialog .modal-content .modal-header {
            position: initial;
            padding: 10px 20px;
            border-bottom: 1px solid #e9ecef;
        }

        .modal-dialog .modal-content .modal-body {
            height: 100px;
            padding: 10px 20px;
        }

        .modal-dialog .modal-content {
            width: 50%;
            border-radius: 0;
            margin: auto;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#sendWhatsApp').click(function() {
                // Récupérez les informations du formulaire
                var name = $('#name').val();
                var phone = $('#phone').val();
                var option_livraison = $('#option_livraison').val();
                var lieu_prise_en_charge = $('#lieu_prise_en_charge').val();
                var lieu_destination = $('#lieu_destination').val();
                var date_livraison = $('#date_livraison').val();
                var heure_livraison = $('#heure_livraison').val();

                // Numéro de téléphone WhatsApp
                var phoneNumber = '+22678898461';

                // Créez le lien WhatsApp avec les informations et le numéro de téléphone
                var whatsappMessage =
                    'Bonjour, je vous contacte depuis votre site web pour une livraison.\n' +
                    'Nom Complet: ' + name + '\n' +
                    'Option de Livraison: ' + option_livraison + '\n' +
                    'Lieu de Prise en Charge: ' + lieu_prise_en_charge + '\n' +
                    'Lieu de Destination: ' + lieu_destination + '\n' +
                    'Date de Livraison: ' + date_livraison + '\n' +
                    'Heure de Livraison: ' + heure_livraison;

                var whatsappLink = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' +
                    encodeURI(whatsappMessage);

                // Redirigez l'utilisateur vers WhatsApp
                window.location.href = whatsappLink;
            });
        });
    </script>
@endpush