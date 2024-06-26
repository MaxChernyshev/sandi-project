<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Pro Form Layout | TailAdmin - Tailwind CSS Admin Dashboard Template
    </title>
  </head>

  <body
    x-data="{ page: 'proFormLayout', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
                Pro Form Layout
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.blade.php">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Pro Form Layout</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <!-- ====== Form Layout Section Start -->
            <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
              <div class="flex flex-col gap-9">
                <!-- Contact Form Two -->
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      Contact Form 2
                    </h3>
                  </div>
                  <form action="#">
                    <div class="p-6.5">
                      <div class="mb-5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            First name
                          </label>
                          <input
                            type="text"
                            placeholder="Enter your first name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          />
                        </div>

                        <div class="w-full xl:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Last name
                          </label>
                          <input
                            type="text"
                            placeholder="Enter your last name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          />
                        </div>
                      </div>

                      <div class="mb-5.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Email
                          </label>
                          <input
                            type="email"
                            placeholder="yourmail@gmail.com"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          />
                        </div>

                        <div class="w-full xl:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Phone
                          </label>
                          <input
                            type="text"
                            placeholder="(321) 5555-0115"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          />
                        </div>
                      </div>

                      <div class="mb-5.5" x-data="{ isChecked: '' }">
                        <label
                          for="roleSelect"
                          class="mb-4.5 block text-sm font-medium text-black dark:text-white"
                        >
                          Select option
                        </label>

                        <div class="flex flex-wrap items-center gap-5.5">
                          <div>
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Graphics"
                                @change="isChecked = 'Graphics'"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked === 'Graphics' ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked === 'Graphics' ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Graphics Design
                            </label>
                          </div>

                          <div>
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Web"
                                @change="isChecked = 'Web'"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked === 'Web' ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked === 'Web' ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Web Development
                            </label>
                          </div>

                          <div>
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Logo"
                                @change="isChecked = 'Logo'"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked === 'Logo' ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked === 'Logo' ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Logo Design
                            </label>
                          </div>

                          <div>
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Others"
                                @change="isChecked = 'Others'"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked === 'Others' ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked === 'Others' ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Others
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="mb-6">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Message
                        </label>
                        <textarea
                          rows="6"
                          placeholder="Type your message"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        ></textarea>
                      </div>

                      <button
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90"
                      >
                        Send Message
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="flex flex-col gap-9">
                <!-- Survey Form -->
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      Survey Form
                    </h3>
                  </div>
                  <form action="#">
                    <div class="p-6.5">
                      <div class="mb-5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Name
                        </label>
                        <input
                          type="text"
                          placeholder="Enter your full name"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div class="mb-5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Email
                        </label>
                        <input
                          type="email"
                          placeholder="Enter your email address"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div class="mb-5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Age
                        </label>
                        <input
                          type="text"
                          placeholder="Enter your age"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div class="mb-5.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Which option best describes you?
                        </label>
                        <div
                          x-data="{ isOptionSelected: false }"
                          class="relative z-20 bg-transparent dark:bg-form-input"
                        >
                          <select
                            class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                            :class="isOptionSelected && 'text-black dark:text-white'"
                            @change="isOptionSelected = true"
                          >
                            <option value="" class="text-body">
                              Type your subject
                            </option>
                            <option value="" class="text-body">Student</option>
                            <option value="" class="text-body">
                              UX/UI Designer
                            </option>
                            <option value="" class="text-body">
                              Web Developer
                            </option>
                          </select>
                          <span
                            class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                          >
                            <svg
                              class="fill-current"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <g opacity="0.8">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                  fill=""
                                ></path>
                              </g>
                            </svg>
                          </span>
                        </div>
                      </div>

                      <div class="mb-5.5" x-data="{ isChecked: '' }">
                        <label
                          class="mb-4.5 block text-sm font-medium text-black dark:text-white"
                        >
                          Would you recommend our site to a friend?
                        </label>

                        <div class="flex flex-col gap-2.5">
                          <div>
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                @change="isChecked = 'Yes'"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked === 'Yes' ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked === 'Yes' ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Yes
                            </label>
                          </div>

                          <div>
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                @change="isChecked = 'No'"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked === 'No' ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked === 'No' ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              No
                            </label>
                          </div>

                          <div>
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                @change="isChecked = 'Maybe'"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked === 'Maybe' ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked === 'Maybe' ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Maybe
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="mb-6">
                        <label
                          class="mb-4.5 block text-sm font-medium text-black dark:text-white"
                        >
                          Which languages & frameworks you know?
                        </label>

                        <div class="flex flex-col gap-2.5">
                          <div x-data="{ isChecked: false }">
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                @change="isChecked = true"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              C
                            </label>
                          </div>

                          <div x-data="{ isChecked: false }">
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                @change="isChecked = true"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              C++
                            </label>
                          </div>

                          <div x-data="{ isChecked: false }">
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Logo"
                                @change="isChecked = true"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Java
                            </label>
                          </div>

                          <div x-data="{ isChecked: false }">
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Logo"
                                @change="isChecked = true"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Python
                            </label>
                          </div>

                          <div x-data="{ isChecked: false }">
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Logo"
                                @change="isChecked = true"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              JavaScript
                            </label>
                          </div>

                          <div x-data="{ isChecked: false }">
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Logo"
                                @change="isChecked = true"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              React
                            </label>
                          </div>

                          <div x-data="{ isChecked: false }">
                            <label
                              class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white"
                            >
                              <input
                                class="sr-only"
                                type="radio"
                                name="roleSelect"
                                id="Logo"
                                @change="isChecked = true"
                              />
                              <span
                                class="flex h-5 w-5 items-center justify-center rounded-full border"
                                :class="isChecked ? 'border-primary': 'border-body'"
                              >
                                <span
                                  :class="isChecked ? 'flex': 'hidden'"
                                  class="h-2.5 w-2.5 rounded-full bg-primary"
                                ></span>
                              </span>
                              Angular
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="mb-5.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Any comments or suggestions?
                        </label>
                        <textarea
                          rows="6"
                          placeholder="Type here"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        ></textarea>
                      </div>

                      <button
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90"
                      >
                        Send Message
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- ====== Form Layout Section End -->
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  </body>
</html>
