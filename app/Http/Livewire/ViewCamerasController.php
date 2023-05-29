<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Camera;
class ViewCamerasController extends Component
{
    public function render()
    {
		$this->camera = Camera::where('status', 1)->orderBy('id' , 'desc')->get();
        return view('livewire.view-cameras');
    }
}
