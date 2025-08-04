<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Create Certificate</h4>
                <h6>Issue a new certificate</h6>
            </div>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-6 mb-3">
                        <label for="course_id" class="form-label">Course</label>
                        <select class="form-select" wire:model="course_id" id="course_id">
                            <option value="">Select Course</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                        @error('course_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="certificate_path" class="form-label">Certificate File (optional)</label>
                        <input type="file" class="form-control" wire:model="certificate_path" id="certificate_path">
                        @error('certificate_path') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">Issue Certificate</button>
                        <a href="{{ route('admin.certificates.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
