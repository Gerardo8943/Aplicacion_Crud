<!-- Pagina principal de la aplicacion-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>


    <!-- metodo para cerrar sesion-->
    <br>
    @auth
    <a href="{{ route('logout') }}" 
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" class="btn btn-outline-danger">
    Cerrar 
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
@endauth

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<br>


<!--Lista de productos-->
    <h1>Lista de Productos disponibles</h1>
    <a href="{{ route('productos.create') }}">Creacion del Producto</a>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio de costo</th>
                <th>Precio de venta</th>
                <th>Imagen</th>
                <!--Boton para seleccionar editar o eliminar-->
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio_costo }}</td>
                <td>{{ $producto->precio_venta }}</td>
                <td>
                    @if ($producto->image)
                        <img src="{{ asset('storage/' . $producto->image) }}" alt="Imagen del {{ $producto->name }}" width="100">
                    @else
                        No hay imagen 
                    @endif
                </td>
                <td>
                    <a href="{{ route('productos.edit', $producto) }}">Editar producto actual</a>
                    <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar producto</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
