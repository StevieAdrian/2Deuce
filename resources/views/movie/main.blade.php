@extends('template.app')
@section('content')
    <div class="d-flex justify-content-center pallete-black">
        <div id="carouselExample" class="carousel slide pt-2 pb-3">
            <div class="carousel-indicators">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="4"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="5"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="6"></li>
                </ol>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block img-fluid carousel-inner img carousel-poster" src="assets/wish.png" alt="wish">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid carousel-inner img carousel-poster" src="assets/hungergames.png"
                        alt="hungergames">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid carousel-inner img carousel-poster" src="assets/troll.png" alt="troll">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid carousel-inner img carousel-poster" src="assets/rumahiblis.png"
                        alt="rumahiblis">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid carousel-inner img carousel-poster" src="assets/hidupmemangkomedi.png"
                        alt="hidupmemangkomedi">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid carousel-inner img carousel-poster" src="assets/172days.png"
                        alt="172days">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid carousel-inner img carousel-poster" src="assets/thanksgiving.png"
                        alt="thanksgiving">
                </div>
            </div>
            <button class="carousel-control-prev btn btn-dark" type="button" data-bs-target="#carouselExample"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn btn-dark" type="button" data-bs-target="#carouselExample"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="d-flex justify-content-start align-items-center ps-5 pallete-black nowshowing-button">
        <div class="nowshowingupcoming-bar">
        </div>
        <div id="now-showing" class="ms-4">NOW SHOWING</div>
    </div>

    @foreach ($movies as $movie)
        <div class="d-flex justify-content-center pt-5 pb-5" style="background-color: #1B1919">
            <a href="{{ route('details', ['id' => $movie->id]) }}" class="text-center text-white"
                style="text-decoration: none; display: flex; flex-direction: column; align-items: center;">
                <div style="margin-bottom: 10px;">
                    <img src="{{ asset('poster/' . $movie->FilmPoster) }}" alt="pos1" class="img-fluid"
                        style="width:auto ; height:25rem">
                    <div class="mt-3">{{ $movie->FilmName }}</div>
                </div>
                <div style="display: flex; align-items: center;">
                    <img src="assets/timelogo.png" alt="timelogo">
                    <div class="ml-2" style="margin-left: 5px;">{{ $movie->FilmDuration }} m</div>
                    <img style="width: 50px; height:30px" class="ps-2" src="assets/r13.jpg" alt="r13">
                </div>
            </a>
        </div>
    @endforeach

    <div class="d-flex justify-content-start align-items-center ps-5 pallete-black nowshowing-button">
        <div class="nowshowingupcoming-bar">
        </div>
        <div id="upcoming" class="ms-4">UPCOMING</div>
    </div>

    <div class="d-flex justify-content-center pt-5 pb-5" style="background-color: #1B1919">
        <a href="#" class="text-center text-white"
            style="text-decoration: none; display: flex; flex-direction: column; align-items: center;">
            <div style="margin-bottom: 10px;">
                <img src="assets/upcoming1.png" alt="upcoming1" class="img-fluid">
                <div class="mt-3">The Boy and The Heron</div>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="assets/timelogo.png" alt="timelogo">
                <div class="ml-2" style="margin-left: 5px;">124m</div>
                <img style="width: 50px; height:30px" class="ps-2" src="assets/r13.jpg" alt="r13">
            </div>
        </a>
    </div>



    @if (false)
    @endif
    @if (true)
    @endif
@endsection
