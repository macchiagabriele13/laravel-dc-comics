@extends('layouts.app')

@section('content')

@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Create a new Product</h1>
    <form action="{{route('comics.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add" aria-describedby="titleHlper">
            <small id="titleHlper" class="text-muted">Add the Comics title here</small>
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Comics Image</label>
            <input type="text" name="src" id="src" class="form-control" placeholder="Add" aria-describedby="srcHlper">
            <small id="srcHlper" class="text-muted">Add the Comics thumb here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Add" aria-describedby="typeHlper">
            <small id="typeHlper" class="text-muted">Add the Comics type here</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Comics price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Add" aria-describedby="priceHlper">
            <small id="priceHlper" class="text-muted">Add the Comics price here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection

@endsection