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
    //$customer = new Teste\Customer();
    //$customer->name = 'Fabio Vedovelli';
    //$customer->city = 'Santo Andre';
    //$customer->state = 'SP';
    //$customer->special_customer = true;
    //$customer->birthdate = '1974-08-07 00:00:00';
    //$customer->save();
    //dd($customer->toArray());

    //TRAZER CUSTOMER ID 2
    $customer = Teste\Customer::find(1);
    dd($customer->birthdate);
});
