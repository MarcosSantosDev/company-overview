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
        <form method="get" action="/update_organization/{{$organization->id}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Title Organização:</label>
            <input type="text" class="form-control" name="name" value="{{$organization->title}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" value="{{$organization->description}}">
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:20px">
            <a href="/organization_list" class="btn btn-danger" >Cancelar</a>
            <button type="submit" class="btn btn-success" style="left:30%">enviar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
