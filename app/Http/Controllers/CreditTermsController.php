<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditTermsController extends Controller
{
    public function index()
    {
        return view('credit-terms');
    }
}
