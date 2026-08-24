<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'emp_id',
        'name',
        'email',
        'phone',
        'department',
        'designation',
        'basic_salary',
        'joining_date',
        'status'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;

    protected $validationRules = [
        'emp_id'        => 'required',
        'name'          => 'required|min_length[3]',
        'email'         => 'required|valid_email',
        'phone'         => 'required',
        'department'    => 'required',
        'designation'   => 'required',
        'basic_salary'  => 'required|decimal',
        'joining_date'  => 'required',
        'status'        => 'required'
    ];

    protected $validationMessages = [];

    protected $skipValidation = false;
}