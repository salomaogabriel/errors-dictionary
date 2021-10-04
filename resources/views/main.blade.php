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
            <h2>A dictionary for the error codes you see in other websites</h2>
        </article>
        <article>
            <section>
                <form>
                    <input type="search" name="search"  placeholder="Search for Error Code or Company">
                    <button type="submit" id="submitBut"><img src="assets/search.svg" alt="search Icon"></button>
                </form>
            </section>
        
            @foreach($results as $error) 
            <section class="container">
                <h2>{{$error->name}}</h2>
                <a href="/company/{{$error->company}}">{{$error->company}}</a>
                <h4>Meaning: {{ $error->meaning }}</h4>
                <h4>Solution: {{$error->solution}} </h4>
            </section>
            @endforeach
            <!-- <section class="container">
                <h2></h2>
                <h3>Netflix</h3>
                <h4>Meaning: </h4>
                <h4>Meaning:</h4>
            </section> -->
        </article>
        <script>
            document.getElementById("submitBut").addEventListener("click",function(event) {
                event.preventDefault();
                let search = document.getElementsByName("search")[0].value;
                window.location.href = search;
            })
        </script>
    </body>
</html>
