<?php

namespace App\Repositories;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeRepository extends BaseRepository
{
    public function __construct(Employee $employee)
    {
        parent::__construct($employee);
    }

    public function create(Request $request)
    {
        $data = $request->only('role','name','sex','phone','numbercard','email','address');
        $employee = Employee::create($data);
        return $employee;
    }

    public function edit(Request $request,$id)
    {
        $employee = Employee::findOrFail($id);
        $data = $request->only('role','name','sex','phone','numbercard','email','address');
        return Employee::where('id','=',$id)->update($data);
    }
}
