<?php

namespace App\Livewire\Admin\Course\Certificate;

use App\Models\Certificate;
use Livewire\Component;

class IndexComponent extends Component
{
    public function delete($id)
    {
        $certificate = Certificate::find($id);
        if ($certificate) {
            $certificate->delete();
            session()->flash('success', 'Certificate deleted successfully.');
        } else {
            session()->flash('error', 'Certificate not found.');
        }
    }
    public function render()
    {
        return view('livewire.admin.course.certificate.index-component',
            [
                'certificates' => Certificate::with('course')->latest()->get()
            ])    ->layout ('backend.app')
            ->title ('Course Category List');
    }
}
