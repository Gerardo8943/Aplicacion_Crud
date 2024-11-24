<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!--Campo para Crear los producto-->
<body>
    <h1>Crear Producto</h1>
    <br>
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion"></textarea>
        <br><br>
        <label for="precio_costo">Precio de Costo:</label>
        <input type="number" step="0.01" name="precio_costo" id="precio_costo" required>
        <br><br>
        <label for="image">Imagen para el producto:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br><br>
        <button type="submit" class="btn btn-primary">Guardar los cambios</button>
    </form>
    <a href="{{ route('productos.index') }}">Regresar a la lista de productos</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
