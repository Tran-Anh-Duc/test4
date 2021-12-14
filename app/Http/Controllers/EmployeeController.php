<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee = $this->employeeRepository->getById($id);
        $this->employeeRepository->delete($id);
        return redirect()->route('employees.index');
    }


    public function showFormEdit($id)
    {
        $employee = $this->employeeRepository->getById($id);
        return view('backend.employee.edit',compact('employee'));
    }

    public function update(Request $request,$id)
    {
        $employee = $this->employeeRepository->edit($request,$id);
        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $employees = Employee::query()
            ->where('name','like',"%{$search}%")
            ->get();
        return view('backend.employee.search',compact('employees'));
    }


}
