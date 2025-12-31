<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <!-- BOX / CARD -->
        <div class="card shadow-sm">
            <!-- HEADER -->
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Student Page</h5>
                <form method="GET" action="{{ route('students.index') }}" class="d-flex">
                    <input type="text"
                        name="search"
                        value="{{ request('search') }}"
                        class="form-control form-control-sm"
                        placeholder="Search name/email">

                    <button type="submit" class="btn btn-secondary btn-sm ms-2">
                        Search
                    </button>
                </form>


                <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm">+ Create</a>
            </div>

            <!-- BODY -->
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>Phone</th>

                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->phone }}</td>

                            <td class="text-end">
                                <a href="{{route('students.edit', $student->id)}}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{route('students.destroy', $student->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                       {{ $students->appends(request()->query())->links() }}


                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>