@extends('state.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
                <form action="{{route('state.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
                <div class="mb-3">
                   
                    <input type="submit" name="submit" class="btn btn-success w-100">
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection