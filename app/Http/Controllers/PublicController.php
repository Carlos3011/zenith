<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function inicio() {
        return view('public.inicio');
    }

    public function acerca() {
        return view('public.acerca');
    }

    public function miembros() {
        return view('public.miembros');
    }

    public function chatbots() {
        return view('public.chatbot');
    }

    public function recursos() {
        return view('public.recursos');
    }
}