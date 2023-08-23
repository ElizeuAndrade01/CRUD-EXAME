@extends('templates.template')

@section('content')

<h1 class="text-center">CRUD</h1>

<table class="table">
    <thead>
      <tr>
        <th>Modelo</th>
        <th>Data Aquisição</th>
        <th>Placa</th>
        <th>Acessibilidade</th>
      </tr>
    </thead>
    <tbody>
      
    @foreach ($veiculos as $veiculo)    
      @php
      //  $acess = $veiculo->find($veiculo->id)->relAcess;
      @endphp
      <tr>
        <td>{{$veiculo->modelo}}</td>
        <td>{{$veiculo->data}}</td>
        <td>{{$veiculo->placa}}</td>
        <td>{{$veiculo->id_acessibilidade}}</td>
      </tr>
    @endforeach
      
    </tbody>
    </table>
    

@endsection