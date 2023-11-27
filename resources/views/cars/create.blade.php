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
        <h1>Yangi mashina yaratish</h1>
        <form action="{{ route('cars.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Mashinani nomi</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mashina narxi</label>
              <input type="text" name="price" class="form-control" id="exampleInputPassword1" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Ishlab chiqarilgan yili</label>
              <input type="number" name="year" class="form-control" id="exampleInputPassword1" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mashina rangi</label>
              <input type="text" name="color" class="form-control" id="exampleInputPassword1" >
            </div>
            <button type="submit" class="btn btn-primary mt-3" >Saqlash</button>
          </form>
    </div>
</body>

</html>
