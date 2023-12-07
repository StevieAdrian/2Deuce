@extends('template.app')
@section('content')
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('css/schedule.css')}}">

    <!--=============== JS GLOBAL VAR ===============-->
    <script type="application/javascript">
        let previousTime = null;
    </script>

    <div class="container">
        <div class="movie">
            <div class="d-flex justify-content-center pt-5 pb-5" style="background-color: #1B1919">
                <a href="#" class="text-center text-white"
                    style="text-decoration: none; display: flex; flex-direction: column; align-items: center;">
                    <div style="margin-bottom: 10px;">
                        <img src={{ asset('poster/' .$movie->FilmPoster) }} alt="upcoming1" class="img-fluid">
                        <div class="mt-3">{{$movie->FilmName}}</div>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <img src="/assets/timelogo.png" alt="timelogo">
                        <div class="ml-2" style="margin-left: 5px;">124m</div>
                        <img style="width: 50px; height:30px" class="ps-2" src="/assets/r13.jpg" alt="r13">
                    </div>
                </a>
            </div>
        </div>

        <div class="schedule">
            <h1 class="schedule__title">Schedule</h1>

            <div class="schedule__nav">
                @foreach ($movie->schedule as $schedule)
                    <div class="schedule-card" id="schedule{{ $schedule->id }}">
                        <div class="schedule-card-body">
                            <h2 class="schedule-card-title">{{ \Carbon\Carbon::parse($schedule->ScheduleDate)->format('d M Y') }}</h2>
                            <p class="`schedule-card-text">{{ \Carbon\Carbon::parse($schedule->ScheduleDate)->format('l') }}</p>
                        </div>  
                    </div>
                @endforeach
            </div>

            <div class="theater__nav">
                @for ($i = 0; $i < 1; $i++)
                    <div class="page" id="page{{ $i }}">
                        @for ($j = 0; $j < sizeof($theater); $j++)
                            <div class="theater">
                                <div class="theater-body">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="ic:round-theaters">
                                            <path id="Vector" d="M20.0556 5.11111V6.22222H17.8333V5.11111C17.8333 4.5 17.3333 4 16.7222 4H10.0556C9.44444 4 8.94444 4.5 8.94444 5.11111V6.22222H6.72222V5.11111C6.72222 4.5 6.22222 4 5.61111 4C5 4 4.5 4.5 4.5 5.11111V22.8889C4.5 23.5 5 24 5.61111 24C6.22222 24 6.72222 23.5 6.72222 22.8889V21.7778H8.94444V22.8889C8.94444 23.5 9.44444 24 10.0556 24H16.7222C17.3333 24 17.8333 23.5 17.8333 22.8889V21.7778H20.0556V22.8889C20.0556 23.5 20.5556 24 21.1667 24C21.7778 24 22.2778 23.5 22.2778 22.8889V5.11111C22.2778 4.5 21.7778 4 21.1667 4C20.5556 4 20.0556 4.5 20.0556 5.11111ZM8.94444 19.5556H6.72222V17.3333H8.94444V19.5556ZM8.94444 15.1111H6.72222V12.8889H8.94444V15.1111ZM8.94444 10.6667H6.72222V8.44444H8.94444V10.6667ZM20.0556 19.5556H17.8333V17.3333H20.0556V19.5556ZM20.0556 15.1111H17.8333V12.8889H20.0556V15.1111ZM20.0556 10.6667H17.8333V8.44444H20.0556V10.6667Z" fill="#E0E0E0"/>
                                        </g>
                                    </svg>
                                    <h2 class="theater__name">Theater Name {{$i}} Nov</h2>
                                </div>
                                <p class="theater__address">theater address theater address theater address theater address {{$j}}</p>
                                <div class="theater-time">
                                    @for ($k = 0; $k < 1; $k++)
                                        <div class="theater-card" id="theater{{$i}}{{$j}}{{$k}}">
                                            <div class="theater-card-body">
                                                <h1 class="theater-card-title">{{$k}}:00</h2>
                                            </div>
                                        </div>
                                        <script type="application/javascript">
                                            let time{{$i}}{{$j}}{{$k}} = document.getElementById("theater{{$i}}{{$j}}{{$k}}")
                                            time{{$i}}{{$j}}{{$k}}.addEventListener("click", function() {
                                                if(previousTime){
                                                    previousTime.classList.toggle("theater-card-selector");
                                                    document.getElementById("seat__button").classList.toggle("btn-outline-secondary");
                                                    document.getElementById("seat__button").classList.toggle("btn-outline-warning");
                                                }
                                                time{{$i}}{{$j}}{{$k}}.classList.toggle("theater-card-selector");
                                                document.getElementById("seat__button").classList.toggle("btn-outline-secondary");
                                                document.getElementById("seat__button").classList.toggle("btn-outline-warning");
                                                previousTime = time{{$i}}{{$j}}{{$k}}
                                            })
                                        </script>
                                    @endfor
                                </div>
                            </div>
                        @endfor
                    </div>
                @endfor
            </div>

            <button type="submit" class="seat__button btn btn-outline-secondary" id="seat__button">CHOOSE SEAT</button>
        </div>
    </div>

    <script type="application/javascript">
        let previousPage = null;
        let previousDate = null;
        @for ($i = 0; $i < 10; $i++)
            let date{{ $i }} = document.getElementById("schedule{{ $i }}")
            let page{{ $i }} = document.getElementById("page{{ $i }}")
            date{{ $i }}.addEventListener("click", function() {
                if (previousPage) {
                    previousPage.style.display = "none";
                }
                if (previousDate) {
                    previousDate.classList.toggle("selector");
                }
                page{{ $i }}.style.display = "block";
                date{{ $i }}.classList.toggle("selector");
                previousPage = page{{ $i }};
                previousDate = date{{ $i }};
            });
        @endfor

        let firstPage = document.getElementById("page0");
        let firstDate = document.getElementById("schedule0");
        firstPage.style.display = "block";
        firstDate.classList.toggle("selector");
        previousPage = firstPage;
        previousDate = firstDate;
    </script>

@endsection
