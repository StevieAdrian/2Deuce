@extends('template.app')
@section('content')
    <div class="container pb-2">
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="custom-border border p-4 text-center">
                    <div class="text-center ">
                        <img src="assets/tick.png" alt="tick" class="mb-3 pt-5">
                    </div>
                    <div class="payment-font mt-2">
                        Payment Succesfully!
                    </div>
                    <div class="payment-font1 pt-2 pb-2">Your receipt has been sent to your email</div>
                    <div class="nav-item mt-4">
                        <a class="nav-link border border-warning rounded-3 d-block px-4 py-2" href="#"
                            style="color: #D58936">
                            HOME
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    @if (false)
    @endif
    @if (true)
    @endif
@endsection
