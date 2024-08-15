@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                {{-- Button section--}}
                <div class="my-4 p-4 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm bg-white dark:bg-boxdark">
                        <div class="flex justify-end gap-5 xl:gap-20">
                            <a class="inline-flex items-center justify-center rounded-md border border-black px-10 py-4 text-center font-medium text-black hover:font-900 hover:bg-opacity-90 lg:px-8 xl:px-10 dark:bg-white"
                               href={{ route('admin.statements.create') }}>
                                Create Statement
                            </a>
                        </div>
                    </div>
                </div>
                {{-- END Button section --}}

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
                @foreach($statements as $statement)
                    <div class="bg-white dark:bg-boxdark">
                        <!-- table row item -->
                        <div class="grid grid-cols-2 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                            <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                <p class="text-[#637381] dark:text-bodydark">{{ $statement->name }}</p>
                            </div>

                            <div class="flex flex-row justify-end">
                                <a class="flex items-center justify-center w-12 px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4"
                                   href="{{ route('admin.statements.edit', ['statement' => $statement])}}">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <div class="flex items-center justify-center">
                                    <form action="{{ route('admin.statements.delete', ['statements' => $statement]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Statement?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-12 px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                            <i class="fa fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

                @if(isset($statements))
                    {{ $statements->links() }}
                @endif
                <!-- table body end -->
            </div>
        </div>
    </div>



    <!-- ===== Main Content End ===== -->

@endsection
