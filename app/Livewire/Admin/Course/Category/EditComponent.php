<?php

namespace App\Livewire\Admin\Course\Category;

use Livewire\Component;

class EditComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.course.category.edit-component')->layout('backend.app')->title('Course Category Edit');
    }
}
