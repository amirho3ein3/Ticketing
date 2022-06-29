<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin_ticket extends Controller
{
    public function adobe()
    {
        return view('support');
    }

    public function lesson_student()
    {
        return view('support');
    }

    public function teacher()
    {
        return view('support');
    }

    public function manager()
    {
        return view('support');
    }
}

