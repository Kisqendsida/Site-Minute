@extends('user.layouts.master')

@section('main-content')
    <canvas id="myChart" aria-label="chart" role=""></canvas>






    <table class="table">
  <thead>
    <tr>
      <th scope="col">Date </th>
      <th scope="col">Lundi</th>
      <th scope="col">Mardi</th>
      <th scope="col">Mercredi</th>
      <th scope="col">Jeudi</th>
      <th scope="col">Vendredi</th>
      <th scope="col">Samedi</th>
      <th scope="col">Dimanche</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="{{asset('backend/js/historique.js')}}"></script>
@endsection