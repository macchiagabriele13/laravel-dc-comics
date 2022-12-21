@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <h3>Current series</h3>
    </div>
</section>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            @foreach(Config::get('comics.comics') as $comic)
            <div class="col-2">
                @if($comic === Config::get('comics.comics')[0])
                <a href="{{route('description')}}">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['series']}}</p>
                </a>

                @else
                <img src="{{$comic['thumb']}}" alt="title">
                <p>{{$comic['series']}}</p>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <div class="load_more">
        <h3>Load More</h3>
    </div>
</div>
<div class="my-container">
    <div class="row">
        @foreach(Config::get('comics.icons') as $icon)
        <div class="col">
            <img src="{{ Vite::asset('resources/img/' . $icon['image']) }}">
            <h3>{{$icon['text']}}</h3>
        </div>
        @endforeach
    </div>
</div>
@endsection