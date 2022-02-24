
{{-- Esercizio di oggi:
nome repo: laravel-model-controller

Oggi facciamo la nostra prima vera interazione con il database utilizzando l'ORM di Laravel.

1 - Create un nuovo progetto Laravel 7

2 - tramite phpMyAdmin create un nuovo database laravel_model_controller

3 - Importate nel vostro database la tabella movies in allegato

4 - inserite le vostre credenziali per il database nel file .env

5 - Create un model Movie
php artisan make:model Movie

6 - Create un controller che gestirà la rotta /
php artisan make:controller PageController

7 - All'interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

BONUS:
Stilare il layout nei dettagli con Sass --}}

@extends ('layouts.base')

@section('content')
    @foreach ($movies as $movie)
       <div class="card">
           <h2>{{ $movie->title }}</h2>
           <h3>{{ $movie->original_title }}</h3>
           <span>{{ $movie->date }}</span>
           <span>{{ $movie->vote }}</span>
           <span>{{ $movie->nationality }}</span>
       </div>
    @endforeach
@endsection