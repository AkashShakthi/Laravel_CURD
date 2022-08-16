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

    public function get($task_id)
    {

        return $this->task->find($task_id);
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
        ImagesFacade::delete($task->image_id,[1,2,3,4,5]);
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

    public function update(array $data, $task_id)
    {
        $task = $this->task->find($task_id);
        $task->update($this->edit($task, $data));
    }

    protected function edit(Product $task, $data)
    {

        return array_merge($task->toArray(), $data);
    }

}

