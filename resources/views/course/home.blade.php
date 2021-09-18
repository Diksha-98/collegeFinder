@extends('city.layout')
@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-lg-8 mx-auto">
        @foreach ($course as $item)
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <td>{{$item->id}}</td>

            </tr>
            <tr>
                <th>Name</th>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <th>Fee</th>
                <td>{{$item->fee}}</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>{{$item->duration}}</td>
            </tr>
            <tr>
                <th>College_id</th>
                <td>{{$item->college_id}}</td>
         
           
        </table>   
        <form action="{{route('course.destroy',['course'=>$item->id])}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger w-100" value="Delete">
        </form>


        @endforeach
        </div>
    </div>
      

@endsection