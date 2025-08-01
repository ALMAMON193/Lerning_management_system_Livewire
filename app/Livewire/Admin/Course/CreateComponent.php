<?php

namespace App\Livewire\Admin\Course;

use Livewire\Component;

class CreateComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.course.create-component')->layout('backend.app')->title('Create course');
    }
}
