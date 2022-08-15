@extends('layouts.app')


@section('content')

   <div class="container">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Product List</h1>
        </div>

        <div class="col-lg-12" >
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2 " >
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name='name' placeholder="Name" value="">
                        </div>
                    </div>
                </div>
                <div class="row mb-2 " >
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name='image' placeholder="image">
                        </div>
                    </div>
                </div>
                <div class="row mb-2 " >
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name='price' placeholder="price">
                        </div>
                    </div>
                </div>

                <div class="row mb-2 " >
                    <div class="col-lg-1">
                        <label class="form-check-label" >Status</label>
                    </div>
                    <div class="col-lg-1">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="active">
                            <label class="form-check-label" for="exampleRadios2">Actvie</label>
                      </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="inactive">
                            <label class="form-check-label" for="exampleRadios2">Inactive</label>
                        </div>

                    </div>
                </div>
                <div class="row mb-2 " >
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
        </form>
        </div>

        <div class="col-lg-12">
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Change/Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($task as $task)
                      <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->image }}</td>
                        <td>{{ $task->price }}</td>
                        <td>
                                @if ($task->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @elseif ($task->status == 'inactive')
                                    <span class="badge bg-warning">Inactive</span>
                                @endif
                        </td>
                        <td>

                              <div class="col-lg-1">
                                <a href="{{ route('product.editStatus',$task->id)  }}" > <button type="button" class="btn btn-primary">changeStatus</button></a>
                            </div>
                        </td>
                        <td >
                            <a href="{{ route('product.delete',$task->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            <a href="{{ route('product.edit',$task->id)  }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
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
        padding-top:15vh;
        font-size: 5rem;
        color:rgb(6, 214, 6);
    }
</style>

@endpush

