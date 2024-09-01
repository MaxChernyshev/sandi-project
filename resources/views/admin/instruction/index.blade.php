@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <div class="mx-4 p-4">Ï
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                {{-- Button section--}}
                <x-admin.back-button message="Create Instruction" :href="route('admin.instructions.create')"/>
                {{-- END Button section --}}

                @if(!isset($instructions))
                    <div>
                        NO Instructions
                    </div>
                @else

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
                    @foreach($instructions as $instruction)
                        <div class="bg-white dark:bg-boxdark">
                            <!-- table row item -->
                            <div class="grid grid-cols-2 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                                <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                    <p class="text-[#637381] dark:text-bodydark">{{ $instruction->title }}</p>
                                </div>

                                <div class="flex flex-row justify-end">

                                    <x-admin.edit-icon href="{{ route('admin.instructions.edit', ['instruction' => $instruction])}}"/>

                                    <x-admin.delete-icon action="{{ route('admin.instructions.delete', ['instruction' => $instruction])}}" nameOfInstance="Instruction"/>

                                </div>

                            </div>
                        </div>
                    @endforeach
                @endif

                @if(isset($instructions))
                    {{ $instructions->links() }}
                @endif
                <!-- table body end -->

            </div>
        </div>
    </div>



    <!-- ===== Main Content End ===== -->

@endsection
