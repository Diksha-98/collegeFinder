@extends('category.layout')
@section('content')
<html>
    <head>
        <title>
            collegefinder
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">

    </head>
    
    <body>


   

<div class="container-fluid" style="background-image: url('back/St-Hughs-College.jpg'); min-height: 60vh; background-position: center;
background-size: cover;
position: relative;">
<div class="box">
    <form action="" class="d-flex" method="GET">
        @csrf
        <input class="rounded-pill shadow" type="text" name="search" placeholder="find college" size="60px" style="border: 1px solid rgb(223, 21, 21); margin-left:30%; margin-top:160px">
        <input type="submit" class="btn rounded-pill shadow text-white" value="Go" style="background-color:rgb(223, 21, 21); margin-top:160px">
    </form>
</div>
    
    
</div>
<h3 class="text-danger mt-3 text-center" style="text-decoration: underline">Choose your career in these field</h3>
<div class="container mt-5">
    <div class="col-lg-12 shadow">
        <div class="row">
      
            @foreach ($categories as $item)
            <div class="col-lg-4 mt-3">
            
                    <div class="card border-0">

                        <a href="{{route('show',['categories'=>$item->id])}}"><p class="text-dark text-center">{{$item->c_name}}</p></a>
                            
                    </div>
                   
                    <div class="card-body border rounded-circle shadow">
                        <img src="{{asset('cover/'.$item->cover)}}" width="100%" height="200px" class="img-cover border rounded-circle">
                    </div>
               
                      
                  
                </div>     
                   
            @endforeach
        </div>
        </div>
</div>
    </body>
</html>
@endsection
