<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientesController extends Controller
{
    public function index(){
        
    }
    public function create(){
        
    }
    public function edit(){
        
    }
    
    public function showClientes($name){
        //$name="Ricardo Toledo";
        return view('users/index',  compact('name'));
    }
}
