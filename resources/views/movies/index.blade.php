@extends('layouts.app')

@section('title', 'Home')

@section('main-content')

<section class="container">
    <div class="row g-3">
        @foreach ($movies as $movie)
            <div class="col-3 ">
                <div class="card">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="random picture">
                    <div class="card-body">
                        <h5 class="card-title"> Title :{{$movie->title}} </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est, quisquam sint et doloremque nobis quod recusandae ducimus excepturi obcaecati illum saepe sequi libero nihil, voluptas ipsam enim aut nostrum.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> Original name: {{$movie->original_title}}</li>
                        <li class="list-group-item"> Nationality: {{$movie->nationality}}</li>
                        <li class="list-group-item"> Date: {{$movie->date}}</li>
                    </ul>
                    <div class="card-body">
                        <p href="#" class="card-link"> Imdb Rate: {{$movie->vote}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
