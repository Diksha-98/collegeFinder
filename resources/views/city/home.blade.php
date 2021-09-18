@extends('city.layout')
@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6 mx-auto">
        @foreach ($city as $item)
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <td>{{$item->name}}</td>
                
            </tr>
           
        </table>
        <form action="{{route('city.destroy',['city'=>$item->id])}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger w-100" value="Delete">
        </form>

        
               
               
        @endforeach
        </div>
    </div>
      

@endsection