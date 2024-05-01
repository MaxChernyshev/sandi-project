@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Chart
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.blade.php">Dashboard /</a>
                        </li>
                        <li class="font-medium text-primary">Chart</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->

            <div class="grid grid-cols-12 gap-4 md:gap-6 2xl:gap-7.5">
                <!-- ====== Chart Four Start -->
                <div class="col-span-12">
                    <include src="./partials/chart-04.html"/>
                </div>
                <!-- ====== Chart Four End -->

                <!-- ===== Chart Seven Start ===== -->
                <div class="col-span-12 xl:col-span-7">
                    <include src="./partials/chart-07.html"/>
                </div>
                <!-- ===== Chart Seven End ===== -->

                <!-- ===== Chart Eight Start ===== -->
                <div class="col-span-12 xl:col-span-5">
                    <include src="./partials/chart-08.html"/>
                </div>
                <!-- ===== Chart Eight End ===== -->

                <!-- ===== Chart Six Start ===== -->
                <div class="col-span-12 xl:col-span-7">
                    <include src="./partials/chart-06.html"/>
                </div>
                <!-- ===== Chart Six End ===== -->

                <!-- ===== Chart Nine Start ===== -->
                <div class="col-span-12 xl:col-span-5">
                    <include src="./partials/chart-09.html"/>
                </div>
                <!-- ===== Chart Nine End ===== -->

                <!-- ====== Chart Thirteen Start -->
                <include src="./partials/chart-13.html"/>
                <!-- ====== Chart Thirteen End -->
            </div>
        </div>
    </main>
    <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
    </body>
    </html>
@endsection
