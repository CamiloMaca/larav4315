<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function create(){
        return view("formulario3");
    } 
    public function store(Request $request){
        $factura=new Invoice();
        $factura->client_id=$request->input("client_id");
        $factura->total=$request->total;
        $factura->description=$request->description;
        $factura->save();
        return $factura;

    }
}
