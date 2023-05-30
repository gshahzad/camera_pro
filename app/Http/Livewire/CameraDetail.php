<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Camera;
class CameraDetail extends Component
{
    public $camera_id;
    public function mount($camera_id)
    {
            $this->camera_id = $camera_id;
            $this->camera = Camera::where('status', 1)->where('id' , $camera_id)->first();
    }
    public function render(Request $request )
    {
        return view('livewire.camera-detail');
    }
}
