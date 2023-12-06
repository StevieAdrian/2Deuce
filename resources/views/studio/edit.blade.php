<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
      
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif

    <div class="container">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-muted">Film Edit #{{ $theater->TheaterName }}</h3>
                    <form method="POST" action="/Studio/{{ $studio->id }}/update" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="StudioName" class="form-label">Studio Name</label>
                            <input type="text" class="form-control" id="StudioName" name="StudioName" value="{{ old('StudioName') }}">
                            @if($errors->has('StudioName'))   
                                <span class="text-danger">{{ $errors->first('StudioName') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="TheaterID" class="form-label">Theater</label>
                            <select name="TheaterID" class="custom-select">
                                @foreach($theater as $teater)
                                    <option value="{{ $teater->id }}">{{ $teater->TheaterName}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('TheaterID'))   
                                <span class="text-danger">{{ $errors->first('TheaterID') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>