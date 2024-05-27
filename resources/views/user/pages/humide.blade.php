@extends('user.layouts.master')

@section('main-content')
    <canvas id="humid" aria-label="chart" role=""></canvas>


    <section class="moi">
        <div class="montexte">
            <h3> Le taux d'humidité dans le champ</h3>
            <p>Sur l'écran, chaque bulle incarne une parcelle de notre champ, et la taille de la bulle reflète le taux d'humidité. 
                Plus la bulle est grande, plus l'humidité est élevée dans cette zone spécifique. C'est comme si chaque bulle était une
                 fenêtre instantanée donnant un aperçu visuel du bien-être de notre champ.
            </p>
        </div>
        <div class="imagemoi">
            <img src="{{asset('backend/img/eau.jpg')}}" alt="Image">
        </div>
    </section>


    <section class="amo">
        <div class="arroser">
        <p>De plus, pour donner un contrôle total, vous avez la possibilité de prendre des mesures immédiates. Si vous constatez une bulle plus petite qui indique un taux d'humidité insuffisant, n'hésitez pas à utiliser la fonction d'arrosage intégrée
             pour booster le bien-être de cette zone particulière. C'est comme avoir le pouvoir de prendre soin de votre champ d'un simple clic
        </p>

        </div>
        <button class="arrose"> Arroser mon champ </button>
    </section>




<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="{{asset('backend/js/humide.js')}}"></script>

@endsection