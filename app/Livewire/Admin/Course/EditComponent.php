<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditComponent extends Component
{
    use WithFileUploads;

    public Course $course;
    public $title, $description, $price, $level, $status, $thumbnail;

    public function mount($id): void
    {
        $this->course = Course::findOrFail($id);
        $this->title = $this->course->title;
        $this->description = $this->course->description;
        $this->price = $this->course->price;
        $this->level = $this->course->level;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'level' => 'required|in:beginner,intermediate,advanced',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($this->thumbnail) {
            // delete old thumbnail
            if ($this->course->thumbnail && file_exists(public_path('storage/' . $this->course->thumbnail))) {
                unlink(public_path('storage/' . $this->course->thumbnail));
            }
            $this->course->thumbnail = $this->thumbnail->store('course_thumbnails', 'public');
        }

        $this->course->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'description' => $this->description,
            'price' => $this->price,
            'level' => $this->level,
        ]);

        ToastMagic::success('Category Created Successfully');
        return redirect()->route('admin.courses.index');
    }

    public function render()
    {
        return view('livewire.admin.course.edit-component')->layout('backend.app')->title('Edit Course');
    }
}
