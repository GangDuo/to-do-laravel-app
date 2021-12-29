<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(int $id)
    {
        return "Hello World! " . $id;
    }
}
