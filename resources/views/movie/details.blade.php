@extends('template.app')
@section('content')

    <link rel="stylesheet" href="{{asset('css/movieDetails.css')}}">
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
            <a class="proc" href="{{route('schedule',['id' => $movie->id])}}">
                BUY A TICKET
            </a>
        </div>
        {{-- <img style="width: 50px; height:30px" class="ps-2" src="assets/r13.jpg" alt="r13"> --}}

        <script>
            function scrollToSection(sectionId) {
                document.getElementById(sectionId).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        </script>
    </div>


    {{-- <p>Duration: {{ $movie->FilmDuration }} minutes</p> --}}

@endsection

