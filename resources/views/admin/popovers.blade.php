<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Popovers | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
  </head>

  <body
    x-data="{ page: 'popovers', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
                Popovers
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Popovers</li>
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
                    Popover in Four directions
                  </h3>
                </div>

                <div class="p-4 sm:p-5 xl:p-7.5">
                  <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mt-10 text-center sm:mb-60">
                        <div
                          x-data="{popover: false}"
                          @click.outside="popover = false"
                          class="relative inline-block"
                        >
                          <button
                            @click.prevent="popover = !popover"
                            class="inline-flex rounded-md bg-primary px-5 py-2.5 font-medium text-white"
                          >
                            Popover on Bottom
                          </button>
                          <div
                            x-show="popover"
                            class="absolute left-1/2 top-full z-20 mt-3 w-max max-w-[311px] -translate-x-1/2 rounded bg-white drop-shadow-5 dark:bg-meta-4"
                          >
                            <span
                              class="absolute -top-1.5 left-1/2 -z-10 h-4 w-4 -translate-x-1/2 rotate-45 rounded-sm bg-white dark:bg-meta-4"
                            ></span>
                            <div
                              class="border-b border-stroke p-3 dark:border-strokedark"
                            >
                              <h4
                                class="text-center text-title-sm font-semibold text-black dark:text-white"
                              >
                                Popover Title
                              </h4>
                            </div>
                            <div class="px-5 py-4.5 text-center">
                              <p class="font-medium">
                                Lorem ipsum dolor sit amet, consect adipiscing
                                elit. Mauris facilisis congue exclamate justo
                                nec facilisis.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mt-10 text-center sm:mb-60">
                        <div
                          x-data="{popover: false}"
                          @click.outside="popover = false"
                          class="relative inline-block"
                        >
                          <button
                            @click.prevent="popover = !popover"
                            class="inline-flex rounded-md bg-primary px-5 py-2.5 font-medium text-white"
                          >
                            Popover on Right
                          </button>
                          <div
                            x-show="popover"
                            class="absolute left-full top-0 z-20 ml-3 w-max max-w-[311px] rounded bg-white drop-shadow-5 dark:bg-meta-4"
                          >
                            <span
                              class="absolute -left-1.5 top-4 -z-10 h-4 w-4 rotate-45 rounded-sm bg-white dark:bg-meta-4"
                            ></span>
                            <div
                              class="border-b border-stroke p-3 dark:border-strokedark"
                            >
                              <h4
                                class="text-center text-title-sm font-semibold text-black dark:text-white"
                              >
                                Popover Title
                              </h4>
                            </div>
                            <div class="px-5 py-4.5 text-center">
                              <p class="font-medium">
                                Lorem ipsum dolor sit amet, consect adipiscing
                                elit. Mauris facilisis congue exclamate justo
                                nec facilisis.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mt-10 text-center sm:mb-60">
                        <div
                          x-data="{popover: false}"
                          @click.outside="popover = false"
                          class="relative inline-block"
                        >
                          <button
                            @click.prevent="popover = !popover"
                            class="inline-flex rounded-md bg-primary px-5 py-2.5 font-medium text-white"
                          >
                            Popover on Top
                          </button>
                          <div
                            x-show="popover"
                            class="absolute bottom-full left-1/2 z-20 mb-3 w-max max-w-[311px] -translate-x-1/2 rounded bg-white drop-shadow-5 dark:bg-meta-4"
                          >
                            <span
                              class="absolute -bottom-1.5 left-1/2 -z-10 h-4 w-4 -translate-x-1/2 rotate-45 rounded-sm bg-white dark:bg-meta-4"
                            ></span>
                            <div
                              class="border-b border-stroke p-3 dark:border-strokedark"
                            >
                              <h4
                                class="text-center text-title-sm font-semibold text-black dark:text-white"
                              >
                                Popover Title
                              </h4>
                            </div>
                            <div class="px-5 py-4.5 text-center">
                              <p class="font-medium">
                                Lorem ipsum dolor sit amet, consect adipiscing
                                elit. Mauris facilisis congue exclamate justo
                                nec facilisis.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mt-10 text-center sm:mb-60">
                        <div
                          x-data="{popover: false}"
                          @click.outside="popover = false"
                          class="relative inline-block"
                        >
                          <button
                            @click.prevent="popover = !popover"
                            class="inline-flex rounded-md bg-primary px-5 py-2.5 font-medium text-white"
                          >
                            Popover on Left
                          </button>
                          <div
                            x-show="popover"
                            class="absolute right-full top-0 z-20 mr-3 w-max max-w-[311px] rounded bg-white drop-shadow-5 dark:bg-meta-4"
                          >
                            <span
                              class="absolute -right-1.5 top-4 -z-10 h-4 w-4 rotate-45 rounded-sm bg-white dark:bg-meta-4"
                            ></span>
                            <div
                              class="border-b border-stroke p-3 dark:border-strokedark"
                            >
                              <h4
                                class="text-center text-title-sm font-semibold text-black dark:text-white"
                              >
                                Popover Title
                              </h4>
                            </div>
                            <div class="px-5 py-4.5 text-center">
                              <p class="font-medium">
                                Lorem ipsum dolor sit amet, consect adipiscing
                                elit. Mauris facilisis congue exclamate justo
                                nec facilisis.
                              </p>
                            </div>
                          </div>
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
                  class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Popover With Button
                  </h3>
                </div>

                <div class="p-4 sm:p-5 xl:p-7.5">
                  <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 sm:w-1/2 xl:w-1/4">
                      <div class="mb-60 mt-10">
                        <div
                          x-data="{popover: false}"
                          @click.outside="popover = false"
                          class="relative inline-block"
                        >
                          <button
                            @click.prevent="popover = !popover"
                            class="inline-flex rounded-md bg-primary px-5 py-2.5 font-medium text-white"
                          >
                            Popover Text
                          </button>
                          <div
                            x-show="popover"
                            class="absolute left-full top-0 z-20 ml-3 w-max max-w-[533px] rounded-md bg-white p-4 font-medium drop-shadow-5 dark:bg-meta-4 sm:p-5 xl:p-7.5"
                          >
                            <span
                              class="absolute -left-1 top-4 -z-10 h-2 w-2 rotate-45 rounded-r-sm bg-white dark:bg-meta-4"
                            ></span>
                            <h4
                              class="mb-4 text-title-md font-bold text-black dark:text-white"
                            >
                              Do you want to add this?
                            </h4>
                            <p class="font-medium">
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit. Mauris facilisis congue justo nec facilisis.
                              Quisque quis augue ipsum. Aliquam suscipit dui ac
                              dui commodo.
                            </p>
                            <p class="mt-4 font-medium">
                              Quisque quis augue ipsum. Aliquam suscipit dui ac
                              dui.
                            </p>
                            <div class="mt-6 flex items-center gap-4">
                              <button
                                class="inline-block rounded bg-primary px-7.5 py-1 font-medium text-white hover:bg-opacity-90"
                              >
                                Yes
                              </button>
                              <button
                                class="inline-block rounded bg-body px-7.5 py-1 font-medium text-white hover:bg-opacity-90"
                              >
                                No
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
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
