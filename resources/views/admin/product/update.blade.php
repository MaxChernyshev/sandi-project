@extends('admin.layouts.layout')

@section('content')

    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                <x-admin.back-button message="Back" :href="route('admin.categories.index')"/>

                <div class="my-2 p-2 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <form role="form" method="POST" action="{{ route('admin.products.update', ['product' => $product]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <x-admin.text-input
                                label="Product Name"
                                fieldType="text"
                                id="name"
                                name="name"
                                value="{{ old('name') ?? $product->name }}"
                                placeholder="Category Name"
                                :message={{ $message }}
                            />
                            @error('name')
                            <div class="flex flex-col p-6.5 pt-0">
                                <label class="mb-3 block text-sm font-medium pl-6.5">
                                    <div class="error text-frontred">{{ $message }}</div>
                                </label>
                            </div>
                            @enderror


                            <x-admin.textarea-input
                                label="Product Description"
                                id="description"
                                name="description"
                                content="{{ old('description') ?? $product->description }}"
                                rows="4"
                            />
                            @error('description')
                            <div class="flex flex-col p-6.5 pt-0">
                                <label class="mb-3 block text-sm font-medium pl-6.5">
                                    <div class="error text-frontred">{{ $message }}</div>
                                </label>
                            </div>
                            @enderror


                            <div class="flex flex-col p-6.5">
                                <div>
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Product image
                                    </label>
                                    <input type="file"
                                           id="image"
                                           name="image"
                                           class="w-full rounded-md border border-stroke p-3 outline-none transition file:mr-4 file:rounded file:border-[0.5px] file:border-stroke file:bg-[#EEEEEE] file:px-2.5 file:py-1 file:text-sm file:font-normal focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-strokedark dark:file:bg-white/30 dark:file:text-white"/>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Display the current image -->
                                    @if ($product->image)
                                        <div class="flex flex-row w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                            <img src="{{ $product->image ? $product->image->image_path : '/storage/no-photos.png' }}" alt="Current Image" width="150">
                                        </div>
                                    @endif
                                </div>
                            </div>


                            <x-admin.checkbox for="image_delete" label="Delete image" type="checkbox" name="image_delete" id="image_delete" value=1 />

                            <x-admin.save-button message="Save Changes"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
