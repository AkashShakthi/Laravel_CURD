@extends('layouts.app')


@section('content')

   <div class="container">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Product List</h1>
        </div>

        <div class="col-lg-12 " >
            <form role="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2 justify-content-center" >
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name='name' placeholder="Name" value="">
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
                <div class="row mb-2 justify-content-center " >
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name='price' placeholder="price">
                        </div>
                    </div>
                </div>

                <div class="row mb-5 justify-content-center " >
                    <div class="col-lg-5"> </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </div>
                </div>
        </form>
        </div>

        <div class="col-lg-12">
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($task as $task)
                      <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->name }}</td>
                        <td><img src="{{ config('images.access_path')}}/{{ $task->images->name }}" alt="" width="100px"></td>
                        <td>{{ $task->price }}</td>
                        <td>
                                @if ($task->status == 0)
                                    <span class="badge bg-warning">Inactive</span>
                                @else
                                    <span class="badge bg-success">Active</span>
                                @endif
                        </td>

                        <td >
                            <a href="{{ route('product.delete',$task->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>

                            @if ($task->status == 0)
                            <a href="{{ route('product.editStatus',$task->id)  }}" class="btn btn-primary"><i class="fa-solid fa-check-circle"></i>Active</a>

                            @else
                            <a href="{{ route('product.editStatus',$task->id)  }}" class="btn btn-warning"><i class="fa-solid fa-check-circle"></i>Inactive</a>
                            @endif

                            <a href="{{ route('product.delete',$task->id)  }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
   </div>
@endsection

@push('css')
<style>
    .page-title{
        padding-top:5vh;
        font-size: 5rem;
        color:#5471C6;
    }
</style>

@endpush

