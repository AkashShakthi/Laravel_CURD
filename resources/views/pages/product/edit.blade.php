<form role="form" action="{{ route('product.update',$task->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-2 justify-content-center" >
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" type="text" name='name' placeholder="Name" value="{{ $task->name }}">
            </div>
        </div>
    </div>
    <div class="row mb-2 justify-content-center " >
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" type="file" name='image' accept="image/jpg, image/jpeg, image/png">
            </div>
        </div>
    </div>
    <div class="row mb-2 justify-content-center" >
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" type="text" name='price' placeholder="price" value="{{ $task->price }}">
            </div>
        </div>
    </div>

    <div class="row mb-5 justify-content-center" >
        <div class="col-lg-5"> </div>
        <div class="col-lg-6">
            <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
        </div>
    </div>
</form>
