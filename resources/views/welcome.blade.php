<!-- EXTENDS MASTER LAYOUT AND USES DYNAMIC PAGE HEADING ------------------------------------------------------------------------------------------------>
    @extends('layouts.masterLayout', ['header' => ' W E L C O M E &nbsp; T O &nbsp; S P A C E &nbsp; ! '])

<!-- PAGE CONTENT --------------------------------------------------------------------------------------------------------------------------------------->

    @section('content')
            <div class="container mx-auto p-2">

                <div class=" bg-slate-700  p-8 text-pink-200 font-medium  mb-12">

                    <h1 class="text-4xl font-bold text-white mb-8 tracking-widest text-justified desktop:text-center">A &nbsp;NEW &nbsp;BLOGGING &nbsp;PLATFORM&nbsp;</h1>
        
                        <p class="text-xl mb-12">It's the go-to platform for blogging adventures! Here, you can share your stories, thoughts, and ideas with a vibrant community of fellow bloggers.</p>
        
                    <h2 class="text-3xl font-bold tracking-wide text-white mb-6">What We're About:</h2>
                        <p class="text-lg mb-12">At &nbsp; S P A C E &nbsp;, we believe in the power of storytelling and self-expression. Our platform provides the perfect space for you to unleash your creativity and connect with others who share your passion for blogging. Whether you're a seasoned writer or just starting out, &nbsp; S P A C E &nbsp; is the place for you to shine.</p>
        
                    <h2 class="text-3xl font-bold tracking-wide text-white mb-4">Join the &nbsp; S P A C E &nbsp; Community!</h2>
                        <p class="text-lg mb-8">Ready to embark on your blogging journey? Join the &nbsp; S P A C E &nbsp; community today and become part of our ever-growing network of writers, thinkers, and dreamers.</p>
        
                        <ul class="list-disc list-inside text-left mx-auto max-w-2xl text-lg  mb-12">
                            <li><strong class="text-white tracking-wide" >Express Yourself Freely:</strong>
                                 <p class=" pb-4  ">Share whatever is on your mind and enhance your posts with emotion tags for a more engaging and expressive experience.</p></li>
                            <li><strong class="text-white tracking-wide">Connect with Fellow Space Mates:</strong>
                                <p class=" pb-4">Engage with your fellow space mates by commenting on their blog posts or discovering related content. Who knows? You might just meet your next best space mate!</p></li>
                            <li><strong class="text-white tracking-wide">Discover New Content:</strong>
                                <p class=" pb-4">Dive into a world of captivating blog posts covering a wide range of topics. There's always something new to discover in &nbsp; S P A C E &nbsp;.</p></li>
                        </ul>
        
                    <h2 class="text-3xl font-bold tracking-wide text-white mb-8">Wishing You Happy Blogging Adventures </h2>
                        <p class="text-lg mb-12">Join us in exploring the infinite possibilities of sharing ideas, stories, and emotions in our vibrant online space. Remember to always spread kindness and consideration among your fellow space mates. 🚀</p>
        
                    <h2 class="text-3xl font-bold tracking-wide text-white mb-8">SEE YOU IN SPACE! 🌟</h2>
        
                    <a href="/register" class="inline-block px-4 py-3 bg-zinc-200 text-slate-700 font-bold rounded-md hover:bg-pink-300 transition duration-300">Join Now</a>
                </div>
            </div>
        
    @endsection