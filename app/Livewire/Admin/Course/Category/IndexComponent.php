<?php

namespace App\Livewire\Admin\Course\Category;

use App\Models\Category;
use Livewire\Component;

class IndexComponent extends Component
{
    public function render ()
    {
        $categories = Category::all();

        return view ('livewire.admin.course.category.index-component', compact ('categories'))
            ->layout ('backend.app')
            ->title ('Course Category List');
    }
}
