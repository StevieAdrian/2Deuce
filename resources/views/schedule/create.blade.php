<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Schedule</title>
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
        <div>
            <h1>Create Schedule</h1>
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="{{ route('schedule.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="ScheduleDate" class="form-label">Schedule Date</label>
                            <input type="date" class="form-control" id="ScheduleDate" name="ScheduleDate" required>
                        </div>

                        <div class="mb-3">
                            <label for="ScheduleStart" class="form-label">Schedule Start</label>
                            <input type="time" class="form-control" id="ScheduleStart" name="ScheduleStart" required>
                        </div>

                        <div class="mb-3">
                            <label for="ScheduleEnd" class="form-label">Schedule End</label>
                            <input type="time" class="form-control" id="ScheduleEnd" name="ScheduleEnd" required>
                        </div>

                        <div class="mb-3">
                            <label for="FilmId" class="form-label">Film</label>
                            <select class="form-control" id="FilmId" name="FilmId" required>
                                @foreach($films as $film)
                                    <option value="{{ $film->id }}">{{ $film->FilmName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="StudioId" class="form-label">Studio</label>
                            <select class="form-control" id="StudioId" name="StudioId" required>
                                @foreach($studio as $studio)
                                    <option value="{{ $studio->id }}">{{ $studio->StudioName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Schedule</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
