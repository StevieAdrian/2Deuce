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

        {{-- @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif --}}

    <div class="container">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="/theaters/store" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="TheaterID" class="form-label">Theater ID</label>
                            <input type="text" class="form-control" id="TheaterID" name="TheaterID" value="{{ old('TheaterID') }}">
                            @if($errors->has('TheaterID'))
                                <span class="text-danger">{{ $errors->first('TheaterID') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="Name" name="Name" value="{{ old('Name') }}">
                            @if($errors->has('Name'))
                                <span class="text-danger">{{ $errors->first('Name') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="NumberOfStudios" class="form-label">Number of Studios</label>
                            <input type="text" class="form-control" id="NumberOfStudios" name="NumberOfStudios" value="{{ old('NumberOfStudios') }}">
                            @if($errors->has('NumberOfStudios'))
                                <span class="text-danger">{{ $errors->first('NumberOfStudios') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="Address" name="Address" value="{{ old('Address') }}">
                            @if($errors->has('Address'))
                                <span class="text-danger">{{ $errors->first('Address') }}</span>
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
