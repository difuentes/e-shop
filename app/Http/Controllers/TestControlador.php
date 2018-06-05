<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControlador extends Controller
{
   public function welcome()
   {
   	return view('welcome');
   }
}
