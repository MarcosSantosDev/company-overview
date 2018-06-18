<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de funcionários</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <br/>
        <a  style="width:10%; margin-left: 90%;" href="{{url('/organization_list')}}" class="btn" > Voltar </a></td> 
      <br/>
      @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" arial-label="close" >&times;</a>
            {{ session('status') }}
        </div>
      @endif
      <h2>Lista de funcionarios</h2>
      <br />
      <a style="width: 100%; margin: 1%" href="/form_add_user/{{$id}}" class="btn btn-primary">Adicionar novo funcionario</a></td> 
      <table class="table table-striped">
        <thead>
            <tr style="text-align:center;">
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Ações</th>
          </tr>
        </thead>
        <tbody>       
          @foreach($usersOfTheOrganization as $user)        
            <tr style="text-align:center;">
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