@extends('user.layouts.master')

@section('main-content')
    <canvas id="myJour" aria-label="chart" role=""></canvas>




<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="{{asset('backend/js/jour.js')}}"></script>
@endsection