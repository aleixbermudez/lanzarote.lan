<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Libros</title>
</head>
<body>

    <div class="container">

        <table class="table"  style="border: 1px solid darkgrey; margin-top: 40px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Año de Publicacion</th>
                <th scope="col">Genero</th>
                <th scope="col">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>    
                    <th>{{$libro->id}}</th>
                    <th>{{$libro->titulo}}</th>
                    <th>{{$libro->autor}}</th>
                    <th>{{$libro->anho_publicacion}}</th>
                    <th>{{$libro->genero}}</th>
                    <th>{{$libro->descripcion}}</th>
                </tr>
            @endforeach
        </tbody>
        </table>

    </div>
    
</body>
</html>