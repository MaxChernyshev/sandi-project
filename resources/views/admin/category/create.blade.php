@extends('admin.layouts.layout')

@section('content')

    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                <div class="my-4 p-4 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm bg-white dark:bg-boxdark">
                        <div class="flex justify-end gap-5 xl:gap-20">
                            <a class="inline-flex items-center justify-center rounded-md border border-black px-10 py-4 text-center font-medium text-black hover:font-900 hover:bg-opacity-90 lg:px-8 xl:px-10 dark:bg-white"
                               href={{ url()->previous() }}>
                                Back
                            </a>
                        </div>
                    </div>
                </div>


                <div class="my-4 p-4 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <form role="form" method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="flex flex-col gap-5.5 p-6.5">
                                <div>
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Category Name
                                    </label>
                                    <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Category Name"
                                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                                    @error('name')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col gap-5.5 p-6.5">
                                <div>
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Category description
                                    </label>
                                    <textarea
                                            id="description"
                                            name="description"
                                            rows="6"
                                            value="{{ old('description') }}"
                                            placeholder="Category description"
                                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                    </textarea>
                                    @error('description')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col gap-5.5 p-6.5">
                                <div>
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Category image
                                    </label>
                                    <input type="file"
                                           id="image"
                                           name="image"
                                           class="w-full rounded-md border border-stroke p-3 outline-none transition file:mr-4 file:rounded file:border-[0.5px] file:border-stroke file:bg-[#EEEEEE] file:px-2.5 file:py-1 file:text-sm file:font-normal focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-strokedark dark:file:bg-white/30 dark:file:text-white"/>
                                    @error('image')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="my-4 p-4 rounded-lg bg-white border-1 dark:bg-boxdark">
                                <div class="rounded-sm bg-white dark:bg-boxdark">
                                    <div class="flex justify-end gap-5 xl:gap-20">
                                        <button type="submit" class="inline-flex items-center justify-center rounded-md border border-black px-10 py-4 text-center font-medium text-black hover:font-900 hover:bg-opacity-90 lg:px-8 xl:px-10 dark:bg-white">
                                            Save new Category
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
