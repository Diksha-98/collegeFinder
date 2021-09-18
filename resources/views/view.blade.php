@extends('category.layout')
@section('content')
<div class="container-fluid">
    <img src="{{ asset('back/St-Hughs-College.jpg')}}" width="100%" height="300px">
</div>
<div class="container">
    <div class="col-lg-12">
        
<div class="row mt-5">

    @foreach ($colleges->college as $item)
    <div class="col-lg-6">
        <div class="card border rounded-circle">
            <img src="{{asset('image/'.$item->image)}}" width="100%" height="200px" class="img-cover border rounded-circle">
        </div>
            <div class="card-body bg-light">
                <p class="text-danger">{{$item->cat->c_name}}</p>
                <p class="text-info">About College: {{$item->description}}</p>
                <p class="text-success">Rank:{{$item->rank}}</p>
            </div>
           
        </div>
    

    @endforeach
    </div>
   
</div>
</div>

    
@endsection