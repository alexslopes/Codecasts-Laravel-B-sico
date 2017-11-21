<?php

namespace Teste\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return 'Hello';
    }

    public function get($id){
        dd($id);
    }

    public function create(){
        
    }

    public function update($id){
        
    }

    public function delete($id){
        
    }
}
