@extends('template.template')

@section('content')
  <div class="container" >
    <h1>Detalhes</h1>
    <p>Name: {{ $organization->title }} </p>
    <p>Descrição: {{ $organization->description }} </p>
    <a href="{{ route('data.organization.list') }}" > <b>Voltar</b></a>
  </div>
@endsection
