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
        <h1>Barcha mashinalar ro'yxati</h1>
        <a href="{{ route('cars.create') }}" class="btn btn-primary">Yangi mashina qo'shish</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Car name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Year</th>
                    <th scope="col">Color</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cars as $car)
                    
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->name }}</td>
                        <td>${{ $car->price }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->color }}</td>
                        <td>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-primary">Show</a>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <form style="display: inline-block" method="POST" action="{{ route('cars.destroy', $car->id) }}">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>

                @endforeach    

            </tbody>
        </table>
    </div>
</body>

</html>
