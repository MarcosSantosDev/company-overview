<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD - Laravel</title>
        @stack('scripts')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{route('data.organization.list')}}">Empresas</a>
            </div>
            <div class="title m-b-md">
            <img src="https://i.pinimg.com/originals/4e/8e/48/4e8e48de1f2ccb32a7f2f9fbff4c2718.jpg">
            </div>
        </div>
    </body>
</html>
