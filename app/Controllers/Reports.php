<?php

namespace App\Controllers;

use App\Models\PayrollModel;

class Reports extends BaseController
{
    public function index()
    {
        $payroll = new PayrollModel();

        $data['reports'] = $payroll
            ->select('payroll.*, employees.emp_id, employees.name, employees.department')
            ->join('employees', 'employees.id = payroll.employee_id')
            ->findAll();

        return view('Reports', $data);
    }
    public function download()
    {
        $payroll = new PayrollModel();

        $data['reports'] = $payroll
            ->select('payroll.*, employees.emp_id, employees.name, employees.department')
            ->join('employees', 'employees.id = payroll.employee_id')
            ->findAll();

        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=Payroll_Report.xls");

        return view('Reports', $data);
    }
}