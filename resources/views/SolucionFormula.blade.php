<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/prueba.css') }}">
    <title>Solucion Cuadratica</title>
</head>
<body>
    <main>
        <div class="container_forms" >
            <h1>Formula Cuadratica - Solucion</h1>

            <h2>Los valores que introduciste fueron:</h2>
            <h3>Numero A: {{$varA}}</h3>
            <h3>Numero B: {{$varB}}</h3>
            <h3>Numero C: {{$varC}}</h3>

            <br>

            <h2>Solucion:</h2>

            <h3>{{$varResult1}}</h3>
            <h3>{{$varResult2}}</h3>
        </div>
    </main>
</body>
</html>