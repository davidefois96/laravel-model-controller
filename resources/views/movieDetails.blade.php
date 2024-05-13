@extends('layout.main')

@section('title')

<h1 class="text-center text-danger mt-5 mb-3 ">Details of:</h1>

@endsection

@section('content')


<h2 class="text-center text-danger mb-5 ">{{$movie['title']}}</h2>

<div class="d-flex justify-content-center ">

    <div class="card mb-5 w-25 bg-dark text-center p-2  text-white  border-1 border-danger text-center">



        <img class="card-img-top" src="{{$movie['poster']}}" alt="{{$movie['title']}}">




        <div class="card-body ">

            <h4 class="mb-3">{{$movie['title']}}</h4>
            <h6 class="mb-4">{{$movie['original_title']}}</h6>
            <p>Language: {{$movie['nationality']}}</p>
            <p>Date: {{$movie['date']}}</p>
            <p class="mb-4">Vote: {{$movie['vote']}}</p>



            <a href="{{route('movieDetails',['id' => $movie['id']])}}" class="btn btn-danger ">Details</a>

        </div>


    </div>


</div>




@endsection
