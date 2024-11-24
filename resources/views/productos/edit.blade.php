<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edicion del producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <!--Codigo encargado de la edicion del producto-->
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre del producto:</label>

        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required>

        <br><br>
        <label for="descripcion">Descripción del producto:</label>

        <textarea name="descripcion" id="descripcion">{{ $producto->descripcion }}</textarea>

        <br><br>

        <label for="precio_costo">Precio de Costo:</label>
        
        <input type="number" step="0.01" name="precio_costo" id="precio_costo" value="{{ $producto->precio_costo }}" required>

        <br><br>
        <label for="image">Imagen:</label>

        <input type="file" name="image" id="image" accept="image/*">

        <br><br>
        <button type="submit" class="btn btn-success">Actualizar el producto seleccionado</button>
        
    </form>

    <a href="{{ route('productos.index') }}">Volver a la lista de productos principales</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
