<?php

namespace App\Livewire\Admin\Course\Category;

use App\Models\Category;
use Livewire\Component;

class IndexComponent extends Component
{
    public function getCategories ()
    {
        return Category::orderBy ('name')->get ();
    }

    public function render ()
    {
        $categories = $this->getCategories ();

        return view ('livewire.admin.course.category.index-component', compact ('categories'))
            ->layout ('backend.app')
            ->title ('Course Category List');
    }
}
