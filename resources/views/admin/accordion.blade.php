@extends('admin.layouts.layout')

@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Accordion
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.blade.php">Dashboard /</a>
                        </li>
                        <li class="font-medium text-primary">Accordion</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->

            <div class="flex flex-col gap-7.5">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-9"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Accordions Style 1
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-9">
                        <div class="grid grid-cols-1 gap-4 md:gap-6 xl:grid-cols-2 xl:gap-7.5"
                        >
                            <div class="flex flex-col gap-6">
                                <!-- Accordion Item -->
                                <div
                                    x-data="{ accordionOpen: false }"
                                    @click.outside="accordionOpen = false"
                                    class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none sm:p-6"
                                >
                                    <button
                                        @click="accordionOpen = !accordionOpen"
                                        class="flex w-full items-center gap-1.5 sm:gap-3 xl:gap-6"
                                    >
                                        <div
                                            class="flex h-10.5 w-full max-w-10.5 items-center justify-center rounded-md bg-[#F3F5FC] dark:bg-meta-4"
                                        >
                                            <svg
                                                :class="accordionOpen && 'rotate-180'"
                                                class="fill-primary stroke-primary duration-200 ease-in-out dark:fill-white dark:stroke-white"
                                                width="18"
                                                height="10"
                                                viewBox="0 0 18 10"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M8.28882 8.43257L8.28874 8.43265L8.29692 8.43985C8.62771 8.73124 9.02659 8.86001 9.41667 8.86001C9.83287 8.86001 10.2257 8.69083 10.5364 8.41713L10.5365 8.41721L10.5438 8.41052L16.765 2.70784L16.771 2.70231L16.7769 2.69659C17.1001 2.38028 17.2005 1.80579 16.8001 1.41393C16.4822 1.1028 15.9186 1.00854 15.5268 1.38489L9.41667 7.00806L3.3019 1.38063L3.29346 1.37286L3.28467 1.36548C2.93287 1.07036 2.38665 1.06804 2.03324 1.41393L2.0195 1.42738L2.00683 1.44184C1.69882 1.79355 1.69773 2.34549 2.05646 2.69659L2.06195 2.70196L2.0676 2.70717L8.28882 8.43257Z"
                                                    fill=""
                                                    stroke=""
                                                />
                                            </svg>
                                        </div>

                                        <div>
                                            <h4 class="text-left text-title-xsm font-medium text-black dark:text-white">
                                                How long we deliver your first blog post?
                                            </h4>
                                        </div>
                                    </button>

                                    <div
                                        x-show="accordionOpen"
                                        class="ml-16.5 mt-5 duration-200 ease-in-out">
                                        <p class="font-medium">
                                            It takes 2-3 weeks to get your first blog post
                                            ready. That includes the in-depth research &
                                            creation of your monthly content marketing strategy
                                            that we do before writing your first blog post,
                                            Ipsum available .
                                        </p>
                                    </div>
                                </div>

                                <!-- Accordion Item -->
                                <div
                                    x-data="{ accordionOpen: false }"
                                    @click.outside="accordionOpen = false"
                                    class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none sm:p-6"
                                >
                                    <button
                                        @click="accordionOpen = !accordionOpen"
                                        class="flex w-full items-center gap-1.5 sm:gap-3 xl:gap-6"
                                    >
                                        <div
                                            class="flex h-10.5 w-full max-w-10.5 items-center justify-center rounded-md bg-[#F3F5FC] dark:bg-meta-4"
                                        >
                                            <svg
                                                :class="accordionOpen && 'rotate-180'"
                                                class="fill-primary stroke-primary duration-200 ease-in-out dark:fill-white dark:stroke-white"
                                                width="18"
                                                height="10"
                                                viewBox="0 0 18 10"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M8.28882 8.43257L8.28874 8.43265L8.29692 8.43985C8.62771 8.73124 9.02659 8.86001 9.41667 8.86001C9.83287 8.86001 10.2257 8.69083 10.5364 8.41713L10.5365 8.41721L10.5438 8.41052L16.765 2.70784L16.771 2.70231L16.7769 2.69659C17.1001 2.38028 17.2005 1.80579 16.8001 1.41393C16.4822 1.1028 15.9186 1.00854 15.5268 1.38489L9.41667 7.00806L3.3019 1.38063L3.29346 1.37286L3.28467 1.36548C2.93287 1.07036 2.38665 1.06804 2.03324 1.41393L2.0195 1.42738L2.00683 1.44184C1.69882 1.79355 1.69773 2.34549 2.05646 2.69659L2.06195 2.70196L2.0676 2.70717L8.28882 8.43257Z"
                                                    fill=""
                                                    stroke=""
                                                />
                                            </svg>
                                        </div>

                                        <div>
                                            <h4
                                                class="text-left text-title-xsm font-medium text-black dark:text-white"
                                            >
                                                How long we deliver your first blog post?
                                            </h4>
                                        </div>
                                    </button>

                                    <div
                                        x-show="accordionOpen"
                                        class="ml-16.5 mt-5 duration-200 ease-in-out"
                                    >
                                        <p class="font-medium">
                                            It takes 2-3 weeks to get your first blog post
                                            ready. That includes the in-depth research &
                                            creation of your monthly content marketing strategy
                                            that we do before writing your first blog post,
                                            Ipsum available .
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-6">
                                <!-- Accordion Item -->
                                <div
                                    x-data="{ accordionOpen: false }"
                                    @click.outside="accordionOpen = false"
                                    class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none sm:p-6"
                                >
                                    <button
                                        @click="accordionOpen = !accordionOpen"
                                        class="flex w-full items-center gap-1.5 sm:gap-3 xl:gap-6"
                                    >
                                        <div
                                            class="flex h-10.5 w-full max-w-10.5 items-center justify-center rounded-md bg-[#F3F5FC] dark:bg-meta-4"
                                        >
                                            <svg
                                                :class="accordionOpen && 'rotate-180'"
                                                class="fill-primary stroke-primary duration-200 ease-in-out dark:fill-white dark:stroke-white"
                                                width="18"
                                                height="10"
                                                viewBox="0 0 18 10"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M8.28882 8.43257L8.28874 8.43265L8.29692 8.43985C8.62771 8.73124 9.02659 8.86001 9.41667 8.86001C9.83287 8.86001 10.2257 8.69083 10.5364 8.41713L10.5365 8.41721L10.5438 8.41052L16.765 2.70784L16.771 2.70231L16.7769 2.69659C17.1001 2.38028 17.2005 1.80579 16.8001 1.41393C16.4822 1.1028 15.9186 1.00854 15.5268 1.38489L9.41667 7.00806L3.3019 1.38063L3.29346 1.37286L3.28467 1.36548C2.93287 1.07036 2.38665 1.06804 2.03324 1.41393L2.0195 1.42738L2.00683 1.44184C1.69882 1.79355 1.69773 2.34549 2.05646 2.69659L2.06195 2.70196L2.0676 2.70717L8.28882 8.43257Z"
                                                    fill=""
                                                    stroke=""
                                                />
                                            </svg>
                                        </div>

                                        <div>
                                            <h4
                                                class="text-left text-title-xsm font-medium text-black dark:text-white"
                                            >
                                                How long we deliver your first blog post?
                                            </h4>
                                        </div>
                                    </button>

                                    <div
                                        x-show="accordionOpen"
                                        class="ml-16.5 mt-5 duration-200 ease-in-out"
                                    >
                                        <p class="font-medium">
                                            It takes 2-3 weeks to get your first blog post
                                            ready. That includes the in-depth research &
                                            creation of your monthly content marketing strategy
                                            that we do before writing your first blog post,
                                            Ipsum available .
                                        </p>
                                    </div>
                                </div>

                                <!-- Accordion Item -->
                                <div
                                    x-data="{ accordionOpen: false }"
                                    @click.outside="accordionOpen = false"
                                    class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none sm:p-6"
                                >
                                    <button
                                        @click="accordionOpen = !accordionOpen"
                                        class="flex w-full items-center gap-1.5 sm:gap-3 xl:gap-6"
                                    >
                                        <div
                                            class="flex h-10.5 w-full max-w-10.5 items-center justify-center rounded-md bg-[#F3F5FC] dark:bg-meta-4"
                                        >
                                            <svg
                                                :class="accordionOpen && 'rotate-180'"
                                                class="fill-primary stroke-primary duration-200 ease-in-out dark:fill-white dark:stroke-white"
                                                width="18"
                                                height="10"
                                                viewBox="0 0 18 10"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M8.28882 8.43257L8.28874 8.43265L8.29692 8.43985C8.62771 8.73124 9.02659 8.86001 9.41667 8.86001C9.83287 8.86001 10.2257 8.69083 10.5364 8.41713L10.5365 8.41721L10.5438 8.41052L16.765 2.70784L16.771 2.70231L16.7769 2.69659C17.1001 2.38028 17.2005 1.80579 16.8001 1.41393C16.4822 1.1028 15.9186 1.00854 15.5268 1.38489L9.41667 7.00806L3.3019 1.38063L3.29346 1.37286L3.28467 1.36548C2.93287 1.07036 2.38665 1.06804 2.03324 1.41393L2.0195 1.42738L2.00683 1.44184C1.69882 1.79355 1.69773 2.34549 2.05646 2.69659L2.06195 2.70196L2.0676 2.70717L8.28882 8.43257Z"
                                                    fill=""
                                                    stroke=""
                                                />
                                            </svg>
                                        </div>

                                        <div>
                                            <h4
                                                class="text-left text-title-xsm font-medium text-black dark:text-white"
                                            >
                                                How long we deliver your first blog post?
                                            </h4>
                                        </div>
                                    </button>

                                    <div
                                        x-show="accordionOpen"
                                        class="ml-16.5 mt-5 duration-200 ease-in-out"
                                    >
                                        <p class="font-medium">
                                            It takes 2-3 weeks to get your first blog post
                                            ready. That includes the in-depth research &
                                            creation of your monthly content marketing strategy
                                            that we do before writing your first blog post,
                                            Ipsum available .
                                        </p>
                                    </div>
                                </div>

                                <!-- Accordion Item -->
                                <div
                                    x-data="{ accordionOpen: false }"
                                    @click.outside="accordionOpen = false"
                                    class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none sm:p-6"
                                >
                                    <button
                                        @click="accordionOpen = !accordionOpen"
                                        class="flex w-full items-center gap-1.5 sm:gap-3 xl:gap-6"
                                    >
                                        <div
                                            class="flex h-10.5 w-full max-w-10.5 items-center justify-center rounded-md bg-[#F3F5FC] dark:bg-meta-4"
                                        >
                                            <svg
                                                :class="accordionOpen && 'rotate-180'"
                                                class="fill-primary stroke-primary duration-200 ease-in-out dark:fill-white dark:stroke-white"
                                                width="18"
                                                height="10"
                                                viewBox="0 0 18 10"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M8.28882 8.43257L8.28874 8.43265L8.29692 8.43985C8.62771 8.73124 9.02659 8.86001 9.41667 8.86001C9.83287 8.86001 10.2257 8.69083 10.5364 8.41713L10.5365 8.41721L10.5438 8.41052L16.765 2.70784L16.771 2.70231L16.7769 2.69659C17.1001 2.38028 17.2005 1.80579 16.8001 1.41393C16.4822 1.1028 15.9186 1.00854 15.5268 1.38489L9.41667 7.00806L3.3019 1.38063L3.29346 1.37286L3.28467 1.36548C2.93287 1.07036 2.38665 1.06804 2.03324 1.41393L2.0195 1.42738L2.00683 1.44184C1.69882 1.79355 1.69773 2.34549 2.05646 2.69659L2.06195 2.70196L2.0676 2.70717L8.28882 8.43257Z"
                                                    fill=""
                                                    stroke=""
                                                />
                                            </svg>
                                        </div>

                                        <div>
                                            <h4
                                                class="text-left text-title-xsm font-medium text-black dark:text-white"
                                            >
                                                How long we deliver your first blog post?
                                            </h4>
                                        </div>
                                    </button>

                                    <div
                                        x-show="accordionOpen"
                                        class="ml-16.5 mt-5 duration-200 ease-in-out"
                                    >
                                        <p class="font-medium">
                                            It takes 2-3 weeks to get your first blog post
                                            ready. That includes the in-depth research &
                                            creation of your monthly content marketing strategy
                                            that we do before writing your first blog post,
                                            Ipsum available .
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-9"
                    >
                        <h3 class="font-medium text-black dark:text-white">
                            Accordions Style 2
                        </h3>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-9">
                        <div class="flex flex-col gap-7.5">
                            <!-- Accordion Item -->
                            <div
                                x-data="{ accordionOpen: false }"
                                @click.outside="accordionOpen = false"
                                class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none md:p-6 xl:p-7.5"
                            >
                                <button
                                    @click="accordionOpen = !accordionOpen"
                                    class="flex w-full items-center justify-between gap-2"
                                >
                                    <div>
                                        <h4
                                            class="text-left text-title-xsm font-bold text-black dark:text-white sm:text-title-md"
                                        >
                                            Can I use TailGrids Pro for my clients projects?
                                        </h4>
                                    </div>

                                    <div
                                        class="flex h-9 w-full max-w-9 items-center justify-center rounded-full border border-primary dark:border-white"
                                    >
                                        <svg
                                            :class="accordionOpen && 'hidden'"
                                            class="fill-primary dark:fill-white"
                                            width="15"
                                            height="15"
                                            viewBox="0 0 15 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13.2969 6.51563H8.48438V1.70312C8.48438 1.15625 8.04688 0.773438 7.5 0.773438C6.95313 0.773438 6.57031 1.21094 6.57031 1.75781V6.57031H1.75781C1.21094 6.57031 0.828125 7.00781 0.828125 7.55469C0.828125 8.10156 1.26563 8.48438 1.8125 8.48438H6.625V13.2969C6.625 13.8438 7.0625 14.2266 7.60938 14.2266C8.15625 14.2266 8.53906 13.7891 8.53906 13.2422V8.42969H13.3516C13.8984 8.42969 14.2813 7.99219 14.2813 7.44531C14.2266 6.95312 13.7891 6.51563 13.2969 6.51563Z"
                                                fill=""
                                            />
                                        </svg>

                                        <svg
                                            :class="accordionOpen === true ? 'block' : 'hidden'"
                                            class="fill-primary dark:fill-white"
                                            width="15"
                                            height="3"
                                            viewBox="0 0 15 3"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13.503 0.447144C13.446 0.447144 13.503 0.447144 13.503 0.447144H1.49482C0.925718 0.447144 0.527344 0.902427 0.527344 1.47153C0.527344 2.04064 0.982629 2.43901 1.55173 2.43901H13.5599C14.129 2.43901 14.5273 1.98373 14.5273 1.41462C14.4704 0.902427 14.0151 0.447144 13.503 0.447144Z"
                                                fill=""
                                            />
                                        </svg>
                                    </div>
                                </button>

                                <div
                                    x-show="accordionOpen"
                                    class="mt-5 duration-200 ease-in-out"
                                >
                                    <p class="max-w-[830px] font-medium">
                                        There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration
                                        in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be
                                        sure there isn't anything.
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion Item -->
                            <div
                                x-data="{ accordionOpen: false }"
                                @click.outside="accordionOpen = false"
                                class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none md:p-6 xl:p-7.5"
                            >
                                <button
                                    @click="accordionOpen = !accordionOpen"
                                    class="flex w-full items-center justify-between gap-2"
                                >
                                    <div>
                                        <h4
                                            class="text-left text-title-xsm font-bold text-black dark:text-white sm:text-title-md"
                                        >
                                            Which license type is suitable for me?
                                        </h4>
                                    </div>

                                    <div
                                        class="flex h-9 w-full max-w-9 items-center justify-center rounded-full border border-primary dark:border-white"
                                    >
                                        <svg
                                            :class="accordionOpen && 'hidden'"
                                            class="fill-primary dark:fill-white"
                                            width="15"
                                            height="15"
                                            viewBox="0 0 15 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13.2969 6.51563H8.48438V1.70312C8.48438 1.15625 8.04688 0.773438 7.5 0.773438C6.95313 0.773438 6.57031 1.21094 6.57031 1.75781V6.57031H1.75781C1.21094 6.57031 0.828125 7.00781 0.828125 7.55469C0.828125 8.10156 1.26563 8.48438 1.8125 8.48438H6.625V13.2969C6.625 13.8438 7.0625 14.2266 7.60938 14.2266C8.15625 14.2266 8.53906 13.7891 8.53906 13.2422V8.42969H13.3516C13.8984 8.42969 14.2813 7.99219 14.2813 7.44531C14.2266 6.95312 13.7891 6.51563 13.2969 6.51563Z"
                                                fill=""
                                            />
                                        </svg>

                                        <svg
                                            :class="accordionOpen === true ? 'block' : 'hidden'"
                                            class="fill-primary dark:fill-white"
                                            width="15"
                                            height="3"
                                            viewBox="0 0 15 3"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13.503 0.447144C13.446 0.447144 13.503 0.447144 13.503 0.447144H1.49482C0.925718 0.447144 0.527344 0.902427 0.527344 1.47153C0.527344 2.04064 0.982629 2.43901 1.55173 2.43901H13.5599C14.129 2.43901 14.5273 1.98373 14.5273 1.41462C14.4704 0.902427 14.0151 0.447144 13.503 0.447144Z"
                                                fill=""
                                            />
                                        </svg>
                                    </div>
                                </button>

                                <div
                                    x-show="accordionOpen"
                                    class="mt-5 duration-200 ease-in-out"
                                >
                                    <p class="max-w-[830px] font-medium">
                                        There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration
                                        in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be
                                        sure there isn't anything.
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion Item -->
                            <div
                                x-data="{ accordionOpen: false }"
                                @click.outside="accordionOpen = false"
                                class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none md:p-6 xl:p-7.5"
                            >
                                <button
                                    @click="accordionOpen = !accordionOpen"
                                    class="flex w-full items-center justify-between gap-2"
                                >
                                    <div>
                                        <h4
                                            class="text-left text-title-xsm font-bold text-black dark:text-white sm:text-title-md"
                                        >
                                            Is Windy UI Well-documented?
                                        </h4>
                                    </div>

                                    <div
                                        class="flex h-9 w-full max-w-9 items-center justify-center rounded-full border border-primary dark:border-white"
                                    >
                                        <svg
                                            :class="accordionOpen && 'hidden'"
                                            class="fill-primary dark:fill-white"
                                            width="15"
                                            height="15"
                                            viewBox="0 0 15 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13.2969 6.51563H8.48438V1.70312C8.48438 1.15625 8.04688 0.773438 7.5 0.773438C6.95313 0.773438 6.57031 1.21094 6.57031 1.75781V6.57031H1.75781C1.21094 6.57031 0.828125 7.00781 0.828125 7.55469C0.828125 8.10156 1.26563 8.48438 1.8125 8.48438H6.625V13.2969C6.625 13.8438 7.0625 14.2266 7.60938 14.2266C8.15625 14.2266 8.53906 13.7891 8.53906 13.2422V8.42969H13.3516C13.8984 8.42969 14.2813 7.99219 14.2813 7.44531C14.2266 6.95312 13.7891 6.51563 13.2969 6.51563Z"
                                                fill=""
                                            />
                                        </svg>

                                        <svg
                                            :class="accordionOpen === true ? 'block' : 'hidden'"
                                            class="fill-primary dark:fill-white"
                                            width="15"
                                            height="3"
                                            viewBox="0 0 15 3"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13.503 0.447144C13.446 0.447144 13.503 0.447144 13.503 0.447144H1.49482C0.925718 0.447144 0.527344 0.902427 0.527344 1.47153C0.527344 2.04064 0.982629 2.43901 1.55173 2.43901H13.5599C14.129 2.43901 14.5273 1.98373 14.5273 1.41462C14.4704 0.902427 14.0151 0.447144 13.503 0.447144Z"
                                                fill=""
                                            />
                                        </svg>
                                    </div>
                                </button>

                                <div
                                    x-show="accordionOpen"
                                    class="mt-5 duration-200 ease-in-out"
                                >
                                    <p class="max-w-[830px] font-medium">
                                        There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration
                                        in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be
                                        sure there isn't anything.
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion Item -->
                            <div
                                x-data="{ accordionOpen: false }"
                                @click.outside="accordionOpen = false"
                                class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none md:p-6 xl:p-7.5"
                            >
                                <button
                                    @click="accordionOpen = !accordionOpen"
                                    class="flex w-full items-center justify-between gap-2"
                                >
                                    <div>
                                        <h4
                                            class="text-left text-title-xsm font-bold text-black dark:text-white sm:text-title-md"
                                        >
                                            Do you provide support?
                                        </h4>
                                    </div>

                                    <div
                                        class="flex h-9 w-full max-w-9 items-center justify-center rounded-full border border-primary dark:border-white"
                                    >
                                        <svg
                                            :class="accordionOpen && 'hidden'"
                                            class="fill-primary dark:fill-white"
                                            width="15"
                                            height="15"
                                            viewBox="0 0 15 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13.2969 6.51563H8.48438V1.70312C8.48438 1.15625 8.04688 0.773438 7.5 0.773438C6.95313 0.773438 6.57031 1.21094 6.57031 1.75781V6.57031H1.75781C1.21094 6.57031 0.828125 7.00781 0.828125 7.55469C0.828125 8.10156 1.26563 8.48438 1.8125 8.48438H6.625V13.2969C6.625 13.8438 7.0625 14.2266 7.60938 14.2266C8.15625 14.2266 8.53906 13.7891 8.53906 13.2422V8.42969H13.3516C13.8984 8.42969 14.2813 7.99219 14.2813 7.44531C14.2266 6.95312 13.7891 6.51563 13.2969 6.51563Z"
                                                fill=""
                                            />
                                        </svg>

                                        <svg
                                            :class="accordionOpen === true ? 'block' : 'hidden'"
                                            class="fill-primary dark:fill-white"
                                            width="15"
                                            height="3"
                                            viewBox="0 0 15 3"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13.503 0.447144C13.446 0.447144 13.503 0.447144 13.503 0.447144H1.49482C0.925718 0.447144 0.527344 0.902427 0.527344 1.47153C0.527344 2.04064 0.982629 2.43901 1.55173 2.43901H13.5599C14.129 2.43901 14.5273 1.98373 14.5273 1.41462C14.4704 0.902427 14.0151 0.447144 13.503 0.447144Z"
                                                fill=""
                                            />
                                        </svg>
                                    </div>
                                </button>

                                <div
                                    x-show="accordionOpen"
                                    class="mt-5 duration-200 ease-in-out"
                                >
                                    <p class="max-w-[830px] font-medium">
                                        There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration
                                        in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be
                                        sure there isn't anything.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ===== Main Content End ===== -->
@endsection
