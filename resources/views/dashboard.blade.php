@extends('layouts.spaceLayout', ['header' => ' D A S H B O A R D &nbsp; I N &nbsp;   S P A C E'])

@section('content')

<main class="text-white text-lg desktop:text-2xl flex flex-col justify-center items-center p-4">
  <div class="max-w-4xl px-6 p-4">
    <h1 class="text-3xl font-semibold pb-6 pt-4 lg:pb-10 lg:pt-6 text-yellow-100">Welcome to your &nbsp; S P A C E &nbsp;&nbsp;B L O G  &nbsp;Dashboard !</h1>

    <p class="pb-4 md:pb-6">Here, you'll uncover everything about &nbsp; S P A C E &nbsp; and how to utilize its features.</p>
    
    <h1 class="text-2xl font-semibold pb-2 pt-4 leading-loose text-green-300">To start sharing your thoughts in &nbsp; S P A C E &nbsp;,<br>
      simply click on &nbsp;"S P A C E" &nbsp;in the navigation bar above, or navigate to Posts by clicking on your name in the top right corner.</h1>
    
    <h1 class="leading-relaxed pb-2 pt-4"><strong>Congratulations!</strong> Once you've done that, you've reached the <br> S P A C E &nbsp; blog!</h1>
    
    <h1 class="text-blue-200 pb-2 pt-4"><strong>Now, you're all set to create your first blog post &nbsp; S P A C E &nbsp;!</strong></h1>
    
    <h1 class="pb-2 pt-4">Express yourself freely and enhance your posts with emotion tags for a more engaging and expressive read.</h1>
    
    <h1 class="pb-2 pt-4">Engage with your fellow space mates by commenting on their blog posts or discovering related content through the search feature. Who knows? You might just meet your next best space mate out there !</h1>
    
    <h1 class="leading-relaxed text-pink-200 pb-2 pt-4"><strong> Wishing you happy blogging adventures, and always remember to spread kindness and consideration among your fellow space mates.</strong></h1>

    <h1 class="text-2xl font-semibold pb-4 pt-4">SEE YOU IN SPACE ---> <a href="/posts" class="inline-block px-4 py-3 text-slate-700 font-bold rounded-md hover:bg-pink-300 transition duration-300">🚀</a></h1>
  </div>
</main>

@endsection
