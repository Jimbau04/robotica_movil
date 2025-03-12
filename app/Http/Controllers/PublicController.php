<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function inicio(){
        return view('public.inicio');
    }

    public function proyectos(){
        return view('public.proyectos');
    }

    public function nosotros(){
        return view('public.nosotros');
    }

    public function contacto(){
        return view('public.contacto');
    }
}
