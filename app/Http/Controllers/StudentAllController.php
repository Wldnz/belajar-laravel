<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

Class StudentAllController extends Controller{
    public function show(){
        return view("test",["students" => Students::all('*')]);
    }
}
