@extends('layouts.app')

@section('title', 'Home')

@section('main-content')

<section class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($movies as $movie)
                <div class="col ">
                    <div class="card">
                        <img src="https://picsum.photos/200/200" class="card-img-top p-2" alt="random picture">
                        <div class="card-body">
                            <h5 class="card-title">Title: {{$movie->title}}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis assumenda, rerum quasi ab voluptas consequatur, iusto amet rem accusantium facere ducimus cum numquam maxime ex molestiae odio id, fuga exercitationem.</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> Original name: {{$movie->original_title}}</li>
                                <li class="list-group-item"> Nationality: {{$movie->nationality}}</li>
                                <li class="list-group-item"> Date: {{$movie->date}}</li>
                            </ul>
                            <p class="card-text text-warning"> Imdb Rate: {{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</section>

@endsection
