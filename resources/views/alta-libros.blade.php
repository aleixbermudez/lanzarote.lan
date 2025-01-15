<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Alta de libro</title>
</head>
<body>
    <div class="container">
        <form method='POST' action="/libros/alta">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
            </div>
            <div class="form-group">
                <label for="anho_publicacion">Año de publicación:</label>
                <input type="text" class="form-control" id="anho_publicacion" name="anho_publicacion" placeholder="Año de publicación">
            </div>
            <div class="form-group">
                <label for="genero">Genero:</label>
                <select class="form-control" id="genero" name="genero">
                    <option value="Accion">Acción</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Misterio">Misterio</option>
                    <option value="Romance">Romance</option>
                    <option value="Fantasia">Fantasia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>

            <div class="d-flex">
                <button type="submit" style="width: 200px;" class="btn btn-success ml-auto">Enviar</button>
            </div>
            
        </form>
    </div>
    

</body>
</html>