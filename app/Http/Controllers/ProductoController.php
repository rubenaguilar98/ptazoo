<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function showProducto(){

        $productos = Producto::all();

        return view('producto/productosMenu',compact('productos'));
    }

    public function showDetalles($id){

        $producto = Producto::find($id);

        return view('producto/productoDetalles',compact('producto'));
    }


}
