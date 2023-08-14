<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Car;

/**
 * Class CarRepository.
 */
class CarRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Car::class;
    }

    /**
     * A list of randomly generated Car Brand names.
     * @var array|string[]
     */
    public array $brands = [
        'Voltix',
        'AeroMoto',
        'NexusDrive',
        'SkyRise',
        'ZenithAuto',
        'EquiV',
        'NovaTron',
        'LumaV',
        'AstralX',
        'QuantumShift'
    ];

    /**
     * A list of randomly generated Car Model names.
     * @var array|string[]
     */
    public array $brand_models = [
        'Sparko',
        'AeroJet S',
        'Nexus 3000',
        'SkyGlide Z',
        'ZenStar Plus',
        'EquiV M7',
        'NovaTron A1',
        'LumaV E2',
        'AstralX V5',
        'QuantumShift XE'
    ];

}
