<!-- EXTENDS SPACE LAYOUT AND USES DYNAMIC PAGE HEADING ------------------------------------------------------------------------------------------------>
@extends('layouts.spaceLayout', ['header' => 'S P A C E '])

<!-- PAGE CONTENT --------------------------------------------------------------------------------------------------------------------------------------->

@section('content')

    @include('components.head.tinymce-config')

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('posts.update', $post) }}">
            @csrf
            @method('patch')

            <!-- Text Rich Editor -->
            <textarea id="tinymce" name="message" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message', $post->message) }}</textarea>

            <div class="flex justify-between items-center mt-6 space-x-6">
                
                <!-- EMOTION TAG SELECTOR -->
                    <div class="flex items-center space-x-6">
                        <label for="emotion" class="form-label font-medium text-white">
                            EMOTION
                        </label>
                
                        <select class="form-select p-2" id="emotion" name="emotion_id" required >
                            <option value="" disabled selected>
                                FEELING ....
                            </option>
                
                            @foreach($emotions as $emotion)
                                <option value="{{ $emotion->id }}" {{ $emotion->id == $post->emotion_id ? 'selected' : '' }}>
                                    {{ $emotion->name }} {{ $emotion->emoji }}
                                </option>
                            @endforeach
                        </select>
                    </div>

            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <x-secondary-button ><a href="{{ route('posts.index') }}">{{ __('Cancel') }} </a></x-secondary-button>
            </div>

        </form>
    </div>

@endsection
