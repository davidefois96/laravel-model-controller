@extends('layout.main')



@section('content')


<h1 class="text-center text-danger my-5">{{$pageTitle}}</h1>



<div class="container">

    <div class="row row-cols-2 ">



        @foreach ($movies as $movie )

        <div class="col d-flex  justify-content-center ">

            <div class="card mb-5 w-50 bg-dark text-center p-2  text-white  border-1 border-danger ">



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

        @endforeach




    </div>






</div>



@endsection
