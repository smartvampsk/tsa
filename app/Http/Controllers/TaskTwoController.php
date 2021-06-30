<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskTwoController extends Controller
{
    public function index()
    {
        return view('fronts.task2');
    }
}
