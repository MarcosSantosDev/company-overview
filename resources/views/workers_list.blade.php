@extends('template.template')

@section('content')

    <div class="container">
        <a  style="width:10%; margin: 1% 0% 0% 90%;" href="{{ route('data.organization.list') }}" class="btn" > Voltar </a></td>
      @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" arial-label="close" >&times;</a>
            {{ session('status') }}
        </div>
      @endif
      <div style="margin-bottom: 3%;">
        <h2>Lista de funcionarios</h2>
      </div>
      <a style="width: 100%; margin-bottom: 10px;" href="{{ route('data.users.form', $id) }}" class="btn btn-primary">Adicionar novo funcionario</a></td>
      <table class="table table-striped">
        <thead>
            <tr style="text-align:center;">
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users->workers as $user)
            <tr style="text-align:center;">
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                <a style="margin: 1%" href="{{ route('data.users.edit', ['id' => $user->id]) }}" class="btn btn-warning">Editar</a></td>
              </td>
              <td>
                <form action="{{ route('data.users.delete', ['id' => $user->id]) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger" type="submit">Apagar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection
