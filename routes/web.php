<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //LISTAR CUSTOMERS
    //$customers = Teste\Customer::paginate(10);
    //dd($customers);
    //echo $customers->render();

    //CRIAR NOVO CUSTOMER
    $data = [
        'name' => 'Fabio Vedovelli',
        'city' => 'Santo Andre',
        'state' => 'SP',
        'special_customer' => true,
        'birthdate' => '1974-08-07 00:00:00'
    ];

    $customer = Teste\Customer::create($data);
    dd($customer->toArray());

    //TRAZER CUSTOMER ID 2

    $data = [
        'name' => 'Um novo cara',
        'birthdate' => '1986-01-01 00:00:00',
    ];

    $customer = Teste\Customer::find(1);
    //dd($customer->birthdate);

    $customer->name = "um outro cara";
    //$customer->save();

    $customer->update($data);
});
