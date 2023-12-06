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
                @foreach($schedule   as $schedule)
                    <tr>
                        <td>{{ $schedule->id }}</td>
                        <td>{{ $schedule->ScheduleDate }}</td>
                        <td>{{ $schedule->ScheduleStart }}</td>
                        <td>{{ $schedule->ScheduleEnd }}</td>
                        <td>{{ $schedule->film->title }}</td>
                        <td>{{ $schedule->studio->name }}</td>
                        <td>
                            <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
