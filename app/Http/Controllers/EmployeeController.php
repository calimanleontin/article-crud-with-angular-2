<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Requests;

class EmployeeController extends Controller
{
    public function index($id = null)
    {
        if($id == null)
            return Employee::all()->get();
        else
            return $this->show($id);
    }

    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->name = Input::get('name');
        $employee->email = Input::get('email');
        $employee->contact_number = Input::get('contact_number');
        $employee->position = Input::get('position');
        $employee->save();
        return 'Success #'.$employee->id;
    }

    public function update(Request $request, $id) {
        $employee = Employee::find($id);

        $employee->name = Input::get('name');
        $employee->email = Input::get('email');
        $employee->contact_number = Input::get('contact_number');
        $employee->position = Input::get('position');
        $employee->save();

        return "Success #" . $employee->id;
    }

    public function destroy() {
        $employee = Employee::find(Input::get('id'));

        $employee->delete();

        return "Success #" . Input::get('id');
    }

    public function show($id) {
        return Employee::find($id);
    }
}
