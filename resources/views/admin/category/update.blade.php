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
                        <form role="form" method="POST" action="{{ route('admin.categories.update', ['category' => $category]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-col gap-5.5 p-6.5">
                                <div>
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Category Name
                                    </label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') ?? $category->name }}"
                                        placeholder="Category Name"
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
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
                                        value="{{ old('description') ?? $category->description }}"
                                        rows="6"
                                        {{--                                        placeholder="Category description"--}}
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ old('description') ?? $category->description }}</textarea>
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

{{--                                    @error('image')--}}
{{--                                    <span class="text-danger">{{ $message }}</span>--}}
{{--                                    @enderror--}}

                                    <!-- Display the current image -->
                                    @if ($category->image)
                                        <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                            <img src="{{ $category->image ? $category->image->image_path : '/storage/no-photos.png' }}" alt="Current Image" width="150">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="my-4 p-4 rounded-lg bg-white border-1 dark:bg-boxdark">
                                <div class="rounded-sm bg-white dark:bg-boxdark">
                                    <div class="flex justify-end gap-5 xl:gap-20">
                                        <button type="submit" class="inline-flex items-center justify-center rounded-md border border-black px-10 py-4 text-center font-medium text-black hover:font-900 hover:bg-opacity-90 lg:px-8 xl:px-10 dark:bg-white">
                                            Save Changes
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
