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
                    <form method="POST" action="/films/store" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="FilmName" class="form-label">Film Name</label>
                            <input type="text" class="form-control" id="FilmName" name="FilmName" value="{{ old('FilmName') }}">
                            @if($errors->has('FilmName'))   
                                <span class="text-danger">{{ $errors->first('FilmName') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="FilmDirector" class="form-label">Film Director</label>
                            <input type="text" class="form-control" id="FilmDirector" name="FilmDirector" value="{{ old('FilmDirector') }}">
                            @if($errors->has('FilmDirector'))   
                                <span class="text-danger">{{ $errors->first('FilmDirector') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="MaturityRating" class="form-label">Maturity Rating</label>
                            <input type="text" class="form-control" id="MaturityRating" name="MaturityRating" value="{{ old('MaturityRating') }}">
                            @if($errors->has('MaturityRating'))   
                                <span class="text-danger">{{ $errors->first('MaturityRating') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="FilmDuration" class="form-label">Film Duration</label>
                            <input type="text" class="form-control" id="FilmDuration" name="FilmDuration" value="{{ old('FilmDuration') }}">
                            @if($errors->has('FilmDuration'))   
                                <span class="text-danger">{{ $errors->first('FilmDuration') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="FilmStatusId" class="form-label">Film Status Id</label>
                            <input type="text" class="form-control" id="FilmStatusId" name="FilmStatusId" value="{{ old('FilmStatusId') }}">
                            @if($errors->has('FilmStatusId'))   
                                <span class="text-danger">{{ $errors->first('FilmStatusId') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="FilmSynopsis" class="form-label">Film Synopsis</label>
                            <textarea class="form-control" id="FilmSynopsis" rows="4" name="FilmSynopsis" value="{{ old('FilmSynopsis') }}"></textarea>
                            @if($errors->has('FilmSynopsis'))   
                                <span class="text-danger">{{ $errors->first('FilmSynopsis') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="FilmWriter" class="form-label">Film Writer</label>
                            <input type="text" class="form-control" id="FilmWriter" name="FilmWriter" value="{{ old('FilmWriter') }}">
                            @if($errors->has('FilmWriter'))   
                                <span class="text-danger">{{ $errors->first('FilmWriter') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="FilmPoster" class="form-label">Film Poster</label>
                            <input type="file" name="FilmPoster" id="FilmPoster" class="form-control" value="{{ old('FilmPoster') }}"/>  
                            @if($errors->has('FilmPoster'))   
                                <span class="text-danger">{{ $errors->first('FilmPoster') }}</span>
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