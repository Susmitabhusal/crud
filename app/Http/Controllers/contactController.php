<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
   public function index()
   {
   	$name="Susmita Bhusal";
   	return view('layouts.contact.index')->with(['first'=>'Susmita',
   												'last'=>'Bhusal']);


   }

   public function show($id)
   {

   }
}
