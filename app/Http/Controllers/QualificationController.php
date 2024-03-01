<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Guid;

class QualificationController extends Controller
{
    public function create(){
        return view("formulariocalif");
    }
    public function store(Request $request){
        $calificacion= new Qualification();
        $calificacion->name=$request->name;
        $calificacion->nota1=$request->nota1;
        $calificacion->nota2=$request->nota2;
        $calificacion->nota3=$request->nota3;
        $prome=$this->CalcularPromdio($calificacion->nota1,$calificacion->nota2,$calificacion->nota3);
        $calificacion->average=$prome;
        $calificacion->save();
        return $calificacion;
    }

    public function CalcularPromdio($nota1,$nota2,$nota3){
        $promedio=($nota1+$nota2+$nota3)/3;
        return $promedio;
    }
}
