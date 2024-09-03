@extends('admin.layouts.layout')

@section('content')

    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                <x-admin.back-button message="Back" :href="route('admin.products.index')"/>

                <div class="my-4 p-4 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <form role="form" method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            {{--Field Name--}}
                            <x-admin.label for="name" value="Product Name" />
                            <x-admin.text-input
                                fieldType="text"
                                id="name"
                                name="name"
                                value=""
                                placeholder="Product Title"
                            />
                            <x-admin.error-message fieldName="name" :message={{ $message }}/>
                            {{--END Field Name--}}

                            {{--Field Description--}}
                            <x-admin.label for="description" value="Product Description" />
                            <x-admin.quill-editor title="Product Description" name="description" id="hidden-content" value=""/>
                            <x-admin.error-message fieldName="description" :message={{ $message }}/>
                            {{--END Field Description--}}


                            {{-- TODO 2 columns--}}

                            {{--Field Category--}}
                            <x-admin.label for="category_id" value="Product Category" />
                            <x-admin.input-select
                                label="Category"
                                id="category_id"
                                name="category_id"
                                value=""
                                placeholder="Product Category"
                                :options="$categories"
                            />
                            <x-admin.error-message fieldName="Category" :message={{ $message }}/>
                            {{--END Field Category--}}

                            {{--Field Instruction--}}
                            <x-admin.label for="instruction_id" value="Product Instruction" />
                            <x-admin.input-select
                                label="Product Instruction"
                                id="instruction_id"
                                name="instruction_id"
                                value=""
                                placeholder="Product Instruction"
                                :options="$instructions"
                            />
                            <x-admin.error-message fieldName="Category" :message={{ $message }}/>
                            {{--END Field Instruction--}}

                            {{--Field Weight--}}
                            <x-admin.label for="weight" value="Product Weight" />
                            <x-admin.text-input
                                fieldType="text"
                                id="weight"
                                name="weight"
                                value=""
                                placeholder="Product Weight"
                            />
                            <x-admin.error-message fieldName="weight" :message={{ $message }}/>
                            {{--END Field Weight--}}

                            {{--Field Weight--}}
                            <x-admin.label for="quantity" value="Product Quantity" />
                            <x-admin.text-input
                                fieldType="text"
                                id="quantity"
                                name="quantity"
                                value=""
                                placeholder="Product Quantity"
                            />
                            <x-admin.error-message fieldName="quantity" :message={{ $message }}/>
                            {{--END Field Weight--}}


                            <div class="flex flex-col gap-5.5 p-6.5">
                                <div>
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Product image
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

                            <x-admin.save-button message="Save new Product"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
