<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Organizações</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <a  style="width:10%; margin-left: 90%;" href="{{url('/')}}" class="btn" > SAIR </a></td> 
    @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" arial-label="close" >&times;</a>
            {{ session('status') }}
        </div>
      @endif
    <br />
      <h2>Lista de Organizações</h2>
      <br />
      <table class="table table-striped">
      <a  style="width:100%; margin: 0 auto" href="{{url('create_organization_form')}}" class="btn btn-primary">Criar nova Empresa</a></td> 
        <thead>
          <tr style="text-align:center;">
            <th>Id</th>           
            <th>Id Empresa</th>
            <th>Organizações</th>
            <th>Descrição</th>
            <th colspan="3">Ações</th>
          </tr>
        </thead>
        <tbody>       
          @foreach($organizations as $organization)        
            <tr style="text-align:center;">
              <td>{{$organization->id}}</td>
              <td>{{$organization->title}}</td>
              <td>{{$organization->description}}</td>            
              <td>
                <a  style="margin: 1%" href="/find_users_organization/{{$organization->id}}" class="btn btn-primary">Funcionarios</a></td> 
              </td>
              <td>
                <a style="margin: 1%" href="/edit_organization/{{$organization->id}}" class="btn btn-warning">Editar</a></td>
              </td>
              <td>
                <form action="/delete_organization/{{$organization->id}}" method="get">
                    <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar esta empresa?')" type="submit">Apagar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>