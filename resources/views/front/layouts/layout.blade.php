@include('front.layouts.head')
@include('front.layouts.header')

<div class="relative flex flex-1 flex-col">
    @yield('content')
</div>

@include('front.layouts.footer')

