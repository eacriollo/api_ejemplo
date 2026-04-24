<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;
use App\Models\Product;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

    public function index(){

        $clientes = Cliente::all();


        return ClienteResource::collection($clientes);
    }

    public function store(StoreClienteRequest $request){



        $cliente = Cliente::create($request->validated());

        return new ClienteResource($cliente);


    }

    public function update(UpdateClienteRequest $request, Cliente $cliente){

        $cliente->update($request->validated());

        return new ClienteResource($cliente);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return response()->json([
            'message' => 'Cliente eliminado correctamente'
        ], 200);
    }

    public function proyectos(Cliente $cliente){

        $cliente->load('proyectos');

        return response()->json([
            'data' => $cliente
        ]);

    }

}
