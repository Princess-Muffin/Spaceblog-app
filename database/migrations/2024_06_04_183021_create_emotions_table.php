<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emotions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('emoji');
            $table->timestamps();
        });

        // Inserting predefined emotions
        $emotions = [
            ['name' => 'Joyful', 'emoji' => '😊'],
            ['name' => 'Excited', 'emoji' => '😄'],
            ['name' => 'Grateful', 'emoji' => '🙏'],
            ['name' => 'Hopeful', 'emoji' => '🌟'],
            ['name' => 'Inspired', 'emoji' => '💖'],
            ['name' => 'Content', 'emoji' => '😌'],
            ['name' => 'Amused', 'emoji' => '😄'],
            ['name' => 'Relieved', 'emoji' => '😅'],
            ['name' => 'Proud', 'emoji' => '🏆'],
            ['name' => 'Empowered', 'emoji' => '💪'],
            ['name' => 'Enthusiastic', 'emoji' => '🎉'],
            ['name' => 'Optimistic', 'emoji' => '🌈'],
            ['name' => 'Peaceful', 'emoji' => '☮️'],
            ['name' => 'Playful', 'emoji' => '😜'],
            ['name' => 'Motivated', 'emoji' => '💪'],
            ['name' => 'Appreciative', 'emoji' => '🙌'],
            ['name' => 'Comforted', 'emoji' => '☺️'],
            ['name' => 'Fulfilled', 'emoji' => '😊'],
            ['name' => 'Serene', 'emoji' => '😌'],
            ['name' => 'Radiant', 'emoji' => '🌟'],
            ['name' => 'Valued', 'emoji' => '💎'],
            ['name' => 'Affirmed', 'emoji' => '🥰'],
            ['name' => 'Loved', 'emoji' => '❤️'],
            ['name' => 'Compassionate', 'emoji' => '❤️'],
            ['name' => 'Sad', 'emoji' => '😢'],
            ['name' => 'Angry', 'emoji' => '😡'],
            ['name' => 'Anxious', 'emoji' => '😰'],
            ['name' => 'Frustrated', 'emoji' => '😤'],
            ['name' => 'Disappointed', 'emoji' => '😞'],
            ['name' => 'Guilty', 'emoji' => '😔'],
            ['name' => 'Jealous', 'emoji' => '😒'],
            ['name' => 'Insecure', 'emoji' => '😞'],
            ['name' => 'Lonely', 'emoji' => '😔'],
            ['name' => 'Overwhelmed', 'emoji' => '😩'],
            ['name' => 'Resentful', 'emoji' => '😠'],
            ['name' => 'Embarrassed', 'emoji' => '😳'],
            ['name' => 'Worried', 'emoji' => '😟'],
            ['name' => 'Ashamed', 'emoji' => '😔'],
            ['name' => 'Irritated', 'emoji' => '😠'],
            ['name' => 'Nervous', 'emoji' => '😬'],
            ['name' => 'Regretful', 'emoji' => '😔'],
            ['name' => 'Wild', 'emoji' => '🤪'],
            ['name' => 'Chaotic', 'emoji' => '😵‍💫'],
            ['name' => 'Intense', 'emoji' => '😳'],
            ['name' => 'Mindful', 'emoji' => '🧘‍♂️'],
            ['name' => 'Reflective', 'emoji' => '🤔'],
            ['name' => 'Serene', 'emoji' => '😌'],
            ['name' => 'Self-love', 'emoji' => '💖'],
            ['name' => 'Confident', 'emoji' => '😎'],
            ['name' => 'Humorous', 'emoji' => '😆'],
            ['name' => 'Energetic', 'emoji' => '💃'],
            ['name' => 'Silly', 'emoji' => '😜'],
            ['name' => 'Goofy', 'emoji' => '🤪'],
            ['name' => 'Creative', 'emoji' => '🎨'],
        ];

        DB::table('emotions')->insert($emotions);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emotions');
    }
};
