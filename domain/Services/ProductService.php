<?php

namespace domain\Services;
use App\Models\Product;
class ProductService
{
    protected $task;

    public function __construct()
    {
        $this->task = new Product();
    }


    public function all()
    {
        return $this->task->all();
    }

    public function store($data)
    {
        $this->task->create($data);
    }

    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();
    }


    public function editStatus($task_id)
    {

        $task = $this->task->find($task_id);
        if($task->status == "active"){
            $task->status = "inactive";
            $task->update();
        }else if($task->status == "inactive"){
            $task->status = "active";
            $task->update();
        }
    }

    public function edit($task_id)
    {

        $task = $this->task->find($task_id);
        $task->update();

    }



}

