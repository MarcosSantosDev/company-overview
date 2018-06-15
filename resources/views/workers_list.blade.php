<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de funcionários</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      <h2>Lista de funcionarios</h2>
      <br />
      <a style="width: 100%; margin: 1%" href="{{url('register')}}" class="btn btn-primary">Adicionar novo funcionario</a></td> 
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>       
          @foreach($users as $user)        
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>            
              <td>
                <a style="margin: 1%" href="{{action('workersController@editUser', $user->id)}}" class="btn btn-warning">Editar</a></td>
              </td>
              <td>
                <form action="{{action('workersController@deleteUser', $user->id)}}" method="get">
                    <button class="btn btn-danger" type="submit">Apagar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>