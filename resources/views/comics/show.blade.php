@extends('layouts.main')

@section('title', 'Comic')



@section('content')
    <div class="card m-5 " style="width: 18rem;">
        <img src="{{ $comic->url}}" class="card-img-top" alt="{{ $comic->title}}">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href=" {{ route('comic.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>

@endsection