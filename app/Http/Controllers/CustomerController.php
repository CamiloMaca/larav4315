<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(){
        return view("formulario1");
    }
    public function store(Request $request){
        $cliente= new Customer();
        $cliente->name=$request->name;
        $cliente->telefono=$request->telefono;
        $cliente->city=$request->city;
        $cliente->street_address=$request->street_address;
        $cliente->save();
        return $cliente;
    }
}
