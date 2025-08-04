<div class="page-wrapper">
    <div class="content">
        <div class="page-header d-flex justify-content-between align-items-center mb-3">
            <div class="page-title">
                <h4>Certificates</h4>
                <h6>Manage issued certificates</h6>
            </div>
        </div>

        {{-- Flash Messages --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Course</th>
                            <th>Certificate Code</th>
                            <th>Issued At</th>
                            <th>Download</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($certificates as $index => $certificate)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $certificate->course->title ?? 'N/A' }}</td>
                                <td>{{ $certificate->certificate_code }}</td>
                                <td>{{ $certificate->issued_at->format('Y-m-d') }}</td>
                                <td>
                                    @if ($certificate->certificate_path)
                                        <a href="{{ asset('storage/' . $certificate->certificate_path) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                            Download
                                        </a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript:void(0);" wire:click="delete({{ $certificate->id }})" class="btn btn-sm btn-outline-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No certificates found.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
