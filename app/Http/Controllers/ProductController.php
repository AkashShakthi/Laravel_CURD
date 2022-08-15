<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends ParentController
{
    protected $stack;

    public function __construct()
    {
        $this->task = new Product();
    }


    public function index()
    {
        $response['task'] = $this->task->all();
        //dd($response);
        return view('pages.product.product')->with($response);
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->task->create($request->all());
       return redirect()->back();
    }

    public function delete($task_id)
    {
        //dd($request);
        $task = $this->task->find($task_id);
        $task->delete();
        return redirect()->back();
    }


    public function editStatus($task_id)
    {
        //dd($request);
        $task = $this->task->find($task_id);
        if($task->status == "active"){
            $task->status = "inactive";
            $task->update();
        }else if($task->status == "inactive"){
            $task->status = "active";
            $task->update();
        }

        return redirect()->back();
    }

    public function edit($task_id)
    {
        //dd($request);
        $task = $this->task->find($task_id);
        $task->update();
        return redirect()->back();
    }

    public function  selectData($task_id)
    {
        //dd($request);
        $task = $this->task->find($task_id);
        $task->update();
        return redirect()->back();
    }

}
