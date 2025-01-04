<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcontroller extends Controller
{
    public function welcome(){
  return view("welcome");
}
}
