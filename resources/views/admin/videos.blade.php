<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Videos | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
  </head>

  <body
    x-data="{ page: 'videos', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
                Videos
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Videos</li>
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
                    Embeds Video
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-10">
                  <iframe
                    class="aspect-video w-full"
                    src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>

              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Responsive Aspect ratios 4:3
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-10">
                  <iframe
                    class="aspect-4/3 w-full"
                    src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>

              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Responsive Aspect ratios 21:9
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-10">
                  <iframe
                    class="aspect-21/9 w-full"
                    src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>

              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-7.5"
                >
                  <h3 class="font-medium text-black dark:text-white">
                    Responsive Aspect ratios 1:1
                  </h3>
                </div>

                <div class="p-4 sm:p-6 xl:p-10">
                  <iframe
                    class="aspect-square w-full"
                    src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                    allowfullscreen
                  ></iframe>
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
