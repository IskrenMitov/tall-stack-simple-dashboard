<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;
use \Illuminate\Contracts\View\View;

class ImageGallery extends Component
{

    public $instance;
    public Collection $images;

    public int $image_id;
    public string $name;
    public string $alt;
    public bool $showModal = false;

    protected $listeners = ['imageUploaded'];

    /**
     * @param $instance
     * @return void
     */
    public function mount($instance): void
    {
        $this->images = $instance->images()->get();
    }


    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.image-gallery');
    }

    /**
     * @param Image $image
     * @return void
     */
    public function like(Image $image): void
    {
        $this->images->transform(function ($original) use ($image) {
            if ($original->id === $image->id) {
                $original->is_favorite = ! $original->is_favorite;
            }
            return $original;
        });
        $image->is_favorite = ! $image->is_favorite;
        $image->save();
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
        $this->validate([
            'name' => 'string|max:255',
            'alt' => 'string|max:255'
        ]);

        $image = $this->findImageById($image_id);
        $this->updateImageProperties($image);
        $this->showModal = false;
    }

    /**
     * @param Image $image
     * @return void
     */
    public function delete(Image $image): void
    {
        $this->images = $this->images->reject(fn ($item) => $item->id === $image->id);
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

    /**
     * @param int $image_id
     * @return Image
     */
    private function findImageById(int $image_id): Image
    {
        return Image::findOrFail($image_id);
    }

    /**
     * @param Image $image
     * @return void
     */
    private function updateImageProperties(Image $image): void
    {
        $image->update([
            'name' => $this->name,
            'alt' => $this->alt,
        ]);

        $this->images = $this->images->map(function ($item) use ($image) {
            if ($item->id === $image->id) {
                $item->name = $this->name;
                $item->alt = $this->alt;
            }
            return $item;
        });
    }

}
