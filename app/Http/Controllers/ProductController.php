<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\StoreProductoRequest;
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
       //dd($request);
        $request->validate([

        ]);



        $producto = Product::create($request->validated());



        return new ProductResource($producto);

    }
}


