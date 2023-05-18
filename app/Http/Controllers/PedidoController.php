<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(Pedido $pedido)
    {
        // $pedido = new Pedido();
        $pedidos = Pedido::all();
        
        // dd($pedido);
        return view ('pedido/index',compact('pedidos'));
    }
    public function create(Cliente $clientes)

    {   
        $listagem= $clientes->all();
      
        return view ('pedido/create',compact('listagem'));
    }
    public function store(Request $request, Pedido $pedidos )
    {
        $data = $request->all();
        $data['diarias'];
        dd($data);
        $pedidos->create($data);
        // dd($pedidos);

        return redirect()->route('pedido.index');
    }
}
