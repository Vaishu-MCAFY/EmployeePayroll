<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('css/payslip.css') ?>">
</head>

<body>

<div class="container mt-5">

<main class="payslip">

    <header class="payslip-header">

        <div class="row align-items-center">

            <div class="col-md-2 text-center">

                

            </div>

            <div class="col-md-10">

                <h2>ABC Technologies Pvt. Ltd.</h2>

                <p>
                    Pune, Maharashtra
                </p>

                <h4>Employee Payslip</h4>

            </div>

        </div>

    </header>

    <hr>

    <section>

        <h5>Employee Details</h5>

        <table class="table table-bordered">

            <tr>
                <th>Employee ID</th>
                <td><?= $employee['emp_id']; ?></td>

                <th>Name</th>
                <td><?= $employee['name']; ?></td>
            </tr>

            <tr>
                <th>Department</th>
                <td><?= $employee['department']; ?></td>

                <th>Designation</th>
                <td><?= $employee['designation']; ?></td>
            </tr>

            <tr>
                <th>Month</th>
                <td><?= $payroll['month']; ?></td>

                <th>Year</th>
                <td><?= $payroll['year']; ?></td>
            </tr>

        </table>

    </section>

    <section>

        <h5>Salary Breakdown</h5>

        <table class="table table-striped table-bordered">

            <thead class="table-primary">

                <tr>

                    <th>Particular</th>

                    <th>Amount (₹)</th>

                </tr>

            </thead>

            <tbody>

                <tr>
                    <td>Basic Salary</td>
                    <td><?= number_format($payroll['basic'],2); ?></td>
                </tr>

                <tr>
                    <td>Allowance</td>
                    <td><?= number_format($payroll['allowance'],2); ?></td>
                </tr>

                <tr>
                    <td>Bonus</td>
                    <td><?= number_format($payroll['bonus'],2); ?></td>
                </tr>

                <tr>
                    <td>Overtime</td>
                    <td><?= number_format($payroll['overtime'],2); ?></td>
                </tr>

                <tr>
                    <td>Tax</td>
                    <td><?= number_format($payroll['tax'],2); ?></td>
                </tr>

                <tr>
                    <td>Deduction</td>
                    <td><?= number_format($payroll['deduction'],2); ?></td>
                </tr>

            </tbody>

            <tfoot>

                <tr class="table-success">

                    <th>Net Salary</th>

                    <th>
                        ₹<?= number_format($payroll['net_salary'],2); ?>
                    </th>

                </tr>

            </tfoot>

        </table>

    </section>

    <footer class="mt-5">

        <div class="row">

            <div class="col-md-6 text-center">

                <br>

                Employee Signature

            </div>

            <div class="col-md-6 text-center">

                <br>

                HR Manager

            </div>

        </div>

    </footer>
    <div class="text-center mt-4">

    <button onclick="window.print()" class="btn btn-primary">
        Print Payslip
    </button>

    <a href="<?= base_url('payslip/download/'.$employee['id']) ?>"
       class="btn btn-success">
        Download Payslip
    </a>

</div>

</main>

</div>

</body>
</html>