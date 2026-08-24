<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class Employee extends BaseController
{
    protected $employee;

    public function __construct()
    {
        $this->employee = new EmployeeModel();
    }

    public function index()
    {
        $data = [
            'employee' => $this->employee->findAll()
        ];

        return view('employee/index', $data);
    }

    public function create()
    {
        return view('employee/create');
    }

    public function store()
    {
        $validation = $this->validate([
            'emp_id'       => 'required',
            'name'         => 'required',
            'email'        => 'required|valid_email',
            'phone'        => 'required',
            'department'   => 'required',
            'designation'  => 'required',
            'basic_salary' => 'required|decimal',
            'joining_date' => 'required',
            'status'       => 'required'
        ]);

        if (!$validation) {

            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }


        $this->employee->save([
            'emp_id'       => $this->request->getPost('emp_id'),
            'name'         => $this->request->getPost('name'),
            'email'        => $this->request->getPost('email'),
            'phone'        => $this->request->getPost('phone'),
            'department'   => $this->request->getPost('department'),
            'designation'  => $this->request->getPost('designation'),
            'basic_salary' => $this->request->getPost('basic_salary'),
            'joining_date' => $this->request->getPost('joining_date'),
            'status'       => $this->request->getPost('status')
        ]);


        return redirect()
            ->to('/employee')
            ->with('success', 'Employee Added Successfully');
    }


    public function updateForm($id)
    {
        $employee = $this->employee->find($id);

        if (!$employee) {

            return redirect()
                ->to('/employee')
                ->with('error', 'Employee Not Found');
        }


        return view('employee/update', [
            'employee' => $employee
        ]);
    }

    public function update($id)
    {
        $employee = $this->employee->find($id);

        if (!$employee) {

            return redirect()
                ->to('/employee')
                ->with('error', 'Employee Not Found');
        }


        $this->employee->update($id, [

            'emp_id'       => $this->request->getPost('emp_id'),

            'name'         => $this->request->getPost('name'),

            'email'        => $this->request->getPost('email'),

            'phone'        => $this->request->getPost('phone'),

            'department'   => $this->request->getPost('department'),

            'designation'  => $this->request->getPost('designation'),

            'basic_salary' => $this->request->getPost('basic_salary'),

            'joining_date' => $this->request->getPost('joining_date'),

            'status'       => $this->request->getPost('status')
        ]);

        return redirect()
            ->to('/employee')
            ->with('success', 'Employee Updated Successfully');
    }

    public function delete($id)
    {
        $db = \Config\Database::connect();

        $db->table('payroll')
            ->where('employee_id', $id)
            ->delete();


        $this->employee->delete($id);


        return redirect()
            ->to('/employee')
            ->with('success', 'Employee Deleted Successfully');
    }
}