<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Form Box -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Edit Test</h5>
                </div>

                

                <div class="card-body">
                    <form action="{{ route('tests.update', $test->id) }}"
                        
                        enctype="multipart/form-data">



                        <!-- Form fields -->
                        @csrf
                        @method('PUT')
                        @include('test.partials.form')

                    </form>
                        <!-- Submit button -->
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>

                    
                </div>
            </div>

        </div>
    </div>
</div>