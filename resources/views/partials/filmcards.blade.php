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