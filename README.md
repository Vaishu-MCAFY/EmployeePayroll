# Employee Payroll Management System

## 📌 Project Overview

The "Employee Payroll Management System" is a web-based application developed to manage employee information and payroll activities in an easy and organized way. The system is developed using HTML, CSS, JavaScript, PHP, CodeIgniter4, and MySQL.

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

# Payroll Management System

## Project Overview

The **Payroll Management System** is a web-based application developed using PHP, CodeIgniter 4, MySQL, HTML5, CSS3, and JavaScript. It is designed to simplify employee management, payroll processing, payslip generation, and payroll reporting.

The system provides a centralized platform for managing employee information, calculating salary details, maintaining payroll records, generating payslips, and viewing payroll reports. It follows the MVC (Model-View-Controller) architecture supported by CodeIgniter to organize application logic, database operations, and user interface components.

## Technologies Used

- **HTML5** – Structure of web pages
- **CSS3** – Styling and responsive user interface
- **JavaScript** – Client-side interactivity
- **PHP** – Backend application logic
- **CodeIgniter 4** – PHP MVC framework
- **MySQL** – Database management
- **Bootstrap** – Responsive UI components, if configured
- **Composer** – PHP dependency management
- **Apache / XAMPP** – Local development server

## Project Features

### 1. Home Page
- Welcome page
- Navigation menu
- Access to login and application features

### 2. Authentication
- User login
- Credential validation
- Session management
- Logout functionality

### 3. Dashboard
- Overview of employee records
- Employee management navigation
- Payroll management navigation
- Quick access to payslips and reports

### 4. Employee Management
- Add new employees
- View employee details
- Display the employee list
- Update employee information
- Delete employee records

### 5. Payroll Management
- Create payroll records
- Maintain employee salary information
- Store payroll details
- View payroll records
- Manage salary calculations based on the implemented payroll logic

### 6. Payslip Generation
- Generate employee payslips
- Display salary breakdowns
- Present payroll details in a printable format
- View employee salary information

### 7. Reports
- Access payroll reports
- Review employee payroll information
- Support payroll record analysis

  

## Project Structure

PayrollManagement/
├── .github/
├── app/
│   ├── Config/
│   ├── Controllers/
│   │   ├── Auth.php
│   │   ├── BaseController.php
│   │   ├── Dashboard.php
│   │   ├── Employee.php
│   │   ├── Home.php
│   │   ├── Payroll.php
│   │   ├── Payslip.php
│   │   └── Reports.php
│   ├── Database/
│   │   ├── Migrations/
│   │   └── Seeds/
│   ├── Filters/
│   ├── Helpers/
│   ├── Language/
│   ├── Libraries/
│   ├── Models/
│   │   ├── EmployeeModel.php
│   │   ├── PayrollModel.php
│   │   └── UserModel.php
│   ├── Views/
│   │   ├── auth/
│   │   │   └── Login.php
│   │   ├── employee/
│   │   │   ├── create.php
│   │   │   ├── emlist.php
│   │   │   ├── index.php
│   │   │   └── update.php
│   │   ├── errors/
│   │   ├── payroll/
│   │   │   ├── create.php
│   │   │   └── index.php
│   │   ├── dashboard.php
│   │   ├── Home.php
│   │   ├── Payslip.php
│   │   ├── Reports.php
│   │   └── welcome_message.php
│   ├── .htaccess
│   └── Common.php
├── public/
│   ├── css/
│   │   ├── dash.css
│   │   ├── emp.css
│   │   ├── login.css
│   │   ├── payroll.css
│   │   ├── payslip.css
│   │   └── reports.css
│   ├── .htaccess
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── tests/
│   └── _support/
│       ├── Database/
│       ├── Libraries/
│       │   └── ConfigReader.php
│       └── Models/
├── index.html
└── README.md


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


## Implementation 

-HTML5 payslip template and salary table

-CSS3 print stylesheet

-Bootstrap employee list and status badges

-Responsive dashboard and HR forms

-CodeIgniter 4 MVC architecture

-HR login and session management

-File handling for payslip downloads

-Form validation

-MySQL salary and payroll tables

-Query Builder for payroll operations

-Employee CRUD operations


## Future Enhancements

- Employee attendance management
- Tax and deduction calculations
- Overtime and bonus management
- PDF payslip downloads
- Payroll payment status tracking
- Role-based access control
- Advanced payroll analytics
- Email notifications for payslips


## Author

Project Name: Employee Payroll Management System  
Framework: CodeIgniter 4  
Backend: PHP  
Frontend: HTML5, CSS3, JavaScript  
Database: MySQL  
Architecture: MVC  
Server: Apache / CodeIgniter Development Server

