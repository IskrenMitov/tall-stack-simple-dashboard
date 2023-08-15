@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl pt-8">
        <div class="grid grid-flow-row-dense grid-cols-3 grid-rows-1">
            <div class="col-span-2">
                <h2 class="font-title">
                    Image Gallery for Car: {{ $car->brand }} {{ $car->model }}
                </h2>
            </div>
            <div class="float-right text-end">
                <a href="{{ route('cars.index') }}" class="btn-link hover:underline inline-flex items-center">
                    <button type="button"
                            class="m-2 btn-icon text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="11" viewBox="0 0 8 11" fill="none">
                            <path d="M7 1L2 5.5L7 10" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                    <p class="ml-4 font-body">Back to Cars List</p>
                </a>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-7xl mt-3">
        <livewire:image-gallery :instance="$car"/>
    </div>

    <div class="mx-auto max-w-7xl mt-8">
        <livewire:upload-image :imageable_type="\App\Models\Car::class" :imageable_id="$car->id"/>
    </div>
@endsection
