<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClienteResource;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

    public function index(){
        $clientes = Cliente::select('id','nombre', 'telefono')->get();

        return ClienteResource::collection($clientes);
    }

}
