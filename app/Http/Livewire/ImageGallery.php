<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class ImageGallery extends Component
{

    public $instance;
    public Collection $images;

    public int $image_id;
    public string $name;
    public string $alt;
    public bool $showModal = false;

    protected $listeners = ['imageUploaded'];

    public function mount($instance) {
        $this->images = $instance->images()->get();
    }



    public function render()
    {
        return view('livewire.image-gallery');
    }

    /**
     * @param Image $image
     * @return void
     */
    public function like(Image $image): void
    {
        foreach ($this->images as $original) {
            if ($original->id == $image->id) {
                $original->is_favorite = ! $original->is_favorite;
                $image->is_favorite = ! $image->is_favorite;
                $image->save();
            }
        }
    }

    /**
     * @param Image $image
     * @return void
     */
    public function showEditModal(Image $image): void
    {
        $this->image_id = $image->id;
        $this->name = $image->name;
        $this->alt = $image->alt;
        $this->showModal = true;
    }

    /**
     * @return void
     */
    public function hideEditModal(): void
    {
        $this->showModal = false;
    }

    /**
     * @param int $image_id
     * @return void
     */
    public function update(int $image_id): void
    {
        $image = Image::findOrFail($image_id);

        $this->validate([
            'name' => 'string|max:255',
            'alt' => 'string|max:255'
        ]);

        foreach ($this->images as $original) {
            if ($original->id == $image->id) {
                $original->name = $this->name;
                $original->alt = $this->alt;

                $image->name = $this->name;
                $image->alt = $this->alt;
                $image->save();
            }
        }
        $this->showModal = false;
    }

    /**
     * @param Image $image
     * @return void
     */
    public function delete(Image $image): void
    {
        foreach ($this->images as $key => $original) {
            if ($original->id == $image->id) {
                unset($this->images[$key]);
            }
        }
        $image->delete();
    }

    /**
     * @param Image $image
     * @return void
     */
    public function imageUploaded(Image $image): void
    {
        $this->images->push($image);
    }
}
