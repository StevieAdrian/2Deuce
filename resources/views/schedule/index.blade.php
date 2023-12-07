<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedule List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Your Brand</a>
            </li>
          </ul>
        </div>
    </nav>

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="{{ route('schedule.create') }}" class="btn btn-dark mt-2">New Schedule</a>
        </div>
        <h1>Schedule List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Schedule Date</th>
                    <th>Schedule Start</th>
                    <th>Schedule End</th>
                    <th>Film</th>
                    <th>Studio</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedule as $schedule)
                    <tr>
                        <td>{{ $schedule->id }}</td>
                        <td>{{ $schedule->ScheduleDate }}</td>
                        <td>{{ $schedule->ScheduleStart }}</td>
                        <td>{{ $schedule->ScheduleEnd }}</td>
                        <td>{{ $schedule->films->FilmName }}</td>
                        <td>{{ $schedule->studio->StudioName }}</td>
                        <td>
                                <a href="Schedule/{{ $schedule->id }}/edit" class="btn btn-dark  btn-sm">Edit</a>
                                <a href="Schedule/{{ $schedule->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
