@extends('template.template')
@section('content')
    <div class="container">
    <a  style="width:10%; margin-left: 90%;" href="{{url('/')}}" class="btn" > SAIR </a>
    @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" arial-label="close" >&times;</a>
            {{ session('status') }}
        </div>
      @endif
    <div style="margin-bottom: 3%;">
      <h2>Lista de Organizações</h2>
      </div>
      <table class="table table-striped">
      <a  style="width:100%; margin-bottom: 10px;" href="{{route('data.organization.new')}}" class="btn btn-primary">Criar nova Empresa</a>
        <thead>
          <tr style="text-align:center;">
            <th>Organizações</th>
            <th>Descrição</th>
            <th colspan="3">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($organizations as $organization)
            <tr style="text-align:center;">
              <td>{{$organization->title}}</td>
              <td>{{$organization->description}}</td>
              <td><a href="{{ route('data.organization.find', $organization->id) }}" class="btn btn-primary">Funcionarios</a></td>
              <td><a href="{{ route('data.organization.edit', $organization->id) }}" class="btn btn-warning">Editar</a></td>
              <td>
                <form action="{{ route('data.organization.delete', $organization->id) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar esta empresa?')" type="submit">Apagar</button>
                </form>
              </td>
              <td><a href="{{ route('data.organization.show', $organization->id) }}" class="btn btn-warning">detalhes</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection

