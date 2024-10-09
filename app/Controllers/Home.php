<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function homepage(): string
    {
        return view('homepage');
    }
    public function tugas1(): string
    {
        return view('tugas_01');
    }
    public function tugas2(): string
    {
        return view('tugas_02');
    }

    public function tugas3a(): string
    {
        return view('tugas_03a');
    }

    public function tugas3b(): string
    {
        return view('tugas_03b');
    }

    public function tugas4a(): string
    {
        return view('tugas_04a');
    }

    public function tugas4b(): string
    {
        return view('tugas_04b');
    }
}
