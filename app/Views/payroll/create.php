<!DOCTYPE html>

<html>

<head>

<title>Generate Payroll</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('css/payroll.css') ?>">

</head>

<body>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Generate Payroll</h3>

</div>

<div class="card-body">

<form action="<?= base_url('payroll/store') ?>" method="post">

<?= csrf_field() ?>

<input type="hidden"

name="employee_id"

value="<?= $employee['id'] ?>">

<div class="mb-3">

<label>Employee</label>

<input

type="text"

class="form-control"

value="<?= $employee['name'] ?>"

readonly>

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Month</label>

<select

name="month"

class="form-control">

<option>January</option>

<option>February</option>

<option>March</option>

<option>April</option>

<option>May</option>

<option>June</option>

<option>July</option>

<option>August</option>

<option>September</option>

<option>October</option>

<option>November</option>

<option>December</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label>Year</label>

<input

type="number"

name="year"

value="<?= date('Y') ?>"

class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Basic Salary</label>

<input

type="number"

name="basic"

value="<?= $employee['basic_salary'] ?>"

class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Allowance</label>

<input

type="number"

name="allowance"

value="0"

class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Bonus</label>

<input

type="number"

name="bonus"

value="0"

class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Overtime</label>

<input

type="number"

name="overtime"

value="0"

class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Tax</label>

<input

type="number"

name="tax"

value="0"

class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Deduction</label>

<input

type="number"

name="deduction"

value="0"

class="form-control">

</div>

</div>

<button class="btn btn-success">

Generate Payroll

</button>

<a

href="<?= base_url('employee') ?>"

class="btn btn-secondary">

Cancel

</a>

</form>

</div>

</div>

</div>

</body>

</html>