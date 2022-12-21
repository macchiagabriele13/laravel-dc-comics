@extends('layouts.app')

@section('content')



<div class="container py-5">
    <div class="d-flex gap-4">
        <img src="{{$comics->thumb}}" alt="{{$comics->title}}">
        <div class="details">
            <h1>{{$comics->title}}</h1>
            <p>{{$comics->description}}</p>
            <div class="meta">
                <div class="series">
                    Cooking time: {{$comics->series}}
                </div>
            </div>

        </div>
    </div>
</div>

@endsection