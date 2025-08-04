<?php

namespace App\Livewire\Admin\Course\Certificate;

use Livewire\Component;

class EditComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.course.certificate.edit-component')    ->layout ('backend.app')
            ->title ('Course Category List');
    }
}
