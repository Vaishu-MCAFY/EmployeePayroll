<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username',
        'password'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;

    protected $validationRules = [
        'username' => 'required',
        'password' => 'required'
    ];

    protected $validationMessages = [];

    protected $skipValidation = false;
}