<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Form Box -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Edit Data</h5>
                </div>
                <div class="card-body">
                    <form x-ref="StudentForm" action="{{ route('students.update', $student->id) }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('students.partials.form')
                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                    <div>
                        <form onsubmit="return confirm('Are you sure want to delete?');" method="post"
                            action="{{ route('students.destroy', $student->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>