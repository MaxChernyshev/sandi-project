@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                {{-- Button section--}}
                <x-admin.back-button message="Create Ingridient" :href="route('admin.ingridients.create')"/>
                {{-- END Button section --}}

                {{-- Search section--}}
                <x-admin.search-form
                    method="GET"
                    :route="route('admin.ingridients.index')"
                    fieldType="text"
                    name="name"
                    placeHolder="Search Ingridient"
                    buttonName="Search Ingridient"
                    message="Create Ingridient"
                    :href="route('admin.ingridients.create')"/>
                {{-- END Search section --}}


                <!-- table header start -->
                <div class="grid grid-cols-2 rounded-t-[10px] bg-boxdark px-5 py-4 lg:px-7.5 2xl:px-11">
                    <div class="w-full px-4 py-2 text-sm items-center">
                        <h5 class="font-medium text-white">Name</h5>
                    </div>

                    <div class="w-full px-4 py-2 text-sm items-center justify-end">
                        <h5 class="text-right font-medium text-white">Actions</h5>
                    </div>

                </div>
                <!-- table header end -->

                <!-- table body start -->
                @foreach($ingridients as $ingridient)
                    <div class="bg-white dark:bg-boxdark">
                        <!-- table row item -->
                        <div class="grid grid-cols-2 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                            <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                <p class="text-[#637381] dark:text-bodydark">{{ $ingridient->name }}</p>
                            </div>

                            <div class="flex flex-row justify-end">

                                <x-admin.edit-icon href="{{ route('admin.ingridients.edit', ['ingridient' => $ingridient])}}"/>

                                <x-admin.delete-icon action="{{ route('admin.ingridients.delete', ['ingridient' => $ingridient])}}" nameOfInstance="Ingridient"/>

                            </div>

                        </div>
                    </div>
                @endforeach

                @if(isset($ingridients))
                    {{ $ingridients->links() }}
                @endif
                <!-- table body end -->

            </div>
        </div>
    </div>



    <!-- ===== Main Content End ===== -->

@endsection
