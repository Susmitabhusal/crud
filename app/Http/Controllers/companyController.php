<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
   public function index()
   {
   	return view('company.home',['name' => 'susmita']);
   } //
}
