@extends('template.app')
@section('content')
    <!--=============== BOOTSTRAP ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <!-- <link rel="stylesheet" href="resources/css/styles.css"> -->
    {{-- <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}"> --}}

    <div class="row justify-content-center mt-5">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="register">
            <form class="register__form" action="{{ route('registerProcess') }}" method="POST">
                @csrf
                <h1 class="register__title">Register</h1>
                <h2 class="register__subtitle">Welcome to Deuce! Let’s get started.</h2>

                <div class="register__content">
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" name="name" class="login__field form-control" id="name" placeholder="Enter your username here">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email"  placeholder="Enter your email here">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="login__field form-control" placeholder="Enter your password here">
                    </div>

                    <div class="mb-3">
                        <label for="inputPassword5" class="form-label">Confirm Password</label>
                        <input type="password" id="inputPassword5" class="login__field form-control" aria-describedby="passwordHelpBlock" placeholder="Enter your password here">
                    </div>
                </div>

                <div class="register__button">
                    <button type="submit" class="register_button_content btn btn-outline-warning">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection
