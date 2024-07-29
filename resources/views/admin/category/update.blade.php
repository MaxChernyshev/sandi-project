@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">
                <div class="rounded-sm bg-white dark:bg-boxdark">
                    <div class="flex justify-start gap-5 xl:gap-20">
                    {{--        @dump($category->id);--}}
                    {{--        @dump($category->name);--}}

                    <p>
                        UPDATE BLADE
                    </p>

                        {{-- TODO Button BACK --}}
                </div>
            </div>
        </div>
    </div>


    {{--        <div class="max-w-full overflow-x-auto">--}}
    {{--            <div class="min-w-[1170px]">--}}
    {{--                <!-- table header start -->--}}
    {{--                <div class="grid grid-cols-2 rounded-t-[10px] bg-boxdark px-5 py-4 lg:px-7.5 2xl:px-11">--}}
    {{--                    <div class="w-full px-4 py-2 text-sm items-center">--}}
    {{--                        <h5 class="font-medium text-white">Name</h5>--}}
    {{--                    </div>--}}

    {{--                    <div class="w-full px-4 py-2 text-sm items-center justify-end">--}}
    {{--                        <h5 class="text-right font-medium text-white">Actions</h5>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- table header end -->--}}

    {{--                <!-- table body start -->--}}
    {{--                @foreach($categories as $category)--}}
    {{--                    <div class="bg-white dark:bg-boxdark">--}}
    {{--                        <!-- table row item -->--}}
    {{--                        <div class="grid grid-cols-2 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">--}}
    {{--                            <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">--}}
    {{--                                <p class="text-[#637381] dark:text-bodydark">{{ $category }}</p>--}}
    {{--                            </div>--}}

    {{--                            <div class="flex flex-row justify-end">--}}
    {{--                                <a class="flex items-center justify-center w-12 px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">--}}
    {{--                                    <i class="fa fa-edit"></i>--}}
    {{--                                </a>--}}
    {{--                                <a class="flex items-center justify-center w-12 px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">--}}
    {{--                                    <i class="fa fa-trash-can"></i>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                @endforeach--}}
    {{--                <!-- table body end -->--}}
    {{--            </div>--}}
    {{--        </div>--}}
    </div>



    <!-- ===== Main Content End ===== -->

@endsection