<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Organizações</title>
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
      <h2>Lista de Organizações</h2>
      <br />
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Organizações</th>
            <th>Descrição</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>       
          @foreach($organizations as $organization)        
            <tr>
              <td>{{$organization->title}}</td>
              <td>{{$organization->description}}</td>            
              <td>
                <a  style="margin: 1%" href="{{action('workersController@getUsers', $organization->id)}}" class="btn btn-primary">Funcionario desta organização</a></td> 
              </td>
              <td>
                <a style="margin: 1%" href="/edit_organization/{{$organization->id}}" class="btn btn-warning">Editar</a></td>
              </td>
              <td>
                <form action="/delete_organization/{{$organization->id}}" method="get">
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