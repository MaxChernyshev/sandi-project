@extends('front.layouts.layout')

@section('content')

    <!-- Feature Section -->
    <section id="feature">
        <!-- Feature Container -->
        <div class="relative container flex flex-col max-w-6xl mx-auto my-32 px-6 text-gray-900 md:flex-row md:px-0">
            <!-- Image -->
            <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""/>

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

    <!-- Creations Section -->
    <section id="creations">
        <!-- Creations Container -->
        <div class="container max-w-6xl mx-auto my-32 px-6 text-gray-900 md:px-0">
            <!-- Creations Header -->
            <div class="flex justify-center mb-20 md:justify-between">
                <h2 class="text-4xl text-center uppercase md:text-left md:text-5xl">
                    Our Creations
                </h2>

                <button class="hidden btn md:block">See All</button>
            </div>

            <!-- Items Container -->
            <div class="item-container flex justify-center mx-auto my-8">
                <!-- Item 1 -->
                <div class="group item">
                    <!-- Desktop Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""
                         class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                    <!-- Mobile Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="" class="w-full md:hidden"/>
                    <!-- Item Gradient -->
                    <div class="item-gradient"></div>
                    <!-- Item Text -->
                    <h5>Deep Earth</h5>
                </div>

                <!-- Item 2 -->
                <div class="group item">
                    <!-- Desktop Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""
                         class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                    <!-- Mobile Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="" class="w-full md:hidden"/>
                    <!-- Item Gradient -->
                    <div class="item-gradient"></div>
                    <!-- Item Text -->
                    <h5>Deep Earth</h5>
                </div>

                <!-- Item 3 -->
                <div class="group item">
                    <!-- Desktop Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""
                         class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                    <!-- Mobile Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="" class="w-full md:hidden"/>
                    <!-- Item Gradient -->
                    <div class="item-gradient"></div>
                    <!-- Item Text -->
                    <h5>Deep Earth</h5>
                </div>

                <!-- Item 4 -->
                <div class="group item">
                    <!-- Desktop Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""
                         class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                    <!-- Mobile Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="" class="w-full md:hidden"/>
                    <!-- Item Gradient -->
                    <div class="item-gradient"></div>
                    <!-- Item Text -->
                    <h5>Deep Earth</h5>
                </div>
            </div>

            <!-- Item Container 2 -->
            <div class="item-container flex justify-center mx-auto my-8">
                <!-- Item 1 -->
                <div class="group item">
                    <!-- Desktop Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""
                         class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                    <!-- Mobile Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="" class="w-full md:hidden"/>
                    <!-- Item Gradient -->
                    <div class="item-gradient"></div>
                    <!-- Item Text -->
                    <h5>From Up Above VR</h5>
                </div>

                <!-- Item 2 -->
                <div class="group item">
                    <!-- Desktop Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""
                         class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                    <!-- Mobile Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="" class="w-full md:hidden"/>
                    <!-- Item Gradient -->
                    <div class="item-gradient"></div>
                    <!-- Item Text -->
                    <h5>From Up Above VR</h5>
                </div>

                <!-- Item 3 -->
                <div class="group item">
                    <!-- Desktop Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""
                         class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                    <!-- Mobile Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="" class="w-full md:hidden"/>
                    <!-- Item Gradient -->
                    <div class="item-gradient"></div>
                    <!-- Item Text -->
                    <h5>From Up Above VR</h5>
                </div>

                <!-- Item 4 -->
                <div class="group item">
                    <!-- Desktop Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt=""
                         class="hidden w-60 duration-200 md:block group-hover:scale-110"/>
                    <!-- Mobile Image -->
                    <img src="{{ Vite::asset('resources/images/front/borsch.png') }}" alt="" class="w-full md:hidden"/>
                    <!-- Item Gradient -->
                    <div class="item-gradient"></div>
                    <!-- Item Text -->
                    <h5>From Up Above VR</h5>
                </div>
            </div>
            <!-- Bottom Button Container -->
            <div class="flex justify-center mt-10 md:hidden">
                <button class="btn w-full md:hidden">See All</button>
            </div>
        </div>
    </section>

@endsection
