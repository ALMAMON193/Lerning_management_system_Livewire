<?php

namespace App\Livewire\Admin\Course;

use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.course.index-component')->layout('backend.app')->title('');
    }
}
