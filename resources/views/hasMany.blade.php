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
    <h1 class="text-center">Has Many Through</h1>
    @php
    @endphp
    <h2>Get All Project</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Project Name</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($p as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Get Language Based On Project ID</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Project</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($language as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->project->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Get Deployment Based On Project ID</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Language</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deploy as $item)
                @foreach ($item->deployment as $i)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $i->status }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>

</html>
