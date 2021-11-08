@extends('layouts.main')

@section('title', 'Comic list')



{{-- @section('main-section-classes', '') --}}
@section('cdn-section')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
@endsection

@section('content')
    @forelse ($comics as $comic)
        <div class="card m-5 " style="width: 18rem;">
            <img src="{{ $comic->url}}" class="card-img-top" alt="{{ $comic->title}}">
            <div class="card-body">
                <h4 class="card-title">{{ $comic->title}}</h4>
                <h5>{{ $comic->author}}</h5>
                <p class="card-text">{{ $comic->description}}</p>
                <a href="{{ route('comic.show', $comic->id )}}" class="btn btn-primary">Dettaglio</a>
                <a href="{{ route('comic.edit', $comic->id)}}"> <i class="fas fa-edit ms-3"></i> </a>
            </div>
      </div>
    @empty
        <h3>Non trovo nulla</h3>
    @endforelse
    
@endsection
    