<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Emotion;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $emotions = Emotion::all();
        return view('search', compact('emotions'))->with('posts', collect())->with('message', 'Please select an emotion to search.');
    }

    public function search(Request $request)
    {
        $emotionId = $request->input('emotion_id');
        $emotions = Emotion::all();

        if (!$emotionId) {
            return view('search', compact('emotions'))->with('posts', collect())->with('message', 'Please select an emotion to search.');
        }

        // Retrieve the posts related to the selected emotion
        $posts = Post::where('emotion_id', $emotionId)->get();

        // If no posts are found, set a message
        if ($posts->isEmpty()) {
            return view('search', compact('emotions'))->with('posts', collect())->with('message', 'No related blog posts found.');
        }

        return view('search', compact('posts', 'emotions'));
    }
}