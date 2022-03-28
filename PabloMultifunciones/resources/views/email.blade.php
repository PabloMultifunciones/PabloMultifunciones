<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head></head>
    <body id="body">
        <h1>Nombre: {{$nombre}}<h1>
        <h2>Email: {{$email}}</h1>
        <h2>Asunto: {{$asunto}}</h1>
    </body>
</html>
