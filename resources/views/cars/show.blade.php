<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Mashina haqida</h1>
        <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Mashina nomi: {{ $car->name }}</h5>
              <h6 class="card-title">Narxi: ${{ $car->price }}</h6>
              <p class="card-text">Ishlab chiqarilgan yili: {{ $car->year }}</p>
              <p class="card-text">Rangi: {{ $car->color }}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-body-secondary">
              2 days ago
            </div>
          </div>
    </div>
</body>

</html>