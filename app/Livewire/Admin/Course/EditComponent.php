<?php

namespace App\Livewire\Admin\Course;

use Livewire\Component;

class EditComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.course.edit-component')->layout('backend.app')->title('Edit course');
    }
}
