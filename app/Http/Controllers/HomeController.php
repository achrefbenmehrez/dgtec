<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index'); // index.blade.php
    }

    public function selecteurApple()
    {
        return view("selecteur-de-memoire-apple");
    }

    public function selecteurMemoire()
    {
        return view("selecteur-de-memoire");
    }

    public function configurateurNas()
    {
        return view("configurateur-de-nas");
    }

    public function selecteurNas()
    {
        return view("selecteur-de-nas");
    }

    public function comparateurRaid()
    {
        return view("comparateur-de-raid");
    }
}
