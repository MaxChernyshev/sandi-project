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
    <!-- Hero Container -->
    <div class="container max-w-4xl mx-auto px-6 py-4">
        <!-- Menu/Logo Container -->
        <nav class="flex items-center justify-center text-white">
            <!-- Logo -->
            <img src="{{ Vite::asset('resources/images/front/sandy_logo.png') }}" alt="Sandy's Logo" class="h-20">
        </nav>
    </div>
</section>
<div class="container max-w-full min-h-12 hidden md:flex vyshyvanka-string"></div>


