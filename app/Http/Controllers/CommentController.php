<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\post;
use App\Models\User;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'comment' => 'required|string|max:255',
        ]);

        // Create a new comment
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = auth()->id();
        $comment->comment = $request->comment;
        $comment->save();

        return back()->with('success', 'Comment posted successfully!');
    }

    // Delete a comment
    public function destroy(Comment $comment)
    {
        $post = $comment->post;
        if ($post->user_id === auth()->id() || $comment->user_id === auth()->id()) {
            $comment->delete();
            return back()->with('success', 'Comment deleted successfully!');
        } else {
            return back()->with('error', 'You are not authorized to delete this comment.');
        }
    }
}
