<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de suarios-JR Systems</title>
</head>
<body>
<!--con BLADE ya no se usan los bloques de php, en su lugar se usan las  {} dobles para el ECHO-->
    <h1>{{$title}}</h1>

    <!-- si la lista de usuarios no esta vacia-->
    @if (!empty($users))
    <ul>
    
        @foreach ($users as $user)
        <li>{{$user}}</li>
        @endforeach
    </ul>
    @else
        <p>No hay usuarios registrados</p>
    @endif
     
    
</body>
</html>