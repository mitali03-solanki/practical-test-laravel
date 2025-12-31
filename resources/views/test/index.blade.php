<!-- <?php
        echo "This is the test index view.";
        ?> -->


<!-- resources/views/items/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Index Page</title>
    <p>Welcome to the Test Index Page. This page serves as the main entry point for managing tests.</p>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <!-- BOX / CARD -->
        <div class="card shadow-sm">
            <!-- HEADER -->
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Test Index Page</h5>
                <a href="{{ route('tests.create') }}" class="btn btn-primary btn-sm">+ Create</a>
            </div>

            <!-- BODY -->
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Age</th>
                            
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tests as $test)
                        <tr>
                            <td>{{ $test->id }}</td>
                            <td>{{ $test->name }}</td>
                            <td>{{ $test->email }}</td>
                            <td>{{ $test->description }}</td>
                            <td>{{ $test->age }}</td>

                            <td class="text-end">
                                <a href="{{route('tests.edit', $test->id)}}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{route('tests.destroy', $test->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>