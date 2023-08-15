@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl pt-8">
        <h1 class="font-title">
            Welcome
        </h1>
        <p class="font-body pt-4">
            Hope you enjoy this TALL Dashboard. Click <a href="{{ route('cars.index') }}" class=" font-bold hover:underline inline-flex items-center">here</a> to get started.
        </p>
    </div>
@endsection
