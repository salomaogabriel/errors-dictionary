<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/svg" href="/favicon.svg"/>
        <title>Errors' Dictionary</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">

    </head>
    <body>
        <article>
            <section class="title" onClick="window.location.href='/'">
                <img src="/favicon.svg" alt="Logo">
                <h1>Errors' Dictionary</h1>
            </section>
            <h2>Showing Results for {{ $search}}</h2>
        </article>
        <article>
            @if(count($results) < 1)
            <button onClick="window.location.href='/'" class="back">Go Back To Menu</button>
            @endif
        @foreach($results as $error) 
            <section class="container">
                <h2>{{$error->name}}</h2>
                <a href="/company/{{$error->company}}">{{$error->company}}</a>
                <h4>Meaning: {{ $error->meaning }}</h4>
                <h4>Solution: {{$error->solution}} </h4>
            </section>
        @endforeach
        </article>
    </body>
</html>
