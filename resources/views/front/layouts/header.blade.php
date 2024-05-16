<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sandy's Ukrainian Kitchen</title>
    @vite([
        'resources/css/front/app.css',
        'resources/js/front/app.js',
        ])
</head>
<body class="font-lora">

<!-- Hero Section -->
<div class="container max-w-full min-h-12 hidden md:flex vyshyvanka-string"></div>

<section id="hero" class="bg-frontred">
{{--<section id="hero" class="bg-bodydark1 bg-fred">--}}
    <!-- Hero Container -->
    <div class="container max-w-4xl mx-auto px-6 py-4">
        <!-- Menu/Logo Container -->
        <nav class="flex items-center justify-between text-white">
            <!-- Logo -->
            <a href="{{ route('front.index') }}">
            <img src="{{ Vite::asset('resources/images/front/sandy_logo.png') }}" alt="Sandy's Logo" class="h-20">
            </a>
            <!-- Menu -->
            <div class="hidden h-10  md:flex md:space-x-8 text-2xl">
                <div class="group">
                    <a href="#">Kitchen</a>
                    <div class="mx-2 group-hover:border-b group-hover:border-blue-50">
                    </div>
                </div>
                <div class="group">
                    <a href="#">Store</a>
                    <div class="mx-2 group-hover:border-b group-hover:border-blue-50"></div>
                </div>
                <div class="group">
                    <a href="#">Blog</a>
                    <div class="mx-2 group-hover:border-b group-hover:border-blue-50"></div>
                </div>
                <div class="group">
                    <a href="#">Our History</a>
                    <div class="mx-2 group-hover:border-b group-hover:border-blue-50"></div>
                </div>
                <div class="group">
                    <a href="#">Contact</a>
                    <div class="mx-2 group-hover:border-b group-hover:border-blue-50"></div>
                </div>
            </div>
            <!-- Hamburger Button -->
            <div class="md:hidden">
                <button
                    id="menu-btn"
                    type="button"
                    class="z-40 block hamburger md:hidden focus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
            </div>
        </nav>
        <!-- Mobile Menu -->
        <div id="menu"
             class="absolute top-0 bottom-0 left-0 hidden flex-col self-end w-full min-h-screen py-1 pt-40 pl-12 space-y-3 text-lg text-white uppercase bg-black">
            <a href="#" class="hover:text-pink-500">Kitchen</a>
            <a href="#" class="hover:text-pink-500">Store</a>
            <a href="#" class="hover:text-pink-500">Blog</a>
            <a href="#" class="hover:text-pink-500">About</a>
            <a href="#" class="hover:text-pink-500">Contact</a>
        </div>
    </div>
</section>
<div class="container max-w-full min-h-12 hidden md:flex vyshyvanka-string"></div>


