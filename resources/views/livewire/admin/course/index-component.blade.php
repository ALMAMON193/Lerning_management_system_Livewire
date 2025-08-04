<div class="page-wrapper">
    <div class="content">
        <div class="page-header d-flex justify-content-between align-items-center">
            <div class="page-title">
                <h4>Category List</h4>
                <h6>Manage your categories</h6>
            </div>
            <div class="page-btn">
                <a wire:navigate href="{{ route('admin.categories.create') }}" class="btn btn-added">
                    <img src="{{ asset('backend/img/icons/plus.svg') }}" alt="img" class="me-1">Add New Category
                </a>
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
                <div class="table-top d-flex justify-content-between align-items-center mb-3">
                    <div class="search-set">
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{ asset('backend/img/icons/search-white.svg') }}" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ asset('backend/img/icons/pdf.svg') }}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ asset('backend/img/icons/excel.svg') }}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ asset('backend/img/icons/printer.svg') }}" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Instructor</th>
                            <th>Category</th>
                            <th>Level</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox" value="{{ $course->id }}">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>
                                    @if($course->thumbnail)
                                        <img src="{{ asset('storage/' . $course->thumbnail) }}" alt="Thumbnail" width="50" />
                                    @else
                                        <img src="{{ asset('/backend/img/product/noimage.png') }}" alt="Thumbnail" width="50" />
                                    @endif
                                </td>

                                <td>{{ $course->title }}</td>
                                <td>{{ $course->instructor?->name ?? 'N/A' }}</td>
                                <td>{{ $course->category?->name ?? 'N/A' }}</td>
                                <td>{{ $course->level }}</td>
                                <td>{{ $course->price }}</td>
                                <td>{{ $course->status }}</td>
                                <td>{{ $course->created_at?->format('Y-m-d') ?? 'Unknown' }}</td>
                                <td>
                                    <a href="" title="View" class="me-3">
                                        <img src="{{ asset('backend/img/icons/eye.svg') }}" alt="view">
                                    </a>
                                    <a wire:navigate href="{{ route('admin.courses.edit', $course->id) }}" title="Edit" class="me-3">
                                        <img src="{{ asset('backend/img/icons/edit.svg') }}" alt="edit">
                                    </a>
                                    <a href="javascript:void(0);" wire:click="confirmDelete({{ $course->id }})" title="Delete">
                                        <img src="{{ asset('backend/img/icons/delete.svg') }}" alt="delete">
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        @if($courses->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">No categories found.</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
