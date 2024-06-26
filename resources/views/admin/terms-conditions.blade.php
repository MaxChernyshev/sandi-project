<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Terms & Conditions | TailAdmin - Tailwind CSS Admin Dashboard Template
    </title>
  </head>

  <body
    x-data="{ page: 'termsCondition', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
                Terms & Conditions
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Terms & Conditions</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <div
              class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
            >
              <div class="flex flex-col gap-7.5 p-4 sm:p-6 xl:p-9">
                <div>
                  <h3
                    class="mb-5 text-title-md2 font-bold text-black dark:text-white"
                  >
                    Terms & Services
                  </h3>

                  <p class="font-medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec mattis quis ligula id molestie. Ut ultricies nulla sed
                    mi elementum eleifend. Vivamus interdum mollis metus. Sed
                    vitae orci porta, interdum nisi ac, vestibulum massa.
                    Curabitur lorem sem, scelerisque ut lectus.
                  </p>

                  <p class="mt-4.5 font-medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec mattis quis ligula id molestie.
                  </p>
                </div>

                <div>
                  <h4
                    class="mb-5 text-title-sm2 font-bold leading-[30px] text-black dark:text-white"
                  >
                    Lorem ipsum 1
                  </h4>

                  <p class="font-medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec mattis quis ligula id molestie. Ut ultricies nulla sed
                    mi elementum eleifend. Vivamus interdum mollis metus. Sed
                    vitae orci porta, interdum nisi ac, vestibulum massa.
                    Curabitur lorem sem, scelerisque ut lectus Aliquam erat
                    volutpat. Ut a diam ultrices, pellentesque magna iaculis,
                    pellentesque lacus. Nulla at luctus ligula. Donec nibh est,
                    elementum in tincidunt ac, luctus ut ipsum. In hac habitasse
                    platea dictumst.
                  </p>

                  <p class="mt-4.5 font-medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec mattis quis ligula id molestie. Ut ultricies nulla sed
                    mi elementum eleifend. Vivamus interdum mollis metus. Sed
                    vitae orci porta, interdum nisi ac, vestibulum massa.
                    Curabitur lorem sem.
                  </p>

                  <p class="mt-4.5 font-medium">
                    Curabitur lorem sem, scelerisque ut lectus Aliquam erat
                    volutpat. Ut a diam ultrices, pellentesque magna iaculis,
                    pellentesque lacus. Nulla at luctus ligula. Donec nibh est,
                    elementum in tincidunt ac, luctus ut ipsum. In hac habitasse
                    platea dictumst Curabitur lorem sem, scelerisque erat
                    volutpat.
                  </p>
                </div>

                <div>
                  <h4
                    class="mb-5 text-title-sm2 font-bold leading-[30px] text-black dark:text-white"
                  >
                    Lorem ipsum 2
                  </h4>

                  <p class="font-medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec mattis quis ligula id molestie. Ut ultricies nulla sed
                    mi elementum eleifend. Vivamus interdum mollis metus. Sed
                    vitae orci porta, interdum nisi ac, vestibulum massa.
                    Curabitur lorem sem.
                  </p>

                  <p class="mt-4.5 font-medium">
                    Curabitur lorem sem, scelerisque ut lectus Aliquam erat
                    volutpat. Ut a diam ultrices, pellentesque magna iaculis,
                    pellentesque lacus. Nulla at luctus ligula. Donec nibh est,
                    elementum in tincidunt ac, luctus ut ipsum. In hac habitasse
                    platea dictumst Curabitur lorem sem, scelerisque erat
                    volutpat.
                  </p>
                </div>

                <div>
                  <h4
                    class="mb-5 text-title-sm2 font-bold leading-[30px] text-black dark:text-white"
                  >
                    Important Links
                  </h4>

                  <ul class="flex flex-col gap-2.5">
                    <li class="font-medium text-primary underline">
                      Lorem ipsum dolor sit amet,
                    </li>
                    <li class="font-medium text-primary underline">
                      Curabitur lorem sem scelerisque erat volutpat.
                    </li>
                    <li class="font-medium text-primary underline">
                      Scelerisque erat volutpat.
                    </li>
                    <li class="font-medium text-primary underline">
                      elementum eleifend
                    </li>
                  </ul>
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
