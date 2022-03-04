<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="film_cards_container">
        @foreach ($moviesArray as $movie)
        <div class="film_card">
            <h1>{{$movie['title']}}</h1>
            <h1>{{$movie['original_title']}}</h1>
            <p>{{$movie['nationality']}}</p>
            <p>{{$movie['date']}}</p>
            <p>{{$movie['vote']}}</p>
        </div>
    @endforeach
    </div>
</body>
</html>