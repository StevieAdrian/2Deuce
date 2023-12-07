<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">2Deuce</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <div>
            <h1>Create Booking</h1>
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="/Booking/store" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="UserId" class="form-label">User</label>
                            <select name="UserId" class="form-select">
                                @foreach($user as $us)
                                    <option value="{{ $us->id }}">{{ $us->email}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('UserId'))   
                                <span class="text-danger">{{ $errors->first('UserId') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="ScheduleId" class="form-label">Schedule Id</label>
                            <select name="ScheduleId" class="form-select">
                                @foreach($schedule as $sc)
                                    <option value="{{ $sc->id }}">{{ $sc->id}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('ScheduleId'))   
                                <span class="text-danger">{{ $errors->first('ScheduleId') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="BookingStatusId" class="form-label">Booking Status Id</label>
                            <select name="BookingStatusId" class="form-select">
                                @foreach($bookstat as $bs)
                                    <option value="{{ $bs->id }}">{{ $bs->BookingStatus}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('BookingStatusId'))   
                                <span class="text-danger">{{ $errors->first('BookingStatusId') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
