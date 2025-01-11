@extends('front.layouts.layout')

@section('content')

    <!-- Feature Section -->
    <section id="feature">
        <!-- Feature Container -->
        <div class="relative container flex flex-col max-w-6xl mx-auto my-32 px-6 text-gray-900 md:flex-row md:px-0">

            <!-- Image -->
            <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="borsch"/>

            <!-- Text Container -->
            <div class="top-48 pr-0 bg-white md:absolute md:right-0 md:py-20 md:pl-20">
                <h2 class="max-w-lg mt-10 mb-6 font-lora text-8xl text-center text-frontred uppercase md:text-5xl md:mt-0 md:text-left">
                    Sandy's Ukrainian Kitchen
                </h2>

                <p class="max-w-md text-center md:text-left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores cupiditate, doloremque hic, ipsa molestiae mollitia non, quae quasi similique unde velit vero. Accusantium aliquam delectus dignissimos dolorum, iusto magni, nisi, nobis quasi quis quo rerum sed vero voluptas? Ad corporis cupiditate deleniti deserunt dignissimos est molestiae nihil sint suscipit.
                </p>
            </div>
        </div>

    </section>

    <!-- Story Section -->
    <section id="story">
        <div class="mt-2">
            <div class="relative container flex flex-col max-w-6xl mx-auto px-6 text-gray-900 md:flex-row md:px-0">
                <div class="flex justify-center mb-20 md:justify-between">
                    <h2 class="text-4xl text-center uppercase md:text-left md:text-5xl mt-20">
                        Our Story
                    </h2>
                </div>
            </div>
            <div class="relative container flex flex-col max-w-6xl mx-auto px-6 text-gray-900 md:flex-row md:px-0">


                <div class="top-48 md:py-20 md:p-20 my-auto">
                    <p class="max-w-md text-center md:text-left ">
                        Founded by Sandy Kosolowsky in 1999, Sandy’s Ukrainian Kitchen began as a heartfelt mission to share the flavors of her Ukrainian heritage with Nanaimo and the mid-Island community. What started as a small operation quickly grew, with Sandy's authentic perogies becoming a staple for locals seeking a true taste of tradition. Each perogy is lovingly made from scratch, using
                        family
                        recipes passed down through generations.

                        Today, Sandy’s Ukrainian Kitchen is cherished for its commitment to quality, community, and the comforting taste of home. Join us and experience the warmth of Ukrainian hospitality, one perogy at a time!

                    </p>
                </div>
                <img src="{{ Vite::asset('resources/images/front/Sandy.png') }}" alt="Sandy" class="mt-10"/>
            </div>
        </div>
    </section>




    <!-- Creations Section -->
    <section id="creations">
        <!-- Creations Container -->
        <div class="container max-w-6xl mx-auto px-6 text-gray-900 md:px-0">
            <!-- Creations Header -->
            <div class="flex justify-center mb-20 md:justify-between">
                <h2 class="text-4xl text-center uppercase md:text-left md:text-5xl mt-20">
                    Our Creations
                </h2>
            </div>

            <!-- Items Container -->
            <div class="item-container justify-center mx-auto my-8 grid grid-cols-1 gap-3
            xsm:grid-cols-1
            sm:grid-cols-1
            md:grid-cols-2
            lg:grid-cols-3
            xl:grid-cols-3
            ">
                <!-- Item 1 -->
                @foreach($categories as $category)
                    <div class="group item my-4 p-2">
                        @if(isset($category->image->image_path))
                            <!-- Desktop Image -->
                            <img src="{{URL::asset($category->image->image_path)}}" alt="{!! $category->name !!}" class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                            <!-- Mobile Image -->
                            <img src="{{URL::asset($category->image->image_path)}}" alt="{!! $category->name !!}" class="w-full md:hidden"/>
                        @endif
                        <!-- Item Gradient -->
                        <div class="item-gradient"></div>
                        <!-- Item Text -->
                        <h5 class="my-4">{{ $category->name }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
