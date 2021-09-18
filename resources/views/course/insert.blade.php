@extends('course.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
                <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">fee</label>
                  <input type="text" name="fee" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="">duration</label>
                    <input type="text" name="duration" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">college_id</label>
                    <input type="text" name="college_id" class="form-control">
                </div>
               
                <div class="mb-3">
                   
                    <input type="submit" name="submit" class="btn btn-success w-100">
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection