@extends('front.layouts.layout')

@section('content')
    <!-- Feature Section -->
    <section id="statement">
        <!-- Feature Container -->
        <div class="relative container flex flex-row max-w-6xl mx-auto mt-16 px-6 text-gray-900 md:flex-row md:px-0 text-4xl ql-editor">
            <h1>{!! $category->name !!}</h1>
        </div>

        <div class="relative container flex flex-row max-w-6xl mx-auto mt-16 px-6 text-gray-900 md:flex-row md:px-0 text-4xl ql-editor">
            <img src="{{URL::asset($category->image->image_path)}}" alt="{!! $category->name !!}" class="h-60">
        </div>

        <div class="relative container max-w-6xl mx-auto mb-8 px-6 text-gray-900 md:flex-row md:px-0 ql-editor">
            <p>{!! $category->description !!}</p>

        </div>
    </section>

@endsection
