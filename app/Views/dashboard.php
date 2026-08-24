<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payroll Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('css/dash.css') ?>">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<div class="d-flex">
    <div class="sidebar">

        <h3 class="text-center py-3">
            Payroll
        </h3>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="<?= base_url('dashboard') ?>" class="nav-link">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('employee') ?>" class="nav-link">
                    <i class="bi bi-people-fill"></i>
                    Employees
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('payroll') ?>" class="nav-link">
    <i class="bi bi-cash-stack"></i> Payroll
</a>
            </li>
            
            <li class="nav-item">
                <a href="<?= base_url('reports') ?>" class="nav-link">
                    <i class="bi bi-bar-chart-fill"></i>
                    Reports
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </a>
            </li>

        </ul>

    </div>

    <div class="content">

        <h2 class="mb-4">
            Employee Payroll Dashboard
        </h2>

        <div class="row">

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card dashboard-card bg-primary text-white">
                    <div class="card-body text-center">
                        <i class="bi bi-people-fill display-5"></i>
                        <h5 class="mt-2">Total Employees</h5>
                        <h2><?= $totalEmployees ?></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-3">
                <div class="card dashboard-card bg-success text-white">
                    <div class="card-body text-center">
                        <i class="bi bi-wallet2 display-5"></i>
                        <h5 class="mt-2">Total Payroll</h5>
                        <h2>₹<?= number_format($totalPayroll,2) ?></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-3">
                <div class="card dashboard-card bg-info text-white">
                    <div class="card-body text-center">
                        <i class="bi bi-cash-stack display-5"></i>
                        <h5 class="mt-2">Salary Paid</h5>
                        <h2>₹<?= number_format($salaryPaid,2) ?></h2>
                    </div>
                </div>
            </div>

        <div class="card mt-4">

            <div class="card-header bg-dark text-white">
                Recent Employees
            </div>

            <div class="card-body">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Status</th>
                    </tr>

                    </thead>

                    <tbody>

                    <?php foreach($employees as $emp): ?>

                    <tr>

                        <td><?= $emp['emp_id'] ?></td>
                        <td><?= $emp['name'] ?></td>
                        <td><?= $emp['department'] ?></td>
                        <td>₹<?= number_format($emp['basic_salary'],2) ?></td>

                        <td>
                            <?php if($emp['status']=="Active"): ?>
                                <span class="badge bg-success">Active</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Inactive</span>
                            <?php endif; ?>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>