@extends('frontend.layouts.master')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Accueil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Devenir-Partenaire</a></li>
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
                                <h4>Partenariat</h4>
                            <h3>Ecrivez nous @auth @else<span style="font-size:12px;" class="text-danger">[Vous avez
                                    besoin de vous connecter]</span>@endauth
                            </h3>
                        </div>
                        <form class="form-contact form contact_form" method="post"
                            action="{{ route('partenaires.store') }}" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Nom complet ou celui de l'entreprise<span>*</span></label>
                                        <input name="name" id="name" type="text"
                                            placeholder="Entrer votre nom">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Votre Email<span>*</span></label>
                                        <input name="email" type="email" id="email"
                                            placeholder="Enter votre Adresse email">
                                    </div>
                                </div>
        

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Description de l'entreprise <span>*</span></label>
                                        <textarea name="description" id="description" cols="30" rows="9"
                                            placeholder="Entrez une description de l'entreprise "></textarea>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <div class="form-group message">
                                        <label>Informations supplémentaires<span>*</span></label>
                                        <textarea name="message" id="message" cols="30" rows="9" placeholder="Entrez votre Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="button" id="sendWhatsApp" class="btn">Envoyer la demande via
                                            WhatsApp</button>
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
                            <h4 class="title">Votre adresse:</h4>
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
<!--/ End Contact -->

<!-- Map Section -->
<div class="map-section">
    <div id="myMap">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15587.003131869951!2d-1.4918329000000001!3d12.399609850000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbf!4v1696957036665!5m2!1sfr!2sbf"
            width="2000" height="800" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" width="100%" height="100%" frameborder="0" style="border:0;"
            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
</div>


<!--/ End Map Section -->

<!-- Start Shop Newsletter  -->
@include('frontend.layouts.newsletter')
<!-- End Shop Newsletter -->
@endsection

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
            var email = $('#email').val();
            var description = $('#description').val();
            var message = $('#message').val();

            // Numéro de téléphone WhatsApp
            var phoneNumber = '+22678898461';

            // Créez le lien WhatsApp avec les informations et le numéro de téléphone
            var whatsappLink = 'https://api.whatsapp.com/send?phone=' + phoneNumber +
                '&text=' +
                'Nom complet: ' + name + '%0A' +
                'Description de votre entreprise: ' + description + '%0A' +
                'Message: ' + message;

            // Redirigez l'utilisateur vers WhatsApp
            window.location.href = whatsappLink;
        });
    });
</script>
@endpush
