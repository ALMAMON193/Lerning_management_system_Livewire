<?php
namespace App\Livewire\Admin\Course;

use Devrabiul\ToastMagic\Facades\ToastMagic;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Category;

class CreateComponent extends Component
{
    use WithFileUploads;

    public $title, $slug, $category_id, $description;
    public $thumbnail, $price = 0, $level = 'beginner', $status = 'draft';
    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|max:100024',
            'price' => 'required|numeric|min:0',
            'level' => 'required|in:beginner,intermediate,advanced',
        ]);

        $thumbnailPath = $this->thumbnail ? $this->thumbnail->store('thumbnails', 'public') : null;

        Course::create([
//            'instructor_id' => 1,
            'category_id' => $this->category_id,
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'description' => $this->description,
            'thumbnail' => $thumbnailPath,
            'price' => $this->price,
            'level' => $this->level,
        ]);
        ToastMagic::success('Category Created Successfully');
        return redirect()->route('admin.courses.index');
    }

    public function render()
    {
        return view('livewire.admin.course.create-component', [
            'categories' => Category::all()
        ])->layout('backend.app');
    }
}

