@extends('template.app')
@section('content')
    <!--=============== BOOTSTRAP ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- <link rel="stylesheet" href="resources/css/styles.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}"> -->

    <div class="login">

        <form action="{{ route('loginProcess') }}" class="login__form" method="POST">
            @csrf
            @method('POST')
            <h1 class="login__title">Login</h1>
            <h2 class="login__subtitle">Welcome back! Let’s get you logged in.</h2>

            <div class="login__content">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Username</label>
                    <input type="text" class="login__field form-control" id="formGroupExampleInput"
                        placeholder="Enter your username here">
                </div>

                <div class="mb-3">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="login__field form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Enter your password here">
                </div>
            </div>

            <div class="login__check">
                <div class="login-check form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="remember-label form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>

                <a href="#" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button btn btn-outline-warning">Login</button>

            <p class="login__register">
                Don't have an account yet?
                <a class="register__link" href="{{ route('register') }}">Sign Up</a>
            </p>
        </form>
    </div>

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
