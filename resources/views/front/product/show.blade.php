@extends('front.layouts.layout')

@section('content')
    <!-- Feature Section -->
    <section id="statement">
        <!-- Feature Container -->
        <div class="relative container flex flex-row max-w-6xl mx-auto mt-16 px-6 text-gray-900 md:flex-row md:px-0 text-4xl">
            <h1>{!! $product->name !!}</h1>
        </div>

        <div class="relative container flex flex-row max-w-6xl mx-auto mt-16 px-6 text-gray-900 md:flex-row md:px-0 text-4xl">
            @if(isset($product->image->image_path))
                <img src="{{URL::asset($product->image->image_path)}}" alt="{!! $product->name !!}" class="h-30">
            @endif
        </div>

        <div class="relative container max-w-6xl mx-auto mb-8 px-6 text-gray-900 md:flex-row md:px-0">
            <p>{!! $product->description !!}</p>
        </div>

        <div class="relative container max-w-6xl mx-auto mb-8 px-6 text-gray-900 md:flex-row md:px-0">
            <p>$ {!! $product->price !!}</p>
        </div>

        @if(isset($product->instruction))
            <div class="relative container max-w-6xl mx-auto mb-8 px-6 text-gray-900 md:flex-row md:px-0 text-2xl">
            <h1>How to cook</h1>
            </div>
            <div class="relative container max-w-6xl mx-auto mb-8 px-6 text-gray-900 md:flex-row md:px-0">
                <p>{!! $product->instruction->content !!}</p>
            </div>
        @endif
    </section>

@endsection
