@extends('templateadmin.app')
@section('content')
    <div class="full-black">
        <div class="container">
            <div class="d-flex justify-content-start align-items-center">
                <div class="col-9 ps-3 admin-dash">
                    <a href="#"><img src="assets/backbutton.png" alt="backbutton" class="pb-2" width="30.049px"
                            height="24px"></a>
                    Admin Dashboard
                </div>
            </div>

            <div class="container">
                <div class="d-flex">
                    <div class="flex-fill rounded-start border left-box">
                        <a href="./dashboard">
                            <div class="ps-4 pt-4">
                                <img src="assets/users1.png" alt="users">
                                Users
                                <hr class="w-80">
                            </div>
                        </a>
                        <a href="./dashboardbook">
                            <div class="ps-4 pt-2">
                                <img src="assets/book1.png" alt="book1">
                                Booking
                                <hr class="w-80">
                            </div>
                        </a>
                        <a href="./dashboardtheaters">
                            <div class="ps-4 pt-2">
                                <img src="assets/theaters1.png" alt="theaters1">
                                Theaters
                                <hr class="w-80">
                            </div>
                        </a>
                        <a href="./dashboardfilms">
                            <div class="ps-4 pt-2 orange">
                                <img src="assets/films.png" alt="films1">
                                Films
                            </div>
                        </a>
                    </div>

                    <div class="flex-fill rounded-end border right-box ps-3 pt-3" style="font-size: 36px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start">Films</div>
                            <div class="pe-4 pt-3" style="font-size: 14px;">
                                <div class="border rounded-3 px-3 py-2 d-flex align-items-center justify-content-end">
                                    <img src="assets/plus.png" alt="plus" style="width: 20px; height: 20px;">
                                    <span class="ms-2">Add Film</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3 d-flex justify-content-start" style="font-size: 20px">
                            <div class="table-responsive w-90">
                                <table class="table table-striped">
                                    <thead>
                                        <hr class="hr-set">
                                        <tr>
                                            <th scope="col">FilmID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">AgeRating</th>
                                            <th scope="col">Film Poster</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A13948</td>
                                            <td>Wish</td>
                                            <td>100Minutes</td>
                                            <td>R13+</td>
                                            <td>Wish Poster</td>
                                            <td>
                                                <img src="assets/3dot.png" alt="3dot">
                                                <img src="assets/pen.png" alt="pen">
                                                <img src="assets/timer.png" alt="timer">
                                                <img src="assets/trash.png" alt="trash">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A12464</td>
                                            <td>Hunger Games</td>
                                            <td>120Minutes</td>
                                            <td>R17+</td>
                                            <td>Hunger Games Poster</td>
                                            <td>
                                                <img src="assets/3dot.png" alt="3dot">
                                                <img src="assets/pen.png" alt="pen">
                                                <img src="assets/timer.png" alt="timer">
                                                <img src="assets/trash.png" alt="trash">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A13156</td>
                                            <td>Willy Wonka</td>
                                            <td>90Minutes</td>
                                            <td>R7+</td>
                                            <td>Willy Wonka Poster</td>
                                            <td>
                                                <img src="assets/3dot.png" alt="3dot">
                                                <img src="assets/pen.png" alt="pen">
                                                <img src="assets/timer.png" alt="timer">
                                                <img src="assets/trash.png" alt="trash">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
