<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function main() {
        return view('components.sidebars');
    }
}
