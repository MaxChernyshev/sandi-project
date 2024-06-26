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
                    Badge
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.blade.php">Dashboard /</a>
                        </li>
                        <li class="font-medium text-primary">Badge</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->

            <div class="flex flex-col gap-7.5">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Badge Style 1
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div class="flex flex-wrap items-center gap-2 sm:gap-4.5">
                            <button
                                class="inline-flex rounded bg-primary px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Primary
                            </button>
                            <button
                                class="inline-flex rounded bg-[#13C296] px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Secondary
                            </button>
                            <button
                                class="inline-flex rounded bg-[#212B36] px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Dark
                            </button>
                            <button
                                class="inline-flex rounded bg-[#637381] px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Gray
                            </button>
                            <button
                                class="inline-flex rounded bg-[#EFEFEF] px-2 py-1 text-sm font-medium text-[#212B36] hover:bg-opacity-90"
                            >
                                Light
                            </button>
                            <button
                                class="inline-flex rounded bg-[#F9C107] px-2 py-1 text-sm font-medium text-[#212B36] hover:bg-opacity-90"
                            >
                                Warning
                            </button>
                            <button
                                class="inline-flex rounded bg-[#DC3545] px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Danger
                            </button>
                            <button
                                class="inline-flex rounded bg-[#3CA745] px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Success
                            </button>
                            <button
                                class="inline-flex rounded bg-[#3BA2B8] px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Info
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Badge Style 2
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div class="flex flex-wrap items-center gap-2 sm:gap-4.5">
                            <button
                                class="inline-flex rounded border border-primary px-2 py-1 text-sm font-medium text-primary hover:opacity-80"
                            >
                                Primary
                            </button>
                            <button
                                class="inline-flex rounded border border-[#13C296] px-2 py-1 text-sm font-medium text-[#13C296] hover:opacity-80"
                            >
                                Secondary
                            </button>
                            <button
                                class="inline-flex rounded border border-[#212B36] px-2 py-1 text-sm font-medium text-[#212B36] hover:opacity-80 dark:border-white dark:text-white"
                            >
                                Dark
                            </button>
                            <button
                                class="inline-flex rounded border border-[#637381] px-2 py-1 text-sm font-medium text-[#637381] hover:opacity-80"
                            >
                                Gray
                            </button>
                            <button
                                class="inline-flex rounded border border-[#EFEFEF] px-2 py-1 text-sm font-medium text-[#212B36] hover:opacity-80 dark:text-white"
                            >
                                Light
                            </button>
                            <button
                                class="inline-flex rounded border border-[#F9C107] px-2 py-1 text-sm font-medium text-[#F9C107] hover:opacity-80"
                            >
                                Warning
                            </button>
                            <button
                                class="inline-flex rounded border border-[#DC3545] px-2 py-1 text-sm font-medium text-[#DC3545] hover:opacity-80"
                            >
                                Danger
                            </button>
                            <button
                                class="inline-flex rounded border border-[#3CA745] px-2 py-1 text-sm font-medium text-[#3CA745] hover:opacity-80"
                            >
                                Success
                            </button>
                            <button
                                class="inline-flex rounded border border-[#3BA2B8] px-2 py-1 text-sm font-medium text-[#3BA2B8] hover:opacity-80"
                            >
                                Info
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Badge Style 3
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div class="flex flex-wrap items-center gap-2 sm:gap-4.5">
                            <button
                                class="inline-flex rounded-full bg-primary px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Primary
                            </button>
                            <button
                                class="inline-flex rounded-full bg-[#13C296] px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Secondary
                            </button>
                            <button
                                class="inline-flex rounded-full bg-[#212B36] px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Dark
                            </button>
                            <button
                                class="inline-flex rounded-full bg-[#637381] px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Gray
                            </button>
                            <button
                                class="inline-flex rounded-full bg-[#EFEFEF] px-3 py-1 text-sm font-medium text-[#212B36] hover:bg-opacity-90"
                            >
                                Light
                            </button>
                            <button
                                class="inline-flex rounded-full bg-[#F9C107] px-3 py-1 text-sm font-medium text-[#212B36] hover:bg-opacity-90"
                            >
                                Warning
                            </button>
                            <button
                                class="inline-flex rounded-full bg-[#DC3545] px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Danger
                            </button>
                            <button
                                class="inline-flex rounded-full bg-[#3CA745] px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Success
                            </button>
                            <button
                                class="inline-flex rounded-full bg-[#3BA2B8] px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90"
                            >
                                Info
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Badge Style 4
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div class="flex flex-wrap items-center gap-2 sm:gap-4.5">
                            <button
                                class="inline-flex rounded-full border border-primary px-3 py-1 text-sm font-medium text-primary hover:opacity-80"
                            >
                                Primary
                            </button>
                            <button
                                class="inline-flex rounded-full border border-[#13C296] px-3 py-1 text-sm font-medium text-[#13C296] hover:opacity-80"
                            >
                                Secondary
                            </button>
                            <button
                                class="inline-flex rounded-full border border-[#212B36] px-3 py-1 text-sm font-medium text-[#212B36] hover:opacity-80 dark:border-white dark:text-white"
                            >
                                Dark
                            </button>
                            <button
                                class="inline-flex rounded-full border border-[#637381] px-3 py-1 text-sm font-medium text-[#637381] hover:opacity-80"
                            >
                                Gray
                            </button>
                            <button
                                class="inline-flex rounded-full border border-[#EFEFEF] px-3 py-1 text-sm font-medium text-[#212B36] hover:opacity-80 dark:text-white"
                            >
                                Light
                            </button>
                            <button
                                class="inline-flex rounded-full border border-[#F9C107] px-3 py-1 text-sm font-medium text-[#F9C107] hover:opacity-80"
                            >
                                Warning
                            </button>
                            <button
                                class="inline-flex rounded-full border border-[#DC3545] px-3 py-1 text-sm font-medium text-[#DC3545] hover:opacity-80"
                            >
                                Danger
                            </button>
                            <button
                                class="inline-flex rounded-full border border-[#3CA745] px-3 py-1 text-sm font-medium text-[#3CA745] hover:opacity-80"
                            >
                                Success
                            </button>
                            <button
                                class="inline-flex rounded-full border border-[#3BA2B8] px-3 py-1 text-sm font-medium text-[#3BA2B8] hover:opacity-80"
                            >
                                Info
                            </button>
                        </div>
                    </div>
                </div>
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
