<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Employee;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    //
    public function show($id = null)
    {
       
        return View('employee',['employee'=> $id ? Employee::where('id',$id)->first() : null]);
    }

    public function store (Request $request)
    {
        //var_dump($request->all());
        $employee = new Employee($request->all());
        $employee->departament = serialize($request->input('departament'));
        $employee->save();

        return Redirect::route('show_employee',['id'=> $employee->id]);
    }
}

