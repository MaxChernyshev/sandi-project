@extends('front.layouts.layout')

@section('content')
    <!-- Feature Section -->
    <section id="statement">
        <!-- Feature Container -->

        <div class="relative container flex flex-row max-w-6xl mx-auto mt-6 px-6 py-2 text-gray-900 md:flex-row md:px-0 text-4xl ql-editor">
            <h1 class="text-capitalize text-center">{{ $menu->name }} Menu</h1>
        </div>

        @if(isset($products))
            @foreach($products as $product)
                <div class="relative container flex flex-row max-w-6xl mt-2 mx-auto my-2 px-2 py-0 text-gray-900 md:flex-row md:px-0 text-4xl ql-editor">
                    <a href="{{ route('front.products.product', ['product' => $product]) }}">

                        <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg my-2 w-96">
                            <div class="p-6 text-center">
                                <h4 class="mb-1 text-xl font-semibold text-slate-800">{{ $product->name }}</h4>
                                <p class="text-base text-slate-600 mt-4 font-light ">{{ $product->description }}</p>
                            </div>
                            <div class="flex justify-center p-6 pt-2 gap-7">
                                <button class="min-w-32  rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                    @if(isset($product->image->image_path))
                                        <img src="{{URL::asset($product->image->image_path)}}" alt="{!! $product->name !!}" class="h-30">
                                    @endif
                                </button>
                            </div>
                            <div class="p-6 text-center">
                                <p class="text-base text-slate-600 mt-4 font-light ">$ {{ $product->price }}</p>
                            </div>
                        </div>

                        {{--                        @if(isset($category->image->image_path))--}}
                        {{--                            <img src="{{URL::asset($category->image->image_path)}}" alt="{!! $category->name !!}" class="h-30">--}}
                        {{--                        @endif--}}
                    </a>
                </div>
            @endforeach
        @endif
    </section>

@endsection
