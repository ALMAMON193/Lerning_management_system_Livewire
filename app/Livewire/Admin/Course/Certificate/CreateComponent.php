<?php

namespace App\Livewire\Admin\Course\Certificate;

use App\Models\Certificate;
use App\Models\Course;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateComponent extends Component
{

    use WithFileUploads;

    public $course_id;
    public $certificate_path;
    public $issued_at;

    public function rules()
    {
        return [
            'course_id' => 'required|exists:courses,id',
            'certificate_path' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        ];
    }

    public function store()
    {
        $this->validate();

        $path = null;
        if ($this->certificate_path) {
            $path = $this->certificate_path->store('certificates', 'public');
        }

        Certificate::create([
            'course_id' => $this->course_id,
            'certificate_code' => strtoupper(    Str::random(10)),
            'certificate_path' => $path,
            'issued_at' => now(),
        ]);

        session()->flash('success', 'Certificate created successfully.');
        return redirect()->route('admin.certificates.index');
    }
    public function render()
    {
        return view('livewire.admin.course.certificate.create-component',
            [
                'courses' => Course::all()
            ])    ->layout ('backend.app')
            ->title ('Course Category List');
    }
}
