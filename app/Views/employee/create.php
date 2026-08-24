<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">Add Employee</h2>

<form action="<?= base_url('employee/store') ?>" method="post">

<?= csrf_field(); ?>

<div class="row">

<div class="col-md-6 mb-3">
<label>Employee ID</label>
<input type="text" name="emp_id" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Department</label>
<input type="text" name="department" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Designation</label>
<input type="text" name="designation" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Basic Salary</label>
<input type="number" name="basic_salary" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Joining Date</label>
<input type="date" name="joining_date" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Status</label>

<select name="status" class="form-control">

<option value="Active">Active</option>

<option value="Inactive">Inactive</option>

</select>

</div>

</div>

<button class="btn btn-primary">
Save Employee
</button>

<a href="<?= base_url('employee') ?>" class="btn btn-secondary">
Cancel
</a>

</form>

</div>

</body>
</html>