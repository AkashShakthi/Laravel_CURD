<?php

namespace App\Http\Controllers;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class DashboardController extends ParentController
{
    public function index()
    {
        $response['task'] = ProductFacade::allActive();
        return view('pages.Dashboard.index')->with($response);
    }
}
