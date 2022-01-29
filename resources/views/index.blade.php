@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center"> 
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Learn to <span class="text-red-500">code</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">with Nikolay Dimitrov</h3>            
        </div>    
        
        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p> 
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae molestias cupiditate adipisci itaque? Molestiae eius perspiciatis reiciendis! Qui beatae molestiae, aperiam, error inventore eligendi ipsum amet ab aut veritatis illo.
            </p>
            <a href="{{ route('about') }}" class="bg-red-500 text-center py-2 px-4 rounded hover:bg-green-500 transition">Learn more</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">What can you learn?</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Web Development</h3>    
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, deleniti optio distinctio porro voluptatem error debitis suscipit illum soluta! Ex voluptates eveniet reiciendis esse consequatur molestiae cupiditate deleniti deserunt animi?
                        </p>
                        <a href="{{ url('https://youtube.com') }}" target="_blank" rel="nooopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded hover:bg-green-500 transition">Learn now!</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Game Development</h3>    
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, deleniti optio distinctio porro voluptatem error debitis suscipit illum soluta! Ex voluptates eveniet reiciendis esse consequatur molestiae cupiditate deleniti deserunt animi?
                        </p>
                        <a href="{{ url('https://youtube.com') }}" target="_blank" rel="nooopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded hover:bg-green-500 transition">Learn now!</a>
                    </div>                
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class ="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Where to?</h3>
            <h3 class="text-xl mb-6">Learn to code on YouTube</h3>
            <div class="-mx-2 sn:flex">
            <a href="{{ url('https://youtube.com') }}" target="_blank" rel="nooopener noreferrer" class=" block bg-red-500 text-center py-2 px-4 rounded hover:bg-green-500 transition mx-2 mb-3 sn:mb-8">💻
                <span class="mr-2"></span> Learn <strong>Web</strong> Development
            </a>
            <a href="{{ url('https://youtube.com') }}" target="_blank" rel="nooopener noreferrer" class="block bg-red-500 text-center py-2 px-4 rounded hover:bg-green-500 transition mx-2">🎮
                <span class="mr-2"></span> Learn <strong>Game</strong> Development
            </a>
            </div>
        </div>

    </section>
@endsection