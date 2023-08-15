<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImageGallery extends Component
{

    public $instance;
    public $images;

    public function mount($instance) {
        $this->images = $instance->images()->get();
    }



    public function render()
    {
        return view('livewire.image-gallery');
    }
}
