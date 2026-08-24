<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->post('authenticate', 'Auth::authenticate');
$routes->get('logout', 'Auth::logout');
$routes->get('home', 'Home::index');
$routes->get('dashboard', 'Dashboard::index');

$routes->get('employee', 'Employee::index');
$routes->get('employee/create', 'Employee::create');
$routes->post('employee/store', 'Employee::store');

$routes->get('employee/edit/(:num)', 'Employee::edit/$1');

$routes->get('employee/update/(:num)', 'Employee::updateForm/$1');

$routes->post('employee/update/(:num)', 'Employee::update/$1');
$routes->get('employee/delete/(:num)', 'Employee::delete/$1');

$routes->get('payroll/create/(:num)', 'Payroll::create/$1');

$routes->get('payroll', 'Payroll::index');
$routes->post('payroll/store', 'Payroll::store');
$routes->get('payroll/delete/(:num)', 'Payroll::delete/$1');
$routes->get('payroll/markPaid/(:num)', 'Payroll::markPaid/$1');

$routes->get('payslip', 'Payslip::index');
$routes->get('payslip/(:num)', 'Payslip::generate/$1');
$routes->get('payslip/download/(:num)', 'Payslip::download/$1');

$routes->get('reports', 'Reports::index');
$routes->get('reports/download', 'Reports::download');