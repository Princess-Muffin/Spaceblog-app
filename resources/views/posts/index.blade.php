@extends('space', ['header' => 'S P A C E '])

@section('capturePost')

    @include('components.head.tinymce-config')

    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <!-- Text Rich Editor -->
            <textarea id="tinymce" name="message" placeholder="{{ __('Put something out there in S P A C E ...') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}</textarea>

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
                                <option value="{{ $emotion->id }}">{{ $emotion->name }} {{ $emotion->emoji }}</option>
                            @endforeach
                        </select>
                    </div>
                
                <x-input-error :messages="$errors->get('message')" class="mt-2" />
            
                <x-primary-button>{{ __('BLAST OFF') }}</x-primary-button>
            </div>

        </form>
        </br>
    </div>

@endsection

    

@section('displayPost')
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($posts as $post)
            <div class="p-6 flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>

                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800">{{ $post->user->name }}</span>
                            <small class="ml-2 text-sm text-gray-600">{{ $post->created_at->format('j M Y, g:i a') }}</small>
                            @unless ($post->created_at->eq($post->updated_at))
                                <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                            @endunless
                        </div>

                        @if ($post->user->is(auth()->user()))
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('posts.edit', $post)">
                                        {{ __('Edit') }}
                                    </x-dropdown-link>

                                    <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                        @csrf
                                        @method('delete')
                                        <x-dropdown-link :href="route('posts.destroy', $post)" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        @endif
                    </div>

                    <!-- Display Post --------------------------------------->
                    <p class="mt-4 mb-2 text-lg text-gray-900">{!! html_entity_decode($post->message) !!}</p>
                    
                    <p class="mt-2 mb-6 text-md text-gray-600">

                        @if($post->emotion)
                            Feeling: {{ $post->emotion->name }} {{ $post->emotion->emoji }}
                        @else
                            No emotion specified
                        @endif
                    </p>

                    <!-- Comments section --------------------------------------->
                    @foreach ($post->comments as $comment)
                        <div class="mt-4 text-sm text-gray-600 flex justify-between items-center">
                            <span class="font-semibold">{{ $comment->user->name }}:</span>
                            
                            @if ($post->user->is(auth()->user()) || $comment->user->is(auth()->user()))
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                <form method="POST" action="{{ route('comments.destroy', $comment) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class=" full-width text-red-500 p-2  hover:bg-red-50">
                                        DELETE
                                    </button>
                                </form>
                                </x-slot>
                            </x-dropdown>
                            @endif
                        </div>
                        <p class="text-sm ml-14 pb-4 text-gray-800 pt-2 ">{{ $comment->comment }}</p>
                    @endforeach


                    <form action="{{ route('comments.store') }}" method="post" class="mt-2">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">

                        <textarea   name="comment" rows="2" 
                                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm  bg-zinc-300 border border-opacity-10 p-2" ></textarea>
                        
                        <button type="submit" class="mt-2 bg-purple-400 hover:bg-pink-200 text-white font-semibold py-2 px-4 rounded-md ">
                            Add Comment
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection
