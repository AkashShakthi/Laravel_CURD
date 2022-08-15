<?php

namespace domain\Services;
use App\Models\Product;
use infrastructure\Facades\ImagesFacade;
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

    public function allActive()
    {
        return $this->task->allActive();
    }
    
    public function store($data)
    {
        if(isset($data['image'])){
            $image = ImagesFacade::store($data['image'],[1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
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
        if($task->status == 0){
            $task->status = 1;
            $task->update();
        }else{
            $task->status = 0;
            $task->update();
        }


    }

}

