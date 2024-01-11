<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1 class="text-center">One To Many</h1>
    @php
        echo '<pre>';
        // print_r($customers);
        echo '</pre>';
    @endphp
    <h2>Get Customer By Mobile Model</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Model Name</th>
                <th scope="col">Customer</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($mobile as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->customer->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Get Mobile By Customer</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Customer</th>
                <th scope="col">Model Name</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($customers as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->mobile_models->model }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
