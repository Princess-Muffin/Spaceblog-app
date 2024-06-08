<?php

namespace App\Models;

use App\Events\postCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'emotion_id',
    ];

    protected $dispatchesEvents = [
        'created' => postCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function emotion(): BelongsTo
    {
        return $this->belongsTo(Emotion::class);
    }
}
