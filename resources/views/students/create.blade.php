<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Form Box -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Create Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        @include('students.partials.form')

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>