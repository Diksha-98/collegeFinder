@extends('college.layout')
@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-lg-8 mx-auto">
        @foreach ($college as $item)
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <td>{{$item->id}}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src="{{asset('image/'.$item->image)}}" width="100%" height="200px"></td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$item->description}}</td>
            </tr>
            <tr>
                <th>Rank</th>
                <td>{{$item->rank}}</td>
            </tr>
            <tr>
                <th>State_id</th>
                <td>{{$item->state_id}}</td>
            </tr>
            <tr>
                <th>city_id</th>
                <td>{{$item->city_id}}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{$item->category}}</td>
            
           
        </table>
        <form action="{{route('college.destroy',['college'=>$item->id])}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        
               
               
        @endforeach
        </div>
    </div>
      

@endsection