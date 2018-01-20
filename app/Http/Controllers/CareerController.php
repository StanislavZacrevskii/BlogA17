<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(Request $request)
{
    return view('page.career');
}
}
