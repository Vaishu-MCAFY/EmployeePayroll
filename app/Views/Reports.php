<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Payroll Reports</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('css/reports.css') ?>">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">Payroll Reports</h2>

<div class="d-flex justify-content-end mb-3">

<button onclick="window.print()" class="btn btn-primary me-2">

<i class="bi bi-printer"></i>

Print

</button>

<a href="<?= base_url('reports/download') ?>" class="btn btn-success">

<i class="bi bi-download"></i>

Download

</a>

</div>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>Employee ID</th>

<th>Name</th>

<th>Department</th>

<th>Month</th>

<th>Year</th>

<th>Net Salary</th>

</tr>

</thead>

<tbody>

<?php foreach($reports as $row): ?>

<tr>

<td><?= $row['emp_id'] ?></td>

<td><?= $row['name'] ?></td>

<td><?= $row['department'] ?></td>

<td><?= $row['month'] ?></td>

<td><?= $row['year'] ?></td>

<td>₹<?= number_format($row['net_salary'],2) ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</body>
</html>