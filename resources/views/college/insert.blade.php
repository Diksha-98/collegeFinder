
@extends('college.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
                <form action="{{route('college.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                  <textarea rows="10" class="form-control" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">rank</label>
                    <input type="text" name="rank" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">State_id</label>
                    <input type="text" name="state_id" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">city_id</label>
                    <input type="text" name="city_id" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">category</label>
                    <input type="text" name="category" class="form-control">
                </div>
                <div class="mb-3">
                   
                    <input type="submit" name="submit" class="btn btn-success w-100">
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection