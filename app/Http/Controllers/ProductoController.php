<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Resources\ProductoCollection;
use App\Models\Marca;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::with('marca')->orderBy('nombre')->paginate();

        return  Inertia::render('Productos/Index', ['productos'=>new ProductoCollection($productos)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tallas = [
            'S' => 'Talla S',
            'M' => 'Talla M',
            'L' => 'Talla L',
        ];
        $marcas = Marca::all()->pluck('nombre','id');

        return Inertia::render('Productos/Create', compact('tallas','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreProductoRequest  $StoreProductoRequest
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        Producto::create($request->all());

        return Redirect::route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $tallas = [
            'S' => 'Talla S',
            'M' => 'Talla M',
            'L' => 'Talla L',
        ];
        $marcas = Marca::all()->pluck('nombre','id');

        return Inertia::render('Productos/Edit', compact('tallas','marcas','producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\StoreProductoRequest  $StoreProductoRequest
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductoRequest $request, Producto $producto)
    {
        $producto->update($request->all());

        return Redirect::route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return Redirect::route('productos.index');
    }
}
