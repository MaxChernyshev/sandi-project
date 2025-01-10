@extends('front.layouts.layout')

@section('content')
    <!-- Feature Section -->
    <section id="statement">
        <!-- Feature Container -->

        <div class="relative container flex flex-row max-w-6xl mx-auto mt-6 px-6 py-2 text-gray-900 md:flex-row md:px-0 text-4xl">
            <h1 class="text-capitalize text-center">How To Cook</h1>
        </div>

        @if(isset($instructions))
            @foreach($instructions as $instruction)
                <div class="relative container flex flex-row max-w-6xl mt-6 mx-auto my-2 px-6 py-0 text-gray-900 md:flex-row md:px-0 text-2xl">
                    <a href="{{ route('front.instructions.show', ['instruction' => $instruction]) }}">
                        <h1>{{ $instruction->title }}</h1>
                    </a>
                </div>
            @endforeach
        @endif
    </section>

@endsection
