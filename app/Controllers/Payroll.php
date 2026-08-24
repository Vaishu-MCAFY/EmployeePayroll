<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\PayrollModel;

class Payroll extends BaseController
{
    protected $employeeModel;
    protected $payrollModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
        $this->payrollModel  = new PayrollModel();
    }

    public function index()
    {
        $data['payroll'] = $this->payrollModel
            ->select('payroll.*, employees.name')
            ->join('employees', 'employees.id = payroll.employee_id')
            ->orderBy('payroll.id', 'DESC')
            ->findAll();

        return view('payroll/index', $data);
    }

    public function create($id)
    {
        $employee = $this->employeeModel->find($id);

        if (!$employee) {
            return redirect()->to('/employee')
                ->with('error', 'Employee not found.');
        }

        $data['employee'] = $employee;

        return view('payroll/create', $data);
    }

    public function store()
    {
        $basic     = (float) $this->request->getPost('basic');
        $allowance = (float) $this->request->getPost('allowance');
        $bonus     = (float) $this->request->getPost('bonus');
        $overtime  = (float) $this->request->getPost('overtime');
        $tax       = (float) $this->request->getPost('tax');
        $deduction = (float) $this->request->getPost('deduction');

        $net = $basic
             + $allowance
             + $bonus
             + $overtime
             - $tax
             - $deduction;


        $this->payrollModel->insert([
            'employee_id'    => $this->request->getPost('employee_id'),
            'month'          => $this->request->getPost('month'),
            'year'           => $this->request->getPost('year'),
            'basic'          => $basic,
            'allowance'      => $allowance,
            'bonus'          => $bonus,
            'overtime'       => $overtime,
            'tax'            => $tax,
            'deduction'      => $deduction,
            'net_salary'     => $net,
            'payment_status' => 'Pending'
        ]);


        $employeeId = $this->request->getPost('employee_id');

        return redirect()
            ->to('/payroll/create/' . $employeeId)
            ->with('success', 'Payroll Generated Successfully');
    }

    public function markPaid($id)
    {
        $payroll = $this->payrollModel->find($id);

        if (!$payroll) {
            return redirect()
                ->to('/payroll')
                ->with('error', 'Payroll record not found.');
        }


        $updated = $this->payrollModel->update($id, [
            'payment_status' => 'Paid'
        ]);


        if (!$updated) {
            return redirect()
                ->to('/payroll')
                ->with('error', 'Unable to update payment status.');
        }


        return redirect()
            ->to('/payroll')
            ->with('success', 'Salary marked as Paid successfully.');
    }
}