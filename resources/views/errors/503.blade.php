{{--@extends('errors::minimal')--}}
{{--@section('title', __('Service Unavailable'))--}}
{{--@section('code', '503')--}}
{{--@section('message', __('Service Unavailable'))--}}

@extends('errors.layout503')

@section('content')

<body>

<section class="py-20 lg:h-screen flex items-center justify-center bg-cover">
    <div class="container">
        <div class="grid lg:grid-cols-5 grid-cols-1 gap-20 items-center">
            <div class="lg:col-span-2">
                <img src="assets/images/logo-dark.png" class="h-12" alt="">
                <h2 class="md:text-5xl text-3xl font-semibold text-gray-950 mb-5 mt-12">Apologies!</h2>
                <h3 class="md:text-2xl text-xl font-semibold mb-5">We're currently undergoing some updates</h3>
                <div class="mt-7">
                    <p class="md:text-base text-sm font-medium text-gray-500">
                        We will be open soon!</p>

                </div>
            </div>


        </div>
    </div>
</section>

</body>
@endsection
