@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                {{-- Button section--}}
                <x-admin.back-button message="Create Product" :href="route('admin.products.create')"/>
                {{-- END Button section --}}

                {{-- Import Products Button section--}}
                <x-admin.back-button message="Import Products" :href="route('admin.products.import.view')"/>
                {{-- END Import Products Button section --}}

                {{-- Search section--}}
                <x-admin.search-form
                    method="GET"
                    :route="route('admin.products.index')"
                    fieldType="text"
                    name="name"
                    placeHolder="Search Products"
                    buttonName="Search Products"
                    message="Create Products"
                    :href="route('admin.products.create')"/>
                {{-- END Search section --}}

                <!-- table header start -->
                {{--                <div class="grid grid-cols-4 rounded-t-[10px] bg-boxdark px-5 py-4 lg:px-7.5 2xl:px-11">--}}
                {{--                    <div class="w-full px-4 py-2 text-sm items-center">--}}
                {{--                        <h5 class="font-medium text-white">Name</h5>--}}
                {{--                    </div>--}}
                {{--                    <div class="w-full px-4 py-2 text-sm items-center">--}}
                {{--                        <h5 class="font-medium text-white">Category</h5>--}}
                {{--                    </div>--}}
                {{--                    <div class="w-full px-4 py-2 text-sm items-center">--}}
                {{--                        <h5 class="font-medium text-white">Image</h5>--}}
                {{--                    </div>--}}

                {{--                    <div class="w-full px-4 py-2 text-sm items-center justify-end">--}}
                {{--                        <h5 class="text-right font-medium text-white">Actions</h5>--}}
                {{--                    </div>--}}


                {{--                </div>--}}


                <div class="grid grid-cols-5 rounded-t-[10px] bg-boxdark px-5 py-4 lg:px-7.5 2xl:px-11">
                    <div class="w-full px-4 py-2 text-sm items-center">
                        <h5 class="font-medium text-white">Name</h5>
                    </div>
                    <div class="w-full px-4 py-2 text-sm items-center">
                        <h5 class="font-medium text-white">Category</h5>
                    </div>
                    <div class="w-full px-4 py-2 text-sm items-center">
                        <h5 class="font-medium text-white">Image</h5>
                    </div>
                    <div class="w-full px-4 py-2 text-sm items-center">
                        <h5 class="font-medium text-white"></h5>
                    </div>

                    <div class="w-full px-4 py-2 text-sm items-center justify-end">
                        <h5 class="text-right font-medium text-white">Actions</h5>
                    </div>


                </div>
                <!-- table header end -->

                <!-- table body start -->
                @foreach($products as $product)
                    <div class="bg-white dark:bg-boxdark">
                        <!-- table row item -->
                        <div class="grid grid-cols-5 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                            <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                <p class="text-[#637381] dark:text-bodydark">{{ $product->name }}</p>
                            </div>

                            <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                <p class="text-[#637381] dark:text-bodydark">{{ $product->category->name ?? 'no category'}}</p>
                            </div>

                            {{-- TODO insert LiveWire for Image with temporary URL--}}

                            <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                <img class="object-none h-16 w-16" src="{{ $product->image ? $product->image->image_path : '/storage/no-photos.png' }}" alt="no image">
                            </div>
                            <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                            </div>

                            <div class="flex flex-row justify-end">

                                <x-admin.edit-icon href="{{ route('admin.products.edit', ['product' => $product])}}"/>

                                <x-admin.delete-icon action="{{ route('admin.products.delete', ['product' => $product])}}" nameOfInstance="Product"/>

                            </div>

                        </div>
                    </div>
                @endforeach

                @if(isset($products))
                    {{ $products->links() }}
                @endif
                <!-- table body end -->
            </div>
        </div>
    </div>



    <!-- ===== Main Content End ===== -->

@endsection
