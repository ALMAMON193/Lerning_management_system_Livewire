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
                            <th>Category</th>
                            <th>Category Slug</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox" value="{{ $category->id }}">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->created_at ? $category->created_at->format('Y-m-d') : 'Unknown' }}</td>
                                <td>
                                    <a class="me-3" href="" title="View">
                                        <img src="{{ asset('backend/img/icons/eye.svg') }}" alt="view">
                                    </a>
                                    <a class="me-3" href="" title="Edit">
                                        <img src="{{ asset('backend/img/icons/edit.svg') }}" alt="edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);" onclick="confirmDelete({{ $category->id }})" title="Delete">
                                        <img src="{{ asset('backend/img/icons/delete.svg') }}" alt="delete">
                                    </a>
                                    <form id="delete-form-{{ $category->id }}" action="" method="POST" style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @if($categories->isEmpty())
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
