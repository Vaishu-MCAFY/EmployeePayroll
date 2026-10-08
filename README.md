# Employee Payroll Management System

## 📌 Project Overview

The "Employee Payroll Management System" is a web-based application developed to manage employee information and payroll activities in an easy and organized way. The system is developed using **HTML, CSS, JavaScript, PHP, CodeIgniter, and MySQL**.

The application  manage employee records, calculate salaries, maintain payroll records, generate payslips, and prepare  reports. It reduces manual work and provides a simple interface for managing employee salary information.


## 🛠️ Technologies Used

| Technology  | Purpose                                 |
| ----------- | --------------------------------------- |
| HTML5       | Structure of web pages                  |
| CSS3        | Styling and responsive design           |
| JavaScript  | Client-side validation and interactions |
| PHP         | Server-side programming                 |
| CodeIgniter | PHP MVC framework                       |
| MySQL       | Database management                     |


## ✨ Features

### 1. 🔐 Login

The login module provides secure access to the payroll system.

**Features:**

* Admin login
* Usernamen and password authentication
* Session management
* Logout functionality
* Login validation


### 2. 📊 Dashboard

The dashboard provides an overview of the payroll system.

**Dashboard information includes:**

* Total employees
* Total payroll
* Salary paid
* Recent employees



### 3. 👨‍💼 Add Employee


**Add employee include:**

* Employee ID
* Employee name
* Email
* Phone number
* Department
* Designation
* Basic salary
* Joining date
* Employee status


### 4. 📋 Employee List

The Employee List displays all employees stored in the system.

* Employee ID
* Nmae
* Email
* Department
* Salalry
* Status
* Action

### 5. ✏️ Edit Employee

 Update existing employee information.

**Editable information includes:**

* Employee ID
* Employee name
* Email
* Phone number
* Department
* Designation
* Basic salary
* Joining date
* Employee status

### 6. 🗑️ Delete Employee

 Delete an employee record when it is no longer required.


### 7. 💰 Payroll

The Payroll module is used to calculate and process employee salaries.

**Payroll information includes:**

* Employee name
* Pay month
* Year
* Basic salary
* Allowances
* Bonuses
* Overtime
* Deductions
* Tax


### 8. 📑 Payroll List

The Payroll List displays all generated payroll records.

* Employee ID
* Employee name
* Month
* Year
* Net Salary
* Payment status
* Action



### 9. 🧾 Payslip

The system can generate an individual payslip for an employee.

**Payslip contains:**

* Company name
* Employee name
* Employee ID
* Department
* Designation
* Month
* Year
* Basic salary
* Allowances
* Bonus
* Overtime
* Deductions
* Tax
* Net salary
* Payment date

The payslip can be printed or saved for future reference.


### 10. 📈 Reports

The Reports module provides payroll and employee-related information.

**Reports include:**

* Employee ID
* Employee name
* Department
* Month
* Year
* Net Salary


▶️ Installation

Step 1: Install the following:
XAMPP
PHP
MySQL
Composer
CodeIgniter 4

Step 2: Place the project inside:
xampp/htdocs/

Step 3: Open the terminal in the project directory:
composer install

Step 4: Create Database, Open phpMyAdmin and create:
payroll_db

Import the database SQL file.

Step 5: Configure Database
Update the .env file:

database.default.hostname = localhost
database.default.database = payroll_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306

Step 6: Run Project
php spark serve

Open:
http://localhost:8080
