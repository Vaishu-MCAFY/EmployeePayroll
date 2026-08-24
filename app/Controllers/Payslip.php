<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\PayrollModel;

class Payslip extends BaseController
{
    public function generate($employeeId)
    {
        $employeeModel = new EmployeeModel();
        $payrollModel = new PayrollModel();

        $data['employee'] = $employeeModel->find($employeeId);

        $data['payroll'] = $payrollModel
            ->where('employee_id', $employeeId)
            ->orderBy('id', 'DESC')
            ->first();

        return view('Payslip', $data);
    }

    public function download($employeeId)
    {
        $employeeModel = new EmployeeModel();
        $payrollModel = new PayrollModel();

        $data['employee'] = $employeeModel->find($employeeId);

        $data['payroll'] = $payrollModel
            ->where('employee_id', $employeeId)
            ->orderBy('id', 'DESC')
            ->first();

        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=Payslip.html");

        return view('Payslip', $data);
    }
}