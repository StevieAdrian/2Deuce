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
        <div class="container">
            <div class="d-flex justify-content-end">
                <a href="{{ route('films.create') }}" class="btn btn-dark mt-2">New Film</a>
            </div>


            <table class="table table-hover mt-2">
                <thead>
                  <tr>
                    <th>Film Id</th>
                    <th>Film Name</th>
                    <th>Film Director</th>
                    <th>Maturity Rating</th>
                    <th>Film Duration</th>
                    <th>Film Status</th>
                    <th>Film Synopsis</th>
                    <th>Film Writer</th>
                    <th>Film Poster</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($films as $ms_film)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $ms_film->FilmName }}</td>
                    <td>{{ $ms_film->FilmDirector }}</td>
                    <td>{{ $ms_film->maturityRating->MaturityRating }}</td>
                    <td>{{ $ms_film->FilmDuration }}</td>
                    <td>{{ $ms_film->filmStatus->Filmstatus }}</td>
                    <td>{{ $ms_film->FilmSynopsis }}</td>
                    <td>{{ $ms_film->FilmWriter }}</td>
                    <td>
                        <img src="{{ asset('poster/'.$ms_film->FilmPoster) }}" width="100" height="100">
                    </td>
                    <td>
                        <a href="films/{{ $ms_film->id }}/edit" class="btn btn-dark  btn-sm">Edit</a>
                        <a href="films/{{ $ms_film->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table> 




        </div>  
    </body>
    </html>