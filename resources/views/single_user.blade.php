<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">User</h1>
        <div class="card text-center">
            <div class="card-header">
                {{-- {{ dd($user) }} --}}
                {{ $user->name }}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $user->name }}</h5>
              <p class="card-text">{{ $user->email }}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
    </div>
</body>
</html>