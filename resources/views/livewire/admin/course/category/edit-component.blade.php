<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Edit Course</h4>
                <h6>Update your course details</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="update" enctype="multipart/form-data">
                    <div class="row">
                        {{-- Course Title --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Course Title</label>
                                <input type="text" wire:model.lazy="title" class="form-control">
                                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Price --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" wire:model.lazy="price" class="form-control">
                                @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Level --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Level</label>
                                <input type="text" wire:model.lazy="level" class="form-control">
                                @error('level') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select wire:model.lazy="status" class="form-control">
                                    <option value="">Select status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea wire:model.lazy="description" class="form-control" rows="4"></textarea>
                                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Thumbnail --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <input type="file" wire:model="thumbnail" class="form-control">
                                @error('thumbnail') <small class="text-danger">{{ $message }}</small> @enderror

                                {{-- Preview New or Existing Thumbnail --}}
                                @if ($thumbnail)
                                    <img src="{{ $thumbnail->temporaryUrl() }}" width="100" class="mt-2">
                                @elseif ($course->thumbnail)
                                    <img src="{{ asset('storage/' . $course->thumbnail) }}" width="100" class="mt-2">
                                @endif
                            </div>
                        </div>

                        {{-- Submit Button --}}
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary me-2">Update</button>
                            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
