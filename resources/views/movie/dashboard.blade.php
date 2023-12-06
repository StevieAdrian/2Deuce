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
                        <div class="ps-4 pt-3 orange">
                            <img src="assets/users.png" alt="users">
                            Users
                            <hr class="w-80">
                        </div>
                        <div class="ps-4 pt-2">
                            <img src="assets/book1.png" alt="book1">
                            Booking
                            <hr class="w-80">
                        </div>
                        <div class="ps-4 pt-2">
                            <img src="assets/theaters1.png" alt="theaters1">
                            Theaters
                            <hr class="w-80">
                        </div>
                        <div class="ps-4 pt-2">
                            <img src="assets/films1.png" alt="films1">
                            Films
                        </div>
                    </div>

                    <div class="flex-fill rounded-end border right-box ps-3 pt-3" style="font-size: 36px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start">Users</div>
                            <div class="pe-4 pt-3" style="font-size: 14px;">
                                <div class="border rounded-3 px-3 py-2 d-flex align-items-center justify-content-end">
                                    <img src="assets/plus.png" alt="plus" style="width: 20px; height: 20px;">
                                    <span class="ms-2">Add User</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3 d-flex justify-content-start" style="font-size: 20px">
                            <div class="table-responsive w-90">
                                <table class="table table-striped">
                                    <thead>
                                        <hr class="hr-set">
                                        <tr>
                                            <th scope="col">User ID</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#0001</td>
                                            <td>John Doe</td>
                                            <td>JohnDoe@gmail.com</td>
                                            <td>+6293021235</td>
                                            <td>Active</td>
                                            <td>
                                                <img src="assets/pen.png" alt="pen">
                                                <img src="assets/trash.png" alt="trash">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#0002</td>
                                            <td>John Doe</td>
                                            <td>JohnDoe@gmail.com</td>
                                            <td>+6293021235</td>
                                            <td>Active</td>
                                            <td>
                                                <img src="assets/pen.png" alt="pen">
                                                <img src="assets/trash.png" alt="trash">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#0003</td>
                                            <td>John Doe</td>
                                            <td>JohnDoe@gmail.com</td>
                                            <td>+6293021235</td>
                                            <td>Active</td>
                                            <td>
                                                <img src="assets/pen.png" alt="pen">
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
