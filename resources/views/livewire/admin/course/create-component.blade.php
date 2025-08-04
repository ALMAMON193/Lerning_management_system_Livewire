<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Create Course</h4>
                <h6>Add a new course</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="row">
                        {{-- Title --}}
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Course Title</label>
                                <input type="text" wire:model="title" class="form-control">
                                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Category --}}
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select wire:model="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Thumbnail --}}
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <input type="file" wire:model="thumbnail" class="form-control">
                                @if ($thumbnail)
                                    <img src="{{ $thumbnail->temporaryUrl() }}" class="mt-2" style="max-width: 150px;" alt="">
                                @endif
                                @error('thumbnail') <small class="text-danger">{{ $message }}</small> @enderror
                                <div wire:loading wire:target="thumbnail" class="text-primary mt-1">Uploading...</div>
                            </div>
                        </div>

                        {{-- Price --}}
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Price ($)</label>
                                <input type="number" wire:model="price" class="form-control" min="0" step="0.01">
                                @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Level --}}
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>Level</label>
                                <select wire:model="level" class="form-control">
                                    <option value="beginner">Beginner</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="advanced">Advanced</option>
                                </select>
                                @error('level') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        {{-- Description --}}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea wire:model="description" class="form-control" rows="4"></textarea>
                                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        {{-- Submit Buttons --}}
                        <div class="col-12">
                            <div class="form-group text-end">
                                <button type="submit" class="btn btn-submit">Submit</button>
                                <a href="{{ route('admin.courses.index') }}" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
