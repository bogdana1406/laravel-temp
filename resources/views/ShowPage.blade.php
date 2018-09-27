<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Cars Example</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
<header>

    <div class="hero container">
        <div class="hero-copy">
            <h1>Demo</h1>
            <p>All Cars</p>
        </div>

    </div> <!-- end hero -->
</header>
<div class="featured-section">
    <div class="container">
        <h1 class="text-center">Cars</h1>

        <div class="cars text-center">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>price</th>
                        <th>seats</th>
                        <th>doors</th>
                        <th>transmission_types</th>
                        <th>year</th>
                        <th>engine</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                    <tr>
                        <td>{{$car->brand->name}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->prise}}</td>
                        <td>{{$car->seats}}</td>
                        <td>{{$car->doors}}</td>
                        <td>{{$car->transmission_types}}</td>
                        <td>{{$car->year}}</td>
                        <td>{{$car->engine->name}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div> <!-- end cars -->
        <div class="text-center button-container">
            <a href="#" class="button">View more products</a>
        </div>
    </div> <!-- end container -->
</div> <!-- end featured-section -->


</body>
</html>