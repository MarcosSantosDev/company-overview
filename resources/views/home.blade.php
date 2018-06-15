<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
                 
@foreach($users as $user)
        
        <tr>
            <td>$user->id</td>
            <td>$user->name</td>
            <td>$user->email</td>
            
            <td><a href="{{action('RegisterController@edit', $user->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
            <form action="{{action('RegisterController@destroy', $user->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </td>
        </tr>
      @endforeach
</body>
</html>