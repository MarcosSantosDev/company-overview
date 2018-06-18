<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
    <br/>
      @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
      @endif
      <h2>Sistema de cadastro de funcionarios</h2>
      <br/>
      <form method="post" action="/create_user/{{$id}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nome do funcionario:</label>
            <input type="text" class="form-control" name="name" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Password">senha:</label>
              <input type="password" class="form-control" name="password" required>
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Password">Comfirme sua senha:</label>
              <input type="password" class="form-control" name="validatePassword" required>
            </div>
          </div>
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:10px;">
            <a href="/workers_list" class="btn btn-danger" >Cancelar</a>
            <button type="submit" class="btn btn-success" >Cadastrar</button>
          </div>
      </form>
  </body>
</html>