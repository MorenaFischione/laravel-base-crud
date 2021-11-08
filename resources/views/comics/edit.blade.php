@extends('layouts.main')

@section('title', 'Creazione nuovo Fumetto')

@section('content')
    
    <div class="add-comics p-5">
        <h3>Modifica il Fumetto: {{$comic->title}}</h3>
        <a href="{{ route('comic.index')}}">Back</a>
    </div>
   
    <div class="contain-form">
        <form action="{{ route('comic.update', $comic)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="row justify-content-between">
                <div class="col-6 pb-5">
                    <label class="form-label" for="title">Titolo del Fumetto</label>
                    <input class="form-control" type="text" id="title" name="title" placeholder="Titolo" value={{$comic->title}} required>
                    <div class="form-text">Inserisci il Titolo del nuovo Fumetto da inserire</div>
                </div>
                <div class="col-6 pb-5">
                    <label class="form-label" for="author">Autore</label>
                    <input class="form-control" type="text" id="author" name="author" placeholder="Autore" value={{$comic->author}} required>
                    <div class="form-text">Inserisci l'autore del Fumetto</div>
                </div>
                <div class="col-6 pb-5">
                    <label class="form-label" for="description">Descrizione</label>
                    <input class="form-control" type="text" id="description" name="description" placeholder="Descrizione" value={{$comic->description}} required>
                    <div class="form-text">Inserisci la descrizione del nuovo Fumetto</div>
                </div>
                <div class="col-6 pb-5">
                    <label class="form-label" for="url">Cover</label>
                    <input class="form-control" type="text" id="url" name="url" placeholder="indirizzo immagine" value={{$comic->url}} required>
                    <div class="form-text">Inserisci la Cover del nuovo Fumetto</div>
                </div>
                <div class="col-12 text-end">
                    <button type="reset" class="btn btn-primary me-5">Cancella i campi</button>
                    <button type="submit"  class="btn btn-secondary me-3">Modifica il fumetto: {{$comic->title}}</button>
                </div>
            </div>
            
        </form>
    </div>

@endsection