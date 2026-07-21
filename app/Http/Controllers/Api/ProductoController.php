<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Mostrar todos los productos con paginación.
     */
    public function index()
    {
        return ProductoResource::collection(
            Producto::paginate(10)
        );
    }

    /**
     * Crear un producto.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'proveedor' => 'required|string|max:255',
        ]);

        $producto = Producto::create($validated);

        return new ProductoResource($producto);
    }

    /**
     * Mostrar un producto.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);

        return new ProductoResource($producto);
    }

    /**
     * Actualizar un producto.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'proveedor' => 'required|string|max:255',
        ]);

        $producto->update($validated);

        return new ProductoResource($producto);
    }

    /**
     * Eliminar un producto.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->delete();

        return response()->json([
            'message' => 'Producto eliminado correctamente'
        ]);
    }
}