@extends('layouts.app')

@section('content')
   <div class="container">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Dashboard</h1>
        </div>
   </div>

   <div class="row justify-content-center">
      @forelse ($task  as $taskk )
      <div class="col-lg-4">
        <div class="card home-card">
            <img src="{{ config('images.access_path')}}/{{ $taskk->images->name }}"  alt="product image" class="banner-image card-img-top">
           <div class="card-body">
              <h5 class="card-title">{{ $taskk->name }}</h5>
            </div>
          </div>
        </div>
      @empty
      <div class="col-lg-12">
        <h2 class="text-danger">No Product Found</h2>
      </div>
      @endforelse
   </div>











@endsection


@push('css')
<style>
    .page-title{
        padding-top:10vh;
        padding-bottom:5vh;
        font-size: 5rem;
        color: #5471C6;
    }
    .home-card{
        max-height: 15rem;
    }

</style>
@endpush
