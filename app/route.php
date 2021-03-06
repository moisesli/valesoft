<?php

$app->router->get('/', 'HomeController@index');

$app->router->get('/about', function () {
  require './views/about.php';
  return 'About Page';
});

// Auth
$app->router->get('/api/registro', 'Auth@apiRegistro');
$app->router->get('/registro', 'Auth@index', ['before' => 'CheckLoginRegister']);
$app->router->post('/api_registro', 'Auth@apiRegistro');
$app->router->get('/login', 'Auth@login', ['before' => 'CheckLoginRegister']);
$app->router->post('/api_login', 'Auth@apiLogin');

// Dashboard
$app->router->get('/dashboard', 'DashboardController@index', ['before' => 'CheckAuth']);

// Invoice
$app->router->get('/invoice', 'InvoiceController@index', ['before' => 'CheckAuth']);
$app->router->get('/invoice_new_bol_fac', 'InvoiceController@newFacturaBoleta', ['before' => 'CheckAuth']);
$app->router->get('/invoice_new_cred_deb', 'InvoiceController@newNotaCreditoDebito', ['before' => 'CheckAuth']);

//$app->router->get('/register', function () {
//    require './views/auth/register.php';
//});


