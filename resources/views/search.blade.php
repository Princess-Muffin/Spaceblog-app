<!-- EXTENDS MASTER LAYOUT AND USES DYNAMIC PAGE HEADING ------------------------------------------------------------------------------------------------>
@extends('layouts.spaceLayout', ['header' => ' F I N D &nbsp; Y O U R &nbsp; S P A C E &nbsp; M A T E S '])

<!-- PAGE CONTENT --------------------------------------------------------------------------------------------------------------------------------------->

@section('content')
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="GET" action="{{ route('search.posts') }}">
            <div class="mb-4">
                <label for="emotion" class="block text-gray-700 text-sm font-bold mb-2">Select Emotion:</label>
                <select name="emotion_id" id="emotion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">-- Select Emotion --</option>
                    @foreach($emotions as $emotion)
                        <option value="{{ $emotion->id }}" {{ request('emotion_id') == $emotion->id ? 'selected' : '' }}>
                            {{ $emotion->name }} {{ $emotion->emoji }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Search</button>
        </form>

        <!-- SEARCH MESSAGES --------------------------------------------------------------------------------------------------------------------------------------->
        @if(empty(request('emotion_id')))
            <h2 class="mt-10 text-center text-white text-lg"> ---- &nbsp; Please select an emotion to search &nbsp; ----- </h2>
        @elseif($posts->isEmpty())
            <h2 class="mt-10 text-center text-white text-lg"> ---- &nbsp; No related blog posts found---- &nbsp; </h2>
        @endif

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @if($posts->isNotEmpty())
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
                            </div>

                            <p class="mt-4 text-lg text-gray-900">{!! html_entity_decode($post->message) !!}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
