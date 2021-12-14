<?php

namespace App\Http\Controllers;

use App\Repositories\employeeRepository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeRepository;


    public function __construct(employeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index()
    {
        $employees = $this->employeeRepository->getAll();
        return view('backend.employee.list',compact('employees'));
    }


    public function showFormCreate()
    {
        return view('backend.employee.create');
    }

    public function store(Request $request)
    {
        $employee = $this->employeeRepository->create($request);

    }

}
