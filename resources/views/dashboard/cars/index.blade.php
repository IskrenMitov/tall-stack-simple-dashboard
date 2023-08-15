@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl pt-8">
        <h1 class="font-title">
            Cars List
        </h1>
    </div>
    <div class="mx-auto max-w-7xl pt-8">
        <div class="table-bg overflow-auto">
            <table class="w-full text-sm text-left text-gray-500 rounded">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Brand</th>
                    <th scope="col" class="px-6 py-3">Model</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-body">{{ $car->brand }}</td>
                        <td class="font-body">{{ $car->model }}</td>
                        <td>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn-link hover:underline inline-flex items-center">
                                <button type="button" class="m-2 btn-icon text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </button>
                                <p class=" font-body">Check Gallery</p>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
