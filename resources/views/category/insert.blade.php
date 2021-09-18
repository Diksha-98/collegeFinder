@extends('category.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">C_name</label>
                    <input type="text" name="c_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Cover</label>
                    <input type="file" name="cover" class="form-control">
                </div>


                   
                    <input type="submit" name="submit" class="btn btn-success w-100">
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection