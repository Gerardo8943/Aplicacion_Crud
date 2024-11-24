<?php
//crud encargado de lo productos en el controlador
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    

    // Listar los productos que hay disponibles
    public function index()
    {
    $productos = Producto::all();
    return view('productos.index', compact('productos'));
    }



     //Formulario para la creacion de productos 
    public function create()
    {
        return view('productos.create');
    }


  //Guardar producto
    public function store(Request $request)
    {
        $request->validate([
        'nombre' => 'required|string|max:255',
        'precio_costo' => 'required|numeric|min:0',
        'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('productos', 'public');
        Producto::create([
        'nombre'=> $request->nombre,
        'descripcion'=>$request->descripcion,
        'precio_costo'=>$request->precio_costo,
        'precio_venta'=> $request->precio_costo*1.2, //Aqui el precio de venta es = Costo +20%, este se encarga del calculo
        'image'=>$path,
        ]);
        return redirect()->route('productos.index')->with('success', 'El producto ha sido creado exitosamente.');
    }

    
    
    public function show(Producto $producto)
    {
        // Opcional 
    }

    //formulario para editar productos
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    //Codigo para actualizar el producto
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
        'nombre'=>'required|string|max:255',
        'precio_costo' => 'required|numeric|min:0',
        'image' => 'nullable|image',
        ]);

if($request->hasfile('image')){
    $path = $request->file('image')->store('productos', 'public');
    $producto->image =$path;
}

$producto->update([
    'nombre'=> $request->nombre,
    'descripcion'=> $request->descripcion,
    'precio_costo' => $request->precio_costo,
    'precio_venta' => $request->precio_costo*1.2,
]);
return redirect()->route('productos.index')->with('success', 'El producto se actualizo de forma exitosa');


    }



    //Funcion de eliminar producto
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success','Producto eliminado');

    }
}
