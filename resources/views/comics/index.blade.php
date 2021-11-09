@extends('layouts.main')

@section('title', 'Comic list')


{{-- @section('main-section-classes', '') --}}
@section('cdn-section')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
@endsection

@section('content')
        <h1>La lista dei Fumetti disponibili:</h1>
        @if (session('delete'))
            <div class="alert alert-success" role="alert"> 
                Il fumetto: {{session('delete')}} è stato eliminato con successo
            </div>
        @endif  
        @forelse ($comics as $comic)
        <div class="card m-5 " style="width: 18rem;">
            <img src="{{ $comic->url}}" class="card-img-top" alt="{{ $comic->title}}">
            <div class="card-body">
                <h4 class="card-title">{{ $comic->title}}</h4>
                <h5>{{ $comic->author}}</h5>
                <p class="card-text">{{ $comic->description}}</p>
                <a href="{{ route('comic.show', $comic->id )}}" class="btn btn-primary">Dettaglio</a>
                <a href="{{ route('comic.edit', $comic->id)}}"> <i class="fas fa-edit ms-4"></i> </a>
                <form method="POST" class="p-4 d-inline" action="{{ route('comic.destroy', $comic)}}" class="delete-form" data-id="{{ $comic->id }}" data-title="{{ $comic->title }}">
                    @csrf
                    @method("DELETE")
                    <button><i class="fas fa-trash"></i></button>
                </form>
                
            </div>
      </div>
    @empty
        <h3>Non trovo nulla</h3>
    @endforelse
    
@endsection
    

{{-- @section('script-section')
    <script>
        const deleteFormElements = document.querySelectorAll('.delete-form');
        deleteFormElements.forEach(form => {
                form.addEventListener('submit', function(event){
                    event.preventDefault(); // intercetta la funzionalità standard e la blocca

                    const id = form.getAttribute("data-id");
                    const title = form.getAttribute("data-name");

                    const confirm = window.confirm(`Sei sicuro di voler cancellare` );
                    if (confirm) this.submit();
                })
        });
    </script>
@endsection --}}