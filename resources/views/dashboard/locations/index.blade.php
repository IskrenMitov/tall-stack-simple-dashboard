@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl pt-8">
        <h1 class="font-title">
            Locations List
        </h1>
    </div>
    <div class="mx-auto max-w-7xl pt-8">
        <div class="table-bg overflow-auto">
            <table class="w-full text-sm text-left text-gray-500 rounded">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($locations as $location)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-body">{{ $location->name }}</td>
                        <td>
                            -
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
