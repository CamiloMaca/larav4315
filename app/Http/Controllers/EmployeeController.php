<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view("formulario2");
    }
    public function store(Request $request){
        $empleado=new Employee();
        $empleado->contract_number=$request->contract_number;
        $empleado->name=$request->name;
        $empleado->age=$request->age;
        $empleado->position=$request->position;
        $empleado->save();
        return $empleado;
    }
}
