<?php

namespace App\Http\Controllers;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function create(){
        return view("formulariocuad");
    }
    public function store(Request $request){
        $cuadr= new Result();
        $cuadr->a=$request->a;
        $cuadr->b=$request->b;
        $cuadr->c=$request->c;
        $a= $cuadr->a;
        $b= $cuadr->b;
        $c= $cuadr->c;
    
        $sep = $b * $b - 4 * $a * $c;
        if ($sep > 0) {
            $x1 = (-$b + sqrt($sep)) / (2 * $a);
            $x2 = (-$b - sqrt($sep)) / (2 * $a);
            $cuadr->x1=$x1;
            $cuadr->x2=$x2;
        }
        $cuadr->save();
    return $cuadr;
    
}
}