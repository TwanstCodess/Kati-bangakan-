<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'ئیسلام ڕوناکیە' }}</title>
        <link rel="stylesheet" href="./style/style.css">
        <link rel="icon" type="image/x-icon" href="/image/mosque.png">
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
    </head>
    <body>
        <div x-data="{ open: false }">
            <!-- Navbar -->
            <nav class="bg-green-200 p-4 kurd">
                <div class="container mx-auto flex justify-between items-center ">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" wire:navigate class="text-gray-900 text-2xl font-bold"><img
                            src="/image/mosque.png" class="mx-10" alt="Kostar" width="60px">ئیسلام ڕوناکیە</a>
                    <!-- Mobile Menu Button -->
                    <button @click="open = !open" class="lg:hidden text-gray-900 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
    
                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex space-x-4">
                        <a href="#" class=" text-gray-900 ">دەربارەی ئێمە</a>
                        <a href="#" class=" text-gray-900 ">تەفسیری قورئانی پیرۆز</a>
                        <a href="{{ url('/') }}" wire:navigate class=" text-gray-900 ">کاتی بانگەکان</a>
                    </div>
                </div>
            </nav>
    
            <!-- Mobile Menu -->
            <div x-show="open" @click.away="open = false"
                class="lg:hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50">
                <div class="flex justify-end p-4">
                    <button @click="open = !open" class="text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col items-center kurd">
                    <a href="{{ url('/') }}" wire:navigate class="text-white hover:text-gray-600 py-2">کاتی بانگەکان</a>
                    <a href="#" class="text-white hover:text-gray-600 py-2">تەفسیری قورئانی پیرۆز</a>
                    <a href="#" class="text-white hover:text-gray-600 py-2">دەربارەی ئێمە</a>
                </div>
            </div>
        </div>
        {{ $slot }}
        @livewireScripts
        
    </body>
</html>
<script
      src="https://cdnjs.cloudflare.com/ajax/libs/three.js/105/three.min.js"
      integrity="sha512-uWKImujbh9CwNa8Eey5s8vlHDB4o1HhrVszkympkm5ciYTnUEQv3t4QHU02CUqPtdKTg62FsHo12x63q6u0wmg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="/js/panolens.min.js"></script>

    <script src="/main.js"></script>