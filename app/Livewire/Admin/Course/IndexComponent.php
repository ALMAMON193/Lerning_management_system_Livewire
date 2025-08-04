<?php
namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Livewire\Component;

/**
 * @method dispatchBrowserEvent(string $string, array $array)
 */
class IndexComponent extends Component
{

    protected $listeners = ['deleteConfirmed'];
    public function confirmDelete($id): void
    {
        $course = Course::find($id);

        if (!$course) {
            session()->flash('error', 'Course not found.');
            return;
        }
        $course->delete();
        session()->flash('success', 'Course deleted successfully.');
    }

    public function render()
    {
        $courses = Course::with(['instructor', 'category'])->get();
        return view('livewire.admin.course.index-component', compact('courses'))
            ->layout('backend.app')
            ->title('All Courses');
    }

}
