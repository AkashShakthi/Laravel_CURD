<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends ParentController
{
    public function index()
    {
        return view('pages.Dashboard.index');
    }
}
