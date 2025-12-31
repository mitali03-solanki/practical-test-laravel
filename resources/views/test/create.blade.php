<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Form Box -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Create Test</h5>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('tests.store') }}"
                        method="POST"
                        enctype="multipart/form-data">



                        <!-- Form fields -->
                        @csrf
                        @include('test.partials.form')

                        <!-- Submit button -->
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>