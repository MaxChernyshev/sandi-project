@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="grid grid-cols-12 gap-4 md:gap-6 2xl:gap-7.5">
                <!-- ====== Chart Four Start -->
                <div
                    class="col-span-12 flex flex-wrap items-center justify-between gap-3"
                >
                    <!-- Datepicker built with flatpickr -->
                    <div class="relative">
                        <input
                            class="datepicker w-[120%] rounded border border-stroke bg-white py-2 pl-10 pr-4 text-sm font-medium shadow-card-2 focus-visible:outline-none dark:border-strokedark dark:bg-boxdark"
                            placeholder="Select dates"
                            data-class="flatpickr-right"
                        />
                        <div
                            class="pointer-events-none absolute inset-0 left-4 right-auto flex items-center"
                        >
                            <svg
                                width="18"
                                height="18"
                                viewBox="0 0 18 18"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M3.75 3.75C3.33579 3.75 3 4.08579 3 4.5V15C3 15.4142 3.33579 15.75 3.75 15.75H14.25C14.6642 15.75 15 15.4142 15 15V4.5C15 4.08579 14.6642 3.75 14.25 3.75H3.75ZM1.5 4.5C1.5 3.25736 2.50736 2.25 3.75 2.25H14.25C15.4926 2.25 16.5 3.25736 16.5 4.5V15C16.5 16.2426 15.4926 17.25 14.25 17.25H3.75C2.50736 17.25 1.5 16.2426 1.5 15V4.5Z"
                                    fill="#64748B"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M12 0.75C12.4142 0.75 12.75 1.08579 12.75 1.5V4.5C12.75 4.91421 12.4142 5.25 12 5.25C11.5858 5.25 11.25 4.91421 11.25 4.5V1.5C11.25 1.08579 11.5858 0.75 12 0.75Z"
                                    fill="#64748B"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M6 0.75C6.41421 0.75 6.75 1.08579 6.75 1.5V4.5C6.75 4.91421 6.41421 5.25 6 5.25C5.58579 5.25 5.25 4.91421 5.25 4.5V1.5C5.25 1.08579 5.58579 0.75 6 0.75Z"
                                    fill="#64748B"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M1.5 7.5C1.5 7.08579 1.83579 6.75 2.25 6.75H15.75C16.1642 6.75 16.5 7.08579 16.5 7.5C16.5 7.91422 16.1642 8.25 15.75 8.25H2.25C1.83579 8.25 1.5 7.91422 1.5 7.5Z"
                                    fill="#64748B"
                                />
                            </svg>
                        </div>
                    </div>
                    <div
                        class="relative z-20 inline-block rounded bg-white shadow-card-2 dark:bg-boxdark"
                    >
                        <select
                            name=""
                            id=""
                            class="relative z-20 inline-flex appearance-none rounded border border-stroke bg-transparent py-2 pl-4 pr-9 text-sm outline-none dark:border-strokedark"
                        >
                            <option value="">Yearly</option>
                            <option value="">Monthly</option>
                        </select>
                        <span class="absolute right-3 top-1/2 z-10 -translate-y-1/2">
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M3.96967 6.21967C4.26256 5.92678 4.73744 5.92678 5.03033 6.21967L9 10.1893L12.9697 6.21967C13.2626 5.92678 13.7374 5.92678 14.0303 6.21967C14.3232 6.51256 14.3232 6.98744 14.0303 7.28033L9.53033 11.7803C9.23744 12.0732 8.76256 12.0732 8.46967 11.7803L3.96967 7.28033C3.67678 6.98744 3.67678 6.51256 3.96967 6.21967Z"
                          fill="#64748B"
                      />
                    </svg>
                  </span>
                    </div>
                </div>
                <include src="./partials/chart-04.html"/>
                <!-- ====== Chart Four End -->

                <!-- ====== Data Stats Start -->
                <div
                    class="col-span-12 rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                    <div
                        class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4 xl:gap-0"
                    >
                        <div
                            class="flex items-center justify-center gap-2 border-b border-stroke pb-5 dark:border-strokedark xl:border-b-0 xl:border-r xl:pb-0"
                        >
                            <div>
                                <h4
                                    class="mb-0.5 text-xl font-bold text-black dark:text-white md:text-title-lg"
                                >
                                    $4,350
                                </h4>
                                <p class="text-sm font-medium">Unique Visitors</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg
                                    width="19"
                                    height="19"
                                    viewBox="0 0 19 19"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M8.25259 5.87281L4.22834 9.89706L3.16751 8.83623L9.00282 3.00092L14.8381 8.83623L13.7773 9.89705L9.75306 5.87281L9.75306 15.0046L8.25259 15.0046L8.25259 5.87281Z"
                                        fill="#10B981"
                                    />
                                </svg>
                                <span class="text-sm font-medium text-meta-3">18%</span>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-center gap-2 border-b border-stroke pb-5 dark:border-strokedark xl:border-b-0 xl:border-r xl:pb-0"
                        >
                            <div>
                                <h4
                                    class="mb-0.5 text-xl font-bold text-black dark:text-white md:text-title-lg"
                                >
                                    55.9K
                                </h4>
                                <p class="text-sm font-medium">Total Pageviews</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg
                                    width="19"
                                    height="19"
                                    viewBox="0 0 19 19"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M8.25259 5.87281L4.22834 9.89706L3.16751 8.83623L9.00282 3.00092L14.8381 8.83623L13.7773 9.89705L9.75306 5.87281L9.75306 15.0046L8.25259 15.0046L8.25259 5.87281Z"
                                        fill="#10B981"
                                    />
                                </svg>
                                <span class="text-sm font-medium text-meta-3">25%</span>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-center gap-2 border-b border-stroke pb-5 dark:border-strokedark sm:border-b-0 sm:pb-0 xl:border-r"
                        >
                            <div>
                                <h4
                                    class="mb-0.5 text-xl font-bold text-black dark:text-white md:text-title-lg"
                                >
                                    54%
                                </h4>
                                <p class="text-sm font-medium">Bounce Rate</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg
                                    width="19"
                                    height="19"
                                    viewBox="0 0 19 19"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M9.75302 12.1328L13.7773 8.10856L14.8381 9.16939L9.00279 15.0047L3.16748 9.16939L4.22831 8.10856L8.25256 12.1328V3.00098H9.75302V12.1328Z"
                                        fill="#F0950C"
                                    />
                                </svg>
                                <span class="text-sm font-medium text-meta-8">7%</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-center gap-2">
                            <div>
                                <h4
                                    class="mb-0.5 text-xl font-bold text-black dark:text-white md:text-title-lg"
                                >
                                    2m 56s
                                </h4>
                                <p class="text-sm">Visit Duration</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg
                                    width="19"
                                    height="19"
                                    viewBox="0 0 19 19"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M8.25259 5.87281L4.22834 9.89706L3.16751 8.83623L9.00282 3.00092L14.8381 8.83623L13.7773 9.89705L9.75306 5.87281L9.75306 15.0046L8.25259 15.0046L8.25259 5.87281Z"
                                        fill="#10B981"
                                    />
                                </svg>
                                <span class="text-meta-3">12%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ====== Data Stats End -->

                <!-- ====== Map Two Start -->
                <include src="./partials/map-02.html"/>
                <!-- ====== Map Two End -->

                <div class="col-span-12 xl:col-span-6">
                    <!-- ====== Top Content Start -->
                    <div
                        class="mb-4 rounded-sm border border-stroke bg-white p-4 shadow-default dark:border-strokedark dark:bg-boxdark md:mb-6 md:p-6 xl:p-7.5 2xl:mb-7.5"
                    >
                        <div class="mb-7 flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-black dark:text-white">
                                    Top Content
                                </h3>
                            </div>
                            <div>
                                <div x-data="{openDropDown: false}" class="relative">
                                    <button @click="openDropDown = !openDropDown">
                                        <svg
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M2.25 11.25C3.49264 11.25 4.5 10.2426 4.5 9C4.5 7.75736 3.49264 6.75 2.25 6.75C1.00736 6.75 0 7.75736 0 9C0 10.2426 1.00736 11.25 2.25 11.25Z"
                                                fill="#98A6AD"
                                            />
                                            <path
                                                d="M9 11.25C10.2426 11.25 11.25 10.2426 11.25 9C11.25 7.75736 10.2426 6.75 9 6.75C7.75736 6.75 6.75 7.75736 6.75 9C6.75 10.2426 7.75736 11.25 9 11.25Z"
                                                fill="#98A6AD"
                                            />
                                            <path
                                                d="M15.75 11.25C16.9926 11.25 18 10.2426 18 9C18 7.75736 16.9926 6.75 15.75 6.75C14.5074 6.75 13.5 7.75736 13.5 9C13.5 10.2426 14.5074 11.25 15.75 11.25Z"
                                                fill="#98A6AD"
                                            />
                                        </svg>
                                    </button>
                                    <div
                                        x-show="openDropDown"
                                        @click.outside="openDropDown = false"
                                        class="absolute right-0 top-full z-40 w-40 space-y-1 rounded-sm border border-stroke bg-white p-1.5 shadow-default dark:border-strokedark dark:bg-boxdark"
                                    >
                                        <button
                                            class="flex w-full items-center gap-2 rounded-sm px-4 py-1.5 text-left text-sm hover:bg-gray dark:hover:bg-meta-4"
                                        >
                                            <svg
                                                class="fill-current"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_62_9787)">
                                                    <path
                                                        d="M15.55 2.97499C15.55 2.77499 15.475 2.57499 15.325 2.42499C15.025 2.12499 14.725 1.82499 14.45 1.52499C14.175 1.24999 13.925 0.974987 13.65 0.724987C13.525 0.574987 13.375 0.474986 13.175 0.449986C12.95 0.424986 12.75 0.474986 12.575 0.624987L10.875 2.32499H2.02495C1.17495 2.32499 0.449951 3.02499 0.449951 3.89999V14C0.449951 14.85 1.14995 15.575 2.02495 15.575H12.15C13 15.575 13.725 14.875 13.725 14V5.12499L15.35 3.49999C15.475 3.34999 15.55 3.17499 15.55 2.97499ZM8.19995 8.99999C8.17495 9.02499 8.17495 9.02499 8.14995 9.02499L6.34995 9.62499L6.94995 7.82499C6.94995 7.79999 6.97495 7.79999 6.97495 7.77499L11.475 3.27499L12.725 4.49999L8.19995 8.99999ZM12.575 14C12.575 14.25 12.375 14.45 12.125 14.45H2.02495C1.77495 14.45 1.57495 14.25 1.57495 14V3.87499C1.57495 3.62499 1.77495 3.42499 2.02495 3.42499H9.72495L6.17495 6.99999C6.04995 7.12499 5.92495 7.29999 5.87495 7.49999L4.94995 10.3C4.87495 10.5 4.92495 10.675 5.02495 10.85C5.09995 10.95 5.24995 11.1 5.52495 11.1H5.62495L8.49995 10.15C8.67495 10.1 8.84995 9.97499 8.97495 9.84999L12.575 6.24999V14ZM13.5 3.72499L12.25 2.49999L13.025 1.72499C13.225 1.92499 14.05 2.74999 14.25 2.97499L13.5 3.72499Z"
                                                        fill=""
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_62_9787">
                                                        <rect width="16" height="16" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Edit
                                        </button>
                                        <button
                                            class="flex w-full items-center gap-2 rounded-sm px-4 py-1.5 text-left text-sm hover:bg-gray dark:hover:bg-meta-4"
                                        >
                                            <svg
                                                class="fill-current"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M12.225 2.20005H10.3V1.77505C10.3 1.02505 9.70005 0.425049 8.95005 0.425049H7.02505C6.27505 0.425049 5.67505 1.02505 5.67505 1.77505V2.20005H3.75005C3.02505 2.20005 2.42505 2.80005 2.42505 3.52505V4.27505C2.42505 4.82505 2.75005 5.27505 3.22505 5.47505L3.62505 13.75C3.67505 14.775 4.52505 15.575 5.55005 15.575H10.4C11.425 15.575 12.275 14.775 12.325 13.75L12.75 5.45005C13.225 5.25005 13.55 4.77505 13.55 4.25005V3.50005C13.55 2.80005 12.95 2.20005 12.225 2.20005ZM6.82505 1.77505C6.82505 1.65005 6.92505 1.55005 7.05005 1.55005H8.97505C9.10005 1.55005 9.20005 1.65005 9.20005 1.77505V2.20005H6.85005V1.77505H6.82505ZM3.57505 3.52505C3.57505 3.42505 3.65005 3.32505 3.77505 3.32505H12.225C12.325 3.32505 12.425 3.40005 12.425 3.52505V4.27505C12.425 4.37505 12.35 4.47505 12.225 4.47505H3.77505C3.67505 4.47505 3.57505 4.40005 3.57505 4.27505V3.52505V3.52505ZM10.425 14.45H5.57505C5.15005 14.45 4.80005 14.125 4.77505 13.675L4.40005 5.57505H11.625L11.25 13.675C11.2 14.1 10.85 14.45 10.425 14.45Z"
                                                    fill=""
                                                />
                                                <path
                                                    d="M8.00005 8.1001C7.70005 8.1001 7.42505 8.3501 7.42505 8.6751V11.8501C7.42505 12.1501 7.67505 12.4251 8.00005 12.4251C8.30005 12.4251 8.57505 12.1751 8.57505 11.8501V8.6751C8.57505 8.3501 8.30005 8.1001 8.00005 8.1001Z"
                                                    fill=""
                                                />
                                                <path
                                                    d="M9.99994 8.60004C9.67494 8.57504 9.42494 8.80004 9.39994 9.12504L9.24994 11.325C9.22494 11.625 9.44994 11.9 9.77494 11.925C9.79994 11.925 9.79994 11.925 9.82494 11.925C10.1249 11.925 10.3749 11.7 10.3749 11.4L10.5249 9.20004C10.5249 8.87504 10.2999 8.62504 9.99994 8.60004Z"
                                                    fill=""
                                                />
                                                <path
                                                    d="M5.97497 8.60004C5.67497 8.62504 5.42497 8.90004 5.44997 9.20004L5.62497 11.4C5.64997 11.7 5.89997 11.925 6.17497 11.925C6.19997 11.925 6.19997 11.925 6.22497 11.925C6.52497 11.9 6.77497 11.625 6.74997 11.325L6.57497 9.12504C6.57497 8.80004 6.29997 8.57504 5.97497 8.60004Z"
                                                    fill=""
                                                />
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <div class="grid grid-cols-10 py-2">
                                <div class="col-span-6">
                                    <p class="text-sm font-medium">URL</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">Views</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">Uniques</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[74%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">/</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">2.5k</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">2.1k</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[38%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">/blog/</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">376</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">139</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[55%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">/reserve/success</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">468</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">290</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[20%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">
                                        /product/product-details
                                    </p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">298</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">176</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[27%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">
                                        /blog/digital-marketing
                                    </p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">179</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">57</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ====== Top Content End -->

                    <!-- ====== Top Channels Start -->
                    <div
                        class="rounded-sm border border-stroke bg-white p-4 shadow-default dark:border-strokedark dark:bg-boxdark md:p-6 xl:p-7.5"
                    >
                        <div class="mb-7 flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-black dark:text-white">
                                    Top Channels
                                </h3>
                            </div>
                            <div>
                                <div x-data="{openDropDown: false}" class="relative">
                                    <button @click="openDropDown = !openDropDown">
                                        <svg
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M2.25 11.25C3.49264 11.25 4.5 10.2426 4.5 9C4.5 7.75736 3.49264 6.75 2.25 6.75C1.00736 6.75 0 7.75736 0 9C0 10.2426 1.00736 11.25 2.25 11.25Z"
                                                fill="#98A6AD"
                                            />
                                            <path
                                                d="M9 11.25C10.2426 11.25 11.25 10.2426 11.25 9C11.25 7.75736 10.2426 6.75 9 6.75C7.75736 6.75 6.75 7.75736 6.75 9C6.75 10.2426 7.75736 11.25 9 11.25Z"
                                                fill="#98A6AD"
                                            />
                                            <path
                                                d="M15.75 11.25C16.9926 11.25 18 10.2426 18 9C18 7.75736 16.9926 6.75 15.75 6.75C14.5074 6.75 13.5 7.75736 13.5 9C13.5 10.2426 14.5074 11.25 15.75 11.25Z"
                                                fill="#98A6AD"
                                            />
                                        </svg>
                                    </button>
                                    <div
                                        x-show="openDropDown"
                                        @click.outside="openDropDown = false"
                                        class="absolute right-0 top-full z-40 w-40 space-y-1 rounded-sm border border-stroke bg-white p-1.5 shadow-default dark:border-strokedark dark:bg-boxdark"
                                    >
                                        <button
                                            class="flex w-full items-center gap-2 rounded-sm px-4 py-1.5 text-left text-sm hover:bg-gray dark:hover:bg-meta-4"
                                        >
                                            <svg
                                                class="fill-current"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_62_9787)">
                                                    <path
                                                        d="M15.55 2.97499C15.55 2.77499 15.475 2.57499 15.325 2.42499C15.025 2.12499 14.725 1.82499 14.45 1.52499C14.175 1.24999 13.925 0.974987 13.65 0.724987C13.525 0.574987 13.375 0.474986 13.175 0.449986C12.95 0.424986 12.75 0.474986 12.575 0.624987L10.875 2.32499H2.02495C1.17495 2.32499 0.449951 3.02499 0.449951 3.89999V14C0.449951 14.85 1.14995 15.575 2.02495 15.575H12.15C13 15.575 13.725 14.875 13.725 14V5.12499L15.35 3.49999C15.475 3.34999 15.55 3.17499 15.55 2.97499ZM8.19995 8.99999C8.17495 9.02499 8.17495 9.02499 8.14995 9.02499L6.34995 9.62499L6.94995 7.82499C6.94995 7.79999 6.97495 7.79999 6.97495 7.77499L11.475 3.27499L12.725 4.49999L8.19995 8.99999ZM12.575 14C12.575 14.25 12.375 14.45 12.125 14.45H2.02495C1.77495 14.45 1.57495 14.25 1.57495 14V3.87499C1.57495 3.62499 1.77495 3.42499 2.02495 3.42499H9.72495L6.17495 6.99999C6.04995 7.12499 5.92495 7.29999 5.87495 7.49999L4.94995 10.3C4.87495 10.5 4.92495 10.675 5.02495 10.85C5.09995 10.95 5.24995 11.1 5.52495 11.1H5.62495L8.49995 10.15C8.67495 10.1 8.84995 9.97499 8.97495 9.84999L12.575 6.24999V14ZM13.5 3.72499L12.25 2.49999L13.025 1.72499C13.225 1.92499 14.05 2.74999 14.25 2.97499L13.5 3.72499Z"
                                                        fill=""
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_62_9787">
                                                        <rect width="16" height="16" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Edit
                                        </button>
                                        <button
                                            class="flex w-full items-center gap-2 rounded-sm px-4 py-1.5 text-left text-sm hover:bg-gray dark:hover:bg-meta-4"
                                        >
                                            <svg
                                                class="fill-current"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M12.225 2.20005H10.3V1.77505C10.3 1.02505 9.70005 0.425049 8.95005 0.425049H7.02505C6.27505 0.425049 5.67505 1.02505 5.67505 1.77505V2.20005H3.75005C3.02505 2.20005 2.42505 2.80005 2.42505 3.52505V4.27505C2.42505 4.82505 2.75005 5.27505 3.22505 5.47505L3.62505 13.75C3.67505 14.775 4.52505 15.575 5.55005 15.575H10.4C11.425 15.575 12.275 14.775 12.325 13.75L12.75 5.45005C13.225 5.25005 13.55 4.77505 13.55 4.25005V3.50005C13.55 2.80005 12.95 2.20005 12.225 2.20005ZM6.82505 1.77505C6.82505 1.65005 6.92505 1.55005 7.05005 1.55005H8.97505C9.10005 1.55005 9.20005 1.65005 9.20005 1.77505V2.20005H6.85005V1.77505H6.82505ZM3.57505 3.52505C3.57505 3.42505 3.65005 3.32505 3.77505 3.32505H12.225C12.325 3.32505 12.425 3.40005 12.425 3.52505V4.27505C12.425 4.37505 12.35 4.47505 12.225 4.47505H3.77505C3.67505 4.47505 3.57505 4.40005 3.57505 4.27505V3.52505V3.52505ZM10.425 14.45H5.57505C5.15005 14.45 4.80005 14.125 4.77505 13.675L4.40005 5.57505H11.625L11.25 13.675C11.2 14.1 10.85 14.45 10.425 14.45Z"
                                                    fill=""
                                                />
                                                <path
                                                    d="M8.00005 8.1001C7.70005 8.1001 7.42505 8.3501 7.42505 8.6751V11.8501C7.42505 12.1501 7.67505 12.4251 8.00005 12.4251C8.30005 12.4251 8.57505 12.1751 8.57505 11.8501V8.6751C8.57505 8.3501 8.30005 8.1001 8.00005 8.1001Z"
                                                    fill=""
                                                />
                                                <path
                                                    d="M9.99994 8.60004C9.67494 8.57504 9.42494 8.80004 9.39994 9.12504L9.24994 11.325C9.22494 11.625 9.44994 11.9 9.77494 11.925C9.79994 11.925 9.79994 11.925 9.82494 11.925C10.1249 11.925 10.3749 11.7 10.3749 11.4L10.5249 9.20004C10.5249 8.87504 10.2999 8.62504 9.99994 8.60004Z"
                                                    fill=""
                                                />
                                                <path
                                                    d="M5.97497 8.60004C5.67497 8.62504 5.42497 8.90004 5.44997 9.20004L5.62497 11.4C5.64997 11.7 5.89997 11.925 6.17497 11.925C6.19997 11.925 6.19997 11.925 6.22497 11.925C6.52497 11.9 6.77497 11.625 6.74997 11.325L6.57497 9.12504C6.57497 8.80004 6.29997 8.57504 5.97497 8.60004Z"
                                                    fill=""
                                                />
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <div class="grid grid-cols-10 py-2">
                                <div class="col-span-6">
                                    <p class="text-sm font-medium">URL</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">Views</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">Uniques</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[74%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">Google</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">4.2k</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">3.9k</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[66%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">Github</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">1.9k</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">509</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[58%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">Producthunt</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">1.5k</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">986</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[48%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">Facebook</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">974</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">639</p>
                                </div>
                            </div>
                            <div class="relative z-1 grid grid-cols-10 py-2">
                      <span
                          class="absolute left-0 top-0 -z-1 h-full w-[39%] rounded bg-gray dark:bg-meta-4"
                      ></span>
                                <div class="col-span-6 pl-3.5">
                                    <p class="text-sm font-medium">Twitter</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-center text-sm font-medium">179</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-right text-sm font-medium">57</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ====== Top Channels End -->
                </div>

                <!-- ====== Chart Three Start -->
                <include src="./partials/chart-03.html"/>
                <!-- ====== Chart Three End -->

                <!-- ====== Table Two Start -->
                <div class="col-span-12 xl:col-span-7">
                    <include src="./partials/table-02.html"/>
                </div>
                <!-- ====== Table Two End -->
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
