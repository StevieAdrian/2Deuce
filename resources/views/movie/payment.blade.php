@extends('template.app')
@section('content')
    <!--=============== BOOTSTRAP ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
    
    <div class="container">
        <h1 class="title">Review Order</h1>
        <div class="movie">
            <img src="assets/upcoming1.png" alt="upcoming1" class="img-fluid movie__img">

            <div class="movie__info">
                <div class="mt-3 movie__title">The Boy and The Heron</div>
                
                <div style="display: flex; align-items: center; margin-top: 10px;">
                    <img src="assets/timelogo.png" alt="timelogo" style="width: 20px; height:21px;">
                    <div class="ml-2" style="margin-left: 5px; font-size:20px;">124m</div>
                    <img style="width: 50px; height:30px" class="ps-2" src="assets/r13.jpg" alt="r13">
                </div>

                <div class="mt-3 theater">Theater Name, Studio Name</div>

                <div class="mt-3 date">Thursday, 30 Nov 2023, 10:50</div>

                <div class="seat">
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="ic:round-event-seat">
                    <path id="Vector" d="M4.13375 14C4.68708 14 5.13375 13.5533 5.13375 13V12H11.8004V13C11.8004 13.5533 12.2471 14 12.8004 14C13.3537 14 13.8004 13.5533 13.8004 13V11.3333C13.8004 10.6 13.2004 10 12.4671 10H4.46708C3.73375 10 3.13375 10.6 3.13375 11.3333V13C3.13375 13.5533 3.58041 14 4.13375 14ZM13.8004 6.66667H14.4671C14.8337 6.66667 15.1337 6.96667 15.1337 7.33333V8C15.1337 8.36667 14.8337 8.66667 14.4671 8.66667H13.8004C13.4337 8.66667 13.1337 8.36667 13.1337 8V7.33333C13.1337 6.96667 13.4337 6.66667 13.8004 6.66667ZM2.46708 6.66667H3.13375C3.50041 6.66667 3.80041 6.96667 3.80041 7.33333V8C3.80041 8.36667 3.50041 8.66667 3.13375 8.66667H2.46708C2.10042 8.66667 1.80042 8.36667 1.80042 8V7.33333C1.80042 6.96667 2.10042 6.66667 2.46708 6.66667ZM11.8004 8.66667H5.13375V3.33333C5.13375 2.6 5.73375 2 6.46708 2H10.4671C11.2004 2 11.8004 2.6 11.8004 3.33333V8.66667Z" fill="#E0E0E0"/>
                    </g>
                    </svg>

                    <h1 class="seat__title">Seats :</h1>
                </div>

                <div class="seat__info">
                    @for ($i = 0; $i < 15; $i++)
                        <div class="seat__card" id="schedule{{ $i }}">
                            <div class="seat__card__body">
                                <h1 class="seat__card__title">A{{$i}}</h1>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>


        <div class="info">
            <div class="label">Ticket:</div>
            <div class="price">Rp. xxx.xxx,xx</div> 
        </div>

        <div class="info">
            <div class="label">Admin Fees:</div>
            <div class="price">Rp. x.xxx,xx</div> 
        </div>

        <div class="info total-info">
            <div class="label total-label">Payment Due:</div>
            <div class="price total-price">Rp. xxx.xxx,xx</div> 
        </div>

        <button type="submit" class="checkout__button btn btn-outline-warning" id="checkout__button" data-bs-toggle="modal" data-bs-target="#exampleModal">CHECKOUT</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
           <div class="modal_content">
                <div class="modal_image">
                    <img src="assets/tick.png" alt="tick" class="mb-3 pt-5">
                </div>
                
                <div class="modal_title payment-font mt-2">
                    Payment Succesfully!
                </div>
                
                <div class="modal_text payment-font1 pt-2 pb-2">Your receipt has been sent to your email</div>
                
                <div class="modal_button nav-item mt-4">
                    <a class="nav-link border border-warning rounded-3 d-block px-4 py-2 modal_button_text" href="#"style="color: #D58936">
                        HOME
                    </a>
                </div>
            </div>
    </div>
    </div>
    
    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection
