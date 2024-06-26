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
                    Carousel
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.blade.php">Dashboard /</a>
                        </li>
                        <li class="font-medium text-primary">Carousel</li>
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
                            Slider With Controls
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div class="swiper carouselOne">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-01.jpg"
                                        alt="carousel"
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-02.jpg"
                                        alt="carousel"
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-03.jpg"
                                        alt="carousel"
                                    />
                                </div>
                            </div>
                            <div class="swiper-button-next">
                                <svg
                                    class="fill-current"
                                    width="12"
                                    height="20"
                                    viewBox="0 0 12 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M1.75938 19.4875C1.53438 19.4875 1.34687 19.4125 1.15937 19.2625C0.821875 18.925 0.821875 18.4 1.15937 18.0625L9.03437 9.99998L1.15937 1.97498C0.821875 1.63748 0.821875 1.11248 1.15937 0.774976C1.49687 0.437476 2.02187 0.437476 2.35937 0.774976L10.8344 9.39997C11.1719 9.73748 11.1719 10.2625 10.8344 10.6L2.35937 19.225C2.20937 19.375 1.98438 19.4875 1.75938 19.4875Z"
                                        fill=""
                                    />
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg
                                    class="fill-current"
                                    width="12"
                                    height="20"
                                    viewBox="0 0 12 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M10.2344 19.4875C10.0094 19.4875 9.78438 19.4125 9.63437 19.225L1.15937 10.6C0.821875 10.2625 0.821875 9.73748 1.15937 9.39997L9.63437 0.774976C9.97188 0.437476 10.4969 0.437476 10.8344 0.774976C11.1719 1.11248 11.1719 1.63748 10.8344 1.97498L2.95937 9.99998L10.8719 18.025C11.2094 18.3625 11.2094 18.8875 10.8719 19.225C10.6469 19.375 10.4594 19.4875 10.2344 19.4875Z"
                                        fill=""
                                    />
                                </svg>
                            </div>
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
                            Slider With Indicators
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div class="swiper carouselTwo">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-02.jpg"
                                        alt="carousel"
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-03.jpg"
                                        alt="carousel"
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-01.jpg"
                                        alt="carousel"
                                    />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
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
                            Slider With Controls & Indicators
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-10">
                        <div class="swiper carouselThree">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-03.jpg"
                                        alt="carousel"
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-01.jpg"
                                        alt="carousel"
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./images/carousel/carousel-02.jpg"
                                        alt="carousel"
                                    />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next">
                                <svg
                                    class="fill-current"
                                    width="12"
                                    height="20"
                                    viewBox="0 0 12 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M1.75938 19.4875C1.53438 19.4875 1.34687 19.4125 1.15937 19.2625C0.821875 18.925 0.821875 18.4 1.15937 18.0625L9.03437 9.99998L1.15937 1.97498C0.821875 1.63748 0.821875 1.11248 1.15937 0.774976C1.49687 0.437476 2.02187 0.437476 2.35937 0.774976L10.8344 9.39997C11.1719 9.73748 11.1719 10.2625 10.8344 10.6L2.35937 19.225C2.20937 19.375 1.98438 19.4875 1.75938 19.4875Z"
                                        fill=""
                                    />
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg
                                    class="fill-current"
                                    width="12"
                                    height="20"
                                    viewBox="0 0 12 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M10.2344 19.4875C10.0094 19.4875 9.78438 19.4125 9.63437 19.225L1.15937 10.6C0.821875 10.2625 0.821875 9.73748 1.15937 9.39997L9.63437 0.774976C9.97188 0.437476 10.4969 0.437476 10.8344 0.774976C11.1719 1.11248 11.1719 1.63748 10.8344 1.97498L2.95937 9.99998L10.8719 18.025C11.2094 18.3625 11.2094 18.8875 10.8719 19.225C10.6469 19.375 10.4594 19.4875 10.2344 19.4875Z"
                                        fill=""
                                    />
                                </svg>
                            </div>
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
