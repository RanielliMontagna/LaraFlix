<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtoresController extends Controller
{
    public function index()
    {
        return  "Olá!" .
            "<br>Este é o index do controlador";
    }
}
