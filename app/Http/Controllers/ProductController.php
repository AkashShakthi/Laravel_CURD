<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use domain\Facades\ProductFacade;

class ProductController extends ParentController
{


    public function index()
    {
        $response['task'] = ProductFacade::all();
        return view('pages.product.product')->with($response);
    }

    public function store(Request $request)
    {
        ProductFacade::store($request->all());
        return redirect()->back();
    }

    public function delete($task_id)
    {
        ProductFacade::delete($task_id);
        return redirect()->back();
    }


    public function editStatus($task_id)
    {
        ProductFacade::editStatus($task_id);
        return redirect()->back();
    }

    public function edit($task_id)
    {
        //dd($request);
        $task = $this->task->find($task_id);
        $task->update();
        return redirect()->back();
    }


}
