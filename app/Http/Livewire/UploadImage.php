<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Repositories\ImageRepository;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImage extends Component
{
    use WithFileUploads;

    public string $imageable_type;
    public int $imageable_id;
    public $image;

    public function render()
    {
        return view('livewire.upload-image');
    }

    public function store(): void
    {
        $this->validate([
            'image' => 'image|max:2048', // 2MB Max
        ]);

        $imageRepository = new ImageRepository();
        $filename = $imageRepository->uploadToStorage($this->image);

        $image = $imageRepository->storeImage(
            $filename,
            $this->imageable_type,
            $this->imageable_id
        );

        $this->emit('imageUploaded', $image->id);
    }
}
