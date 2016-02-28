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
}
