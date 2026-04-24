<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        $productos = Product::select('id', 'name', 'price')->get();

        return ProductResource::collection($productos);
    }

    public function store(StoreProductoRequest $request)
    {

        $producto = Product::create($request->validated());

        return new ProductResource($producto);
    }

    public function update(UpdateProductoRequest $request, Product $product){

        $product->update($request->validated());

        return new ProductResource($product);

    }

    public function destroy(Product $product){
        $product->delete();

        return response()->json([
            'message' => 'Producto eliminado correctamente'
        ], 200);
    }
}


