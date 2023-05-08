<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return $sales;
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->nameVendedor = $request->nameVendedor;
        $sale->nameCliente = $request->nameCliente;
        $sale->nameProducto = $request->nameProducto;
        $sale->price = $request->price;
        $sale->fechaCompra = $request->fechaCompra;
        $sale->save();
        return $sale;
        
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
    
        
    }

    public function update(Request $request, $id)
    {
        $sale= Sale::find($id);
        $sale->nameVendedor = $request->nameVendedor;
        $sale->nameCliente = $request->nameCliente;
        $sale->nameProducto = $request->nameProducto;
        $sale->price = $request->price;
        $sale->fechaCompra = $request->fechaCompra;
        $sale->save();
        return $sale;
    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return $sale;
    }

}