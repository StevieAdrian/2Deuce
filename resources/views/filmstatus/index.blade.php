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
            <a href="FilmStatus/create" class="btn btn-dark mt-2">New Film Status</a>
        </div>


        <table class="table table-hover mt-2">
            <thead>
              <tr>
                <th>Film Status Id</th>
                <th>Film Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($filmstatus as $ms_filmstatus)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $ms_filmstatus->Filmstatus }}</td>
                <td>
                    <a href="FilmStatus/{{ $ms_filmstatus->id }}/edit" class="btn btn-dark  btn-sm">Edit</a>
                    <a href="FilmStatus/{{ $ms_filmstatus->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table> 




    </div>  
</body>
</html>