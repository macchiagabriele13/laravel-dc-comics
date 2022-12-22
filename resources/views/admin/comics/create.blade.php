@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Create a new Product</h1>
    <form action="{{route('comics.store')}}" method="post" class="card p-3">
        @csrf



        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Name" aria-describedby="titleHlper">
            <small id="titleHlper" class="text-muted">Add the Comics title here</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Comics Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Https" aria-describedby="thumbHlper">
            <small id="thumbHlper" class="text-muted">Add the Comics thumb here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Text Area" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Comics" aria-describedby="typeHlper">
            <small id="typeHlper" class="text-muted">Add the Comics type here</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Comics price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="12.36" aria-describedby="priceHlper">
            <small id="priceHlper" class="text-muted">Add the Comics price here</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Comics series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Batman" aria-describedby="seriesHlper">
            <small id="seriesHlper" class="text-muted">Add the Comics series here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Comics sale_date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="21-12-2022" aria-describedby="sale_dateHlper">
            <small id="sale_dateHlper" class="text-muted">Add the Comics sale_date here</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection