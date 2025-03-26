<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InserirController extends Controller
{
    public function index()
    {
        return view("inserir");
    }
}
