<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/movieDetails.css') }}">
</head>

<body>
    <div class="container">
        <img src="{{ asset('poster/' . $movie->FilmPoster) }}" alt="{{ $movie->FilmName }}" class="image">
        <div class="desc">
            <div class="title">
                {{ $movie->FilmName }}
            </div>

            <div>
                <img style="width: 50px; height:30px" class="ps-2" src="/assets/r13.jpg" alt="r13">
                <img src="/assets/timelogo.png" alt="timelogo">
            </div>

            <div class="descript">
                <div class="director">
                    Director : {{ $movie->FilmDirector }}
                </div>
                <div class="writers">
                    Writers : {{ $movie->FilmWriter }}
                </div>
                <div class="synopsis">
                    Synopsis : {{ $movie->FilmSynopsis }}
                </div>
            </div>
            <a class="proc" href="{{ route('seats.theaterSeat') }}">
                BUY A TICKET
            </a>
        </div>
        {{-- <img style="width: 50px; height:30px" class="ps-2" src="assets/r13.jpg" alt="r13"> --}}
    </div>

    {{-- <p>Duration: {{ $movie->FilmDuration }} minutes</p> --}}
</body>

</html>
