@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-full p-4 md:p-6 2xl:p-10">
            <div class="mt-4 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
                <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                    Hello  <strong>{{ Auth::user()->name }}</strong> !
                    Welcome to the Admin panel of Sandy's Ukrainian Products site
                </div>
            </div>
        </div>
    </main>
    <!-- ===== Main Content End ===== -->

@endsection
