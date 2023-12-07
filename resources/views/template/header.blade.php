<nav class="navbar navbar-expand-lg bg-body-tertiary pt-0">
    <div class="container-fluid pallete-maroon" style="background-color: #470000">
        <a class="navbar-brand ps-4" href="{{ route('movie') }}"><img src="/assets/Logo.png" alt="Logo"
                style="width:157.897px;height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="background-color: #470000">
                <li class="nav-item pe-4 pt-4 pb-4">
                    <a class="nav-link white" href="{{ route('movie') }}">HOME</a>
                </li>
                <li class="nav-item pe-4 pt-4 pb-4">
                    <a class="nav-link white" href="#">BOOKING</a>
                </li>
                <li class="nav-item pe-4 pt-4 pb-4">
                    <a class="nav-link white" href="#" onclick="scrollToSection('now-showing')">NOW SHOWING</a>
                </li>
                <li class="nav-item pe-4 pt-4 pb-4">
                    <a class="nav-link white" href="#" onclick="scrollToSection('upcoming')">UPCOMING</a>
                </li>
                <li class="nav-item pt-4 pb-4 pe-4">
                    <a class="nav-link border b-orange rounded-3 orange" href="{{ route('login') }}">
                        LOGIN
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
