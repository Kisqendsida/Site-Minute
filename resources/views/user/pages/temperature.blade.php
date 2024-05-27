@extends('user.layouts.master')

@section('main-content')
    <p class="tempe"> La température  <i class="fas fa-thermometer-full" style="color: red;"></i>  du champ est  25°C</p>
    <canvas id="temp" aria-label="chart" class="tempera" role=""></canvas>




<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="{{asset('backend/js/température.js')}}"></script>
@endsection