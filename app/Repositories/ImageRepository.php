<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Image;

/**
 * Class ImageRepository.
 */
class ImageRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model(): string
    {
        return Image::class;
    }

    /**
     * A list of image URLs for DB seeding.
     * @var array|string[]
     */
    public array $urls = [
        'https://www.alfaromeo.co.uk/content/dam/moc/alfa-romeo/uk/warranty/640x640.jpg.transform/resize-640/img.jpg',
        'https://hips.hearstapps.com/hmg-prod/images/2023-bmw-xm-07-640b956963128.jpg?crop=0.667xw:1.00xh;0.130xw,0&resize=640:*',
        'https://carsales.pxcrush.net/carsales//cars/private/12i66utvtsxvkoho6lo1lth6i.jpg',
        'https://i.pinimg.com/1200x/e5/8a/aa/e58aaaf44f50cd870474b1f031a62f56.jpg',
        'https://hips.hearstapps.com/hmg-prod/images/nissanz2023-1673297639.jpeg?crop=0.426xw:0.568xh;0.337xw,0.378xh&resize=640:*',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-MwWsSR2h0R-unE6xhnybdp_vHResjwttPPUQiryaTDyV3hac8cwbIKRnybLb5tioCeY&usqp=CAU',
        'https://www.usnews.com/object/image/00000185-88e0-dcf2-a7ef-ddf4d4390001/10-2023-honda-cr-v-sport-touring.jpeg?update-time=1673038713597&size=responsive640'
    ];

    /**
     * @param mixed $image
     * @return string
     * @throws \Exception
     */
    public function uploadToStorage(mixed $image): string
    {
        $bucket = '/testing/tall/' . now()->timestamp . '' . random_int(1000, 9999);
        $filename = Storage::disk('digitalocean')->put($bucket , $image, 'public');

        return 'https://atentio.ams3.cdn.digitaloceanspaces.com/'. $filename;
    }

    /**
     * @param string $url
     * @param string $type
     * @param int $id
     * @return Image
     */
    public function storeImage(string $url, string $type, int $id): Image
    {
        return Image::create([
            'url' => $url,
            'name' => '',
            'alt' => '',
            'is_favorite' => false,
            'imageable_type' => $type,
            'imageable_id' => $id
        ]);
    }
}
