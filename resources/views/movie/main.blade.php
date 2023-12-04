@extends('template.app')
@section('content')
    <div class="d-flex justify-content-center" style="background-color: #1B1919">
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
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img src="assets/wish.png" class="d-block img-fluid carousel-inner img" alt="wish">
                </div>
                <div class="carousel-item">
                    <img src="assets/hungergames.png" class="d-block img-fluid carousel-inner img" alt="hungergames">
                </div>
                <div class="carousel-item">
                    <img src="assets/troll.png" class="d-block img-fluid carousel-inner img" alt="troll">
                </div>
                <div class="carousel-item">
                    <img src="assets/rumahiblis.png" class="d-block img-fluid carousel-inner img" alt="rumahiblis">
                </div>
                <div class="carousel-item">
                    <img src="assets/hidupmemangkomedi.png" class="d-block img-fluid carousel-inner img"
                        alt="hidupmemangkomedi">
                </div>
                <div class="carousel-item">
                    <img src="assets/172days.png" class="d-block img-fluid carousel-inner img" alt="172days">
                </div>
                <div class="carousel-item">
                    <img src="assets/thanksgiving.png" class="d-block img-fluid carousel-inner img" alt="thanksgiving">
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

    <div class="d-flex justify-content-start align-items-center ps-5"
        style="font-size: 48px; color:white; background-color: #1B1919; height: 100;">
        <div style="width: 30px; background-color: #370000; height: 110px; margin-left:130px">
        </div>
        <div style="margin-left: 20px;"> NOW SHOWING </div>
    </div>
    <div class="d-flex justify-content-center pt-5 pb-5" style="background-color: #1B1919">
        <a href="#" class="text-center text-white"
            style="text-decoration: none; display: flex; flex-direction: column; align-items: center;">
            <div style="margin-bottom: 10px;">
                <img src="assets/pos1.png" alt="pos1" class="img-fluid">
                <div class="mt-3">The Tunnel to Summer, The Exit of Goodbye</div>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="assets/timelogo.png" alt="timelogo">
                <div class="ml-2" style="margin-left: 5px;">82m</div>
                <img style="width: 50px; height:30px" class="ps-2" src="assets/r13.jpg" alt="r13">
            </div>
        </a>
    </div>
    <div class="d-flex justify-content-start align-items-center ps-5"
        style="font-size: 48px; color:white; background-color: #1B1919; height: 100;">
        <div style="width: 30px; background-color: #370000; height: 110px; margin-left:130px">
        </div>
        <div style="margin-left: 20px;"> UPCOMING </div>
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
