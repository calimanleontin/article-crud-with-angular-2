<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use App\Http\Requests;

class EmployeeController extends Controller
{
    public function index($id = null)
    {
        if($id == null)
            return Response::json(Employee::all());
        else
            return $this->show($id);
    }

    public function store()
    {
        $employee = new Employee();

        $employee->name = Input::get('name');
        $employee->email = Input::get('email');
        $employee->contact_number = Input::get('contact_number');
        $employee->position = Input::get('position');
        $employee->save();
        return Response::json(array('Success' => true));
    }

    public function update(Request $request, $id) {
        $employee = Employee::find($id);

        $employee->name = Input::get('name');
        $employee->email = Input::get('email');
        $employee->contact_number = Input::get('contact_number');
        $employee->position = Input::get('position');
        $employee->save();

        return Response::json(array('Success' => true));
    }

    public function destroy($id) {
        $employee = Employee::find($id);

        $employee->delete();

        return Response::json(array('Success' => true));
    }

    public function show($id) {
        return Response::json(Employee::find($id));
    }
}
