<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vip extends Controller
{
    public function create()
    {
    	return view("vip/create");
    }
}
