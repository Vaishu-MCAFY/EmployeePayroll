<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\PayrollModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $employeeModel = new EmployeeModel();
        $payrollModel  = new PayrollModel();

        $totalEmployees = $employeeModel->countAll();

        $totalPayrollRow = $payrollModel
            ->selectSum('net_salary')
            ->first();

        $totalPayroll = $totalPayrollRow['net_salary'] ?? 0;


        $salaryPaidRow = $payrollModel
            ->where('payment_status', 'Paid')
            ->selectSum('net_salary')
            ->first();

        $salaryPaid = $salaryPaidRow['net_salary'] ?? 0;


        $pendingPayrollRow = $payrollModel
            ->where('payment_status', 'Pending')
            ->selectSum('net_salary')
            ->first();

        $pendingPayroll = $pendingPayrollRow['net_salary'] ?? 0;


        $employees = $employeeModel
            ->orderBy('id', 'DESC')
            ->findAll(5);


        $data = [
            'totalEmployees' => $totalEmployees,
            'totalPayroll'   => $totalPayroll,
            'salaryPaid'     => $salaryPaid,
            'pendingPayroll' => $pendingPayroll,
            'employees'      => $employees,
        ];

        return view('dashboard', $data);
    }
}