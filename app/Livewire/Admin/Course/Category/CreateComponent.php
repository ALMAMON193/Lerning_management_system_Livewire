<?php

namespace App\Livewire\Admin\Course\Category;

use App\Models\Category;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateComponent extends Component
{
    public $name;
    public function store()
    {
        $this->validate([
            'name' => 'required|unique:categories,name',
        ]);

        $slug = Str::slug($this->name);

        Category::create([
            'name' => $this->name,
            'slug' => $slug,
        ]);
        ToastMagic::success('Category Created Successfully');
        return redirect()->route('admin.categories.index');
    }
    public function render()
    {
        return view('livewire.admin.course.category.create-component')->layout('backend.app')->title('Course Category Create');
    }

}
