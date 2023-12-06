<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Schedule</title>
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

    <div class="container">
        <h1>Edit Schedule</h1>
        <form method="POST" action="{{ route('schedule.update', $schedule->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="ScheduleDate" class="form-label">Schedule Date</label>
                <input type="date" class="form-control" id="ScheduleDate" name="ScheduleDate" value="{{ $schedule->ScheduleDate }}" required>
            </div>

            <div class="mb-3">
                <label for="ScheduleStart" class="form-label">Schedule Start</label>
                <input type="time" class="form-control" id="ScheduleStart" name="ScheduleStart" value="{{ $schedule->ScheduleStart }}" required>
            </div>

            <div class="mb-3">
                <label for="ScheduleEnd" class="form-label">Schedule End</label>
                <input type="time" class="form-control" id="ScheduleEnd" name="ScheduleEnd" value="{{ $schedule->ScheduleEnd }}" required>
            </div>

            <div class="mb-3">
                <label for="FilmId" class="form-label">Film</label>
                <select class="form-control" id="FilmId" name="FilmId" required>
                    @foreach($films as $film)
                        <option value="{{ $film->id }}" {{ $film->id == $schedule->FilmId ? 'selected' : '' }}>{{ $film->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="StudioId" class="form-label">Studio</label>
                <select class="form-control" id="StudioId" name="StudioId" required>
                    @foreach($studios as $studio)
                        <option value="{{ $studio->id }}" {{ $studio->id == $schedule->StudioId ? 'selected' : '' }}>{{ $studio->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Schedule</button>
        </form>
    </div>
</body>
</html>
