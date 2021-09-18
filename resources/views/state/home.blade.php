@extends('state.layout')
@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-lg-8 mx-auto">
        @foreach ($state as $item)
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <td>{{$item->id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$item->name}}</td>
           
           
        </table>
        <form action="{{route('state.destroy',['state'=>$item->id])}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger w-100" value="Delete">
        </form>
        
               
               
        @endforeach
        </div>
    </div>
      

@endsection