@if (session('userComplete'))
    <div class="userCompleted">
        {{ session('userComplete') }}
    </div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/CrearPost.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="form_panel">
        <form action="{{route('getData')}}" method="post">
            @csrf
            <span> Crea datos para el usuario </span>
            <br>
            <label> ID de Usuario: </label>
            <input type="number" name="idUser" id="idUser" placeholder="Aqui va el ID" required autofocus="on">
            <br>
            <label> Nombre del Usuario: </label>
            <input type="text" name="nameUser" id="nameUser" placeholder="Aqui va el nombre" required autofocus="on">
            <br>
            <label> Email del Usuario: </label>
            <input type="email" name="emailUser" id="emailUser" placeholder="Aqui va el email" required autofocus="on">
            <br>
            <label> Contraseña del Usuario: </label>
            <input type="password" name="passUser" id="passUser" placeholder="Aqui va la contraseña" required autofocus="on">
            <br>
            <button type="submit">Guardar Usuario </button>
        </form>
    </div>
</body>
</html>