<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Atualização de dados</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br/>
      <h2>Atualização de dados</h2><br  />
        <form action="{{ route('data.users.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$user->email}}" required>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:20px">
            <a href="{{ route('data.users.find', $user->organization_id) }}" class="btn btn-danger" >Cancelar</a>
            <button type="submit" class="btn btn-success" style="left:30%">enviar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
