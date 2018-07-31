@extends('template.template')

@section('content')
  <div class="container" >
    <h1>Detalhes</h1>
    @foreach($organization as $value)
    <p>Name: {{ $value->title }} </p>
    <p>Descrição: {{ $value->description }} </p>
    <p>Data de registro: {{ \Carbon\Carbon::parse($value->date)->format('d/m/Y') }} </p>
    @endforeach
  <a href="{{ route('data.organization.list') }}" > <b>Voltar</b></a>
  </div>
@endsection
