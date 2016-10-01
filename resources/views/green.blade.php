<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


@foreach($users as $users)
        <p>username:{{$users->name}}</p>
        <p>password:{{$users->passwork}}</p>


        </br>
    @endforeach

    </head>
    <body>

    </body>
</html>
