<?php

namespace App\Models;

use CodeIgniter\Model;

class PayrollModel extends Model
{
    protected $table = 'payroll';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'employee_id',
        'month',
        'year',
        'basic',
        'allowance',
        'bonus',
        'overtime',
        'tax',
        'deduction',
        'net_salary',
        'payment_status'

    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;

    protected $validationRules = [
        'employee_id' => 'required|integer',
        'month'       => 'required',
        'year'        => 'required|integer',
        'basic'       => 'required|decimal',
        'allowance'   => 'permit_empty|decimal',
        'bonus'       => 'permit_empty|decimal',
        'overtime'    => 'permit_empty|decimal',
        'tax'         => 'permit_empty|decimal',
        'deduction'   => 'permit_empty|decimal',
        'net_salary'  => 'required|decimal',
        'payment_status' => 'required|in_list[Paid,Pending]'

        ];

    protected $validationMessages = [];

    protected $skipValidation = false;
}