<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Pagination | TailAdmin - Tailwind CSS Admin Dashboard Template
    </title>
  </head>

  <body
    x-data="{ page: 'pagination', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
  >
    <!-- ===== Preloader Start ===== -->
    <include src="./partials/preloader.html"></include>
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      <include src="./partials/sidebar.html"></include>
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
      >
        <!-- ===== Header Start ===== -->
        <include src="./partials/header.html" />
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
              class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Pagination
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Pagination</li>
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
                    Pagination Style 1
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-7.5">
                  <nav>
                    <ul class="flex flex-wrap items-center">
                      <li>
                        <a
                          class="flex h-8 w-8 items-center justify-center rounded hover:bg-primary hover:text-white"
                          href="#"
                        >
                          <svg
                            class="fill-current"
                            width="8"
                            height="16"
                            viewBox="0 0 8 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M7.17578 15.1156C7.00703 15.1156 6.83828 15.0593 6.72578 14.9187L0.369531 8.44995C0.116406 8.19683 0.116406 7.80308 0.369531 7.54995L6.72578 1.0812C6.97891 0.828076 7.37266 0.828076 7.62578 1.0812C7.87891 1.33433 7.87891 1.72808 7.62578 1.9812L1.71953 7.99995L7.65391 14.0187C7.90703 14.2718 7.90703 14.6656 7.65391 14.9187C7.48516 15.0312 7.34453 15.1156 7.17578 15.1156Z"
                              fill=""
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >1</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >2</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >3</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >4</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >5</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex h-9 w-7.5 items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                        >
                          <svg
                            class="fill-current"
                            width="10"
                            height="3"
                            viewBox="0 0 10 3"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M0.927734 2.06738C1.41992 2.06738 1.8164 1.66406 1.8164 1.17871C1.8164 0.686523 1.41992 0.290039 0.927734 0.290039C0.442383 0.290039 0.0390625 0.686523 0.0390625 1.17871C0.0390625 1.66406 0.442383 2.06738 0.927734 2.06738ZM4.99998 2.06738C5.49217 2.06738 5.88865 1.66406 5.88865 1.17871C5.88865 0.686523 5.49217 0.290039 4.99998 0.290039C4.51463 0.290039 4.11131 0.686523 4.11131 1.17871C4.11131 1.66406 4.51463 2.06738 4.99998 2.06738ZM9.07224 2.06738C9.56443 2.06738 9.96091 1.66406 9.96091 1.17871C9.96091 0.686523 9.56443 0.290039 9.07224 0.290039C8.58689 0.290039 8.18357 0.686523 8.18357 1.17871C8.18357 1.66406 8.58689 2.06738 9.07224 2.06738Z"
                              fill=""
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >10</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex h-8 w-8 items-center justify-center rounded hover:bg-primary hover:text-white"
                          href="#"
                        >
                          <svg
                            class="fill-current"
                            width="8"
                            height="16"
                            viewBox="0 0 8 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M0.819531 15.1156C0.650781 15.1156 0.510156 15.0593 0.369531 14.9468C0.116406 14.6937 0.116406 14.3 0.369531 14.0468L6.27578 7.99995L0.369531 1.9812C0.116406 1.72808 0.116406 1.33433 0.369531 1.0812C0.622656 0.828076 1.01641 0.828076 1.26953 1.0812L7.62578 7.54995C7.87891 7.80308 7.87891 8.19683 7.62578 8.44995L1.26953 14.9187C1.15703 15.0312 0.988281 15.1156 0.819531 15.1156Z"
                              fill=""
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>

              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Pagination Style 2
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-7.5">
                  <nav>
                    <ul class="flex flex-wrap items-center">
                      <li>
                        <a
                          class="flex h-9 w-9 items-center justify-center rounded-l-md border border-stroke hover:border-primary hover:bg-gray hover:text-primary dark:border-strokedark dark:hover:border-primary dark:hover:bg-graydark"
                          href="#"
                        >
                          <svg
                            class="fill-current"
                            width="8"
                            height="16"
                            viewBox="0 0 8 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M7.17578 15.1156C7.00703 15.1156 6.83828 15.0593 6.72578 14.9187L0.369531 8.44995C0.116406 8.19683 0.116406 7.80308 0.369531 7.54995L6.72578 1.0812C6.97891 0.828076 7.37266 0.828076 7.62578 1.0812C7.87891 1.33433 7.87891 1.72808 7.62578 1.9812L1.71953 7.99995L7.65391 14.0187C7.90703 14.2718 7.90703 14.6656 7.65391 14.9187C7.48516 15.0312 7.34453 15.1156 7.17578 15.1156Z"
                              fill=""
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center border border-stroke border-l-transparent px-4 py-[5px] font-medium hover:border-primary hover:bg-gray hover:text-primary dark:border-strokedark dark:hover:border-primary dark:hover:bg-graydark"
                          href="#"
                          >1</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center border border-stroke border-l-transparent px-4 py-[5px] font-medium hover:border-primary hover:bg-gray hover:text-primary dark:border-strokedark dark:hover:border-primary dark:hover:bg-graydark"
                          href="#"
                          >2</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center border border-stroke border-l-transparent px-4 py-[5px] font-medium hover:border-primary hover:bg-gray hover:text-primary dark:border-strokedark dark:hover:border-primary dark:hover:bg-graydark"
                          href="#"
                          >3</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center border border-stroke border-l-transparent px-4 py-[5px] font-medium hover:border-primary hover:bg-gray hover:text-primary dark:border-strokedark dark:hover:border-primary dark:hover:bg-graydark"
                          href="#"
                          >4</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center border border-stroke border-l-transparent px-4 py-[5px] font-medium hover:border-primary hover:bg-gray hover:text-primary dark:border-strokedark dark:hover:border-primary dark:hover:bg-graydark"
                          href="#"
                          >5</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex h-9 w-9 items-center justify-center rounded-r-md border border-stroke border-l-transparent hover:border-primary hover:bg-gray hover:text-primary dark:border-strokedark dark:hover:border-primary dark:hover:bg-graydark"
                          href="#"
                        >
                          <svg
                            class="fill-current"
                            width="8"
                            height="16"
                            viewBox="0 0 8 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M0.819531 15.1156C0.650781 15.1156 0.510156 15.0593 0.369531 14.9468C0.116406 14.6937 0.116406 14.3 0.369531 14.0468L6.27578 7.99995L0.369531 1.9812C0.116406 1.72808 0.116406 1.33433 0.369531 1.0812C0.622656 0.828076 1.01641 0.828076 1.26953 1.0812L7.62578 7.54995C7.87891 7.80308 7.87891 8.19683 7.62578 8.44995L1.26953 14.9187C1.15703 15.0312 0.988281 15.1156 0.819531 15.1156Z"
                              fill=""
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>

              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Pagination Style 3
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-7.5">
                  <nav>
                    <ul class="flex flex-wrap items-center gap-2">
                      <li>
                        <a
                          class="flex items-center justify-center rounded bg-[#EDEFF1] px-3 py-1.5 text-xs font-medium text-black hover:bg-primary hover:text-white dark:bg-graydark dark:text-white dark:hover:bg-primary dark:hover:text-white"
                          href="#"
                        >
                          Previous
                        </a>
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >1</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >2</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >3</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >4</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded px-3 py-1.5 font-medium hover:bg-primary hover:text-white"
                          href="#"
                          >5</a
                        >
                      </li>
                      <li>
                        <a
                          class="flex items-center justify-center rounded bg-[#EDEFF1] px-3 py-1.5 text-xs font-medium text-black hover:bg-primary hover:text-white dark:bg-graydark dark:text-white dark:hover:bg-primary dark:hover:text-white"
                          href="#"
                        >
                          Next
                        </a>
                      </li>
                    </ul>
                  </nav>
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
