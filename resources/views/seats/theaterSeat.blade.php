<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/theaterSeat.css')}}">
</head>
<body>
    <div class="main">
        <div class="titleInfo">
            <div class = "theaterInfo">Theater Name | </div>
            <div class = "dateInfo">Thursday, 30 November</div>
        </div>

        <div class="row" name="SeatName">
            @for($i = 1; $i <= 17; $i++)
                <div class="seat">A{{$i}}</div>
                {{-- @php
                    $seat = 'A'.$i;
                @endphp --}}
                {{-- {{$taken->SeatName}} --}}
                {{-- @if(isset($taken) && $taken === $seat)
                    <div class="seatTaken">{{ $seat }}</div>
                @else
                    <div class="seat">{{ $seat }}</div>
                @endif --}}
            @endfor
        </div>
        <div class="row">
            @for ($i = 1; $i <= 17; $i++)
                <div class="seat">B{{$i}}</div>
            @endfor
        </div>
        <div class="row">
            @for ($i = 1; $i <= 17; $i++)
                <div class="seat">C{{$i}}</div>
            @endfor
        </div>
        <div class="row">
            @for($i = 1; $i <= 17; $i++)
                <div class="seat">D{{$i}}</div>
            @endfor
        </div>
        <div class="row">
            @for ($i = 1; $i <= 17; $i++)
                <div class="seat">E{{$i}}</div>
            @endfor
        </div>
        <div class="row">
            @for ($i = 1; $i <= 17; $i++)
                <div class="seat">F{{$i}}</div>
            @endfor
        </div>
        <div class="row">
            @for ($i = 1; $i <= 17; $i++)
                <div class="seat">G{{$i}}</div>
            @endfor
        </div>
        <div class="row">
            @for ($i = 1; $i <= 17; $i++)
                <div class="seat">H{{$i}}</div>
            @endfor
        </div>
        <div class="row">
            <div class="lastSeat"></div>
            @for ($i = 1; $i <= 15; $i++)
                <div class="seat">I{{$i}}</div>
            @endfor
            <div class="lastSeat"></div>
        </div>
        <div class="screen">Screen</div>
    </div>

    <div class="line"></div>
    <div class="">
        <form action="{{route('save.seats')}}" method="POST" id="Seat">
            @csrf
            <div class="affirm"><img src="/assets/seat.png" id="seatImg">Seat Chosen</div>
            <div class="taken"> </div>
            <div class="totalAffirm"><img src="/assets/subTotal.png" id="subTotal">Sub Total:</div>
            <input name="SeatName" style="display:none" />
            <div class="taken"><span id="price"></span></div>
            <input name="SubTotal" style="display:none" />
            {{-- <a class="proc" href="{{route('movie')}}"> --}}
                <button class="proc">
                    CHOOSE SEAT
                </button>
            {{-- </a> --}}
        </form>
    </div>
    <script src="{{ asset('js/seat.js') }}"></script>

</body>
</html>
