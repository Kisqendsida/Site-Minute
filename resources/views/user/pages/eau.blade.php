@extends('user.layouts.master')

@section('main-content')
<p class="eau"> Votre niveau d'eau  <i class="fas fa-tint" style="color: blue;"></i>  dans le réservoir est de 120</p>

    <canvas id="barCanvas" aria-label="chart" role="img" class="ea"></canvas>




<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="{{asset('backend/js/scrip.js')}}"></script>

@endsection