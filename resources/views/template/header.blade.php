<nav class="navbar navbar-expand-lg bg-body-tertiary pt-0">
    <div class="container-fluid" style="background-color: #1B1919">
        <a class="navbar-brand ps-4" href="{{route('movie')}}"><img src="assets/Logo.png" alt="Logo"
                style="width:157.897px;height: 40px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="background-color: #1B1919">
                <li class="nav-item pe-4 pt-4 pb-4">
                    <a class="nav-link" href="{{route('movie')}}" style="color: #E0E0E0">HOME</a>
                </li>
                <li class="nav-item pe-4 pt-4 pb-4">
                    <a class="nav-link" href="#" style="color: #E0E0E0">BOOKING</a>
                </li>
                <li class="nav-item pe-4 pt-4 pb-4">
                    <a class="nav-link" href="#" style="color: #E0E0E0">NOW SHOWING</a>
                </li>
                <li class="nav-item pe-4 pt-4 pb-4">
                    <a class="nav-link" href="#" style="color: #E0E0E0">UPCOMING</a>
                </li>
                <li class="nav-item pt-4 pb-4 pe-4">
                    <a class="nav-link border border-warning rounded-3" href="{{route('login')}}" style="color: #D58936">
                        LOGIN
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
