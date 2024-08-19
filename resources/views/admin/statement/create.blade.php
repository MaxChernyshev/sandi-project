@extends('admin.layouts.layout')

@section('content')
    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                <x-admin.back-button message="Back" :href="route('admin.statements.index')"/>

                <div class="my-4 p-4 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <form id="myForm" role="form" method="POST" action="{{ route('admin.statements.store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="flex flex-col gap-5.5 p-6.5">
                                <div>
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Statement title
                                    </label>
                                    <input
                                        type="text"
                                        id="title"
                                        name="title"
                                        value="{{ old('title') }}"
                                        placeholder="Statement Title"
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                                    @error('title')
                                    <div class="error text-frontred">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>




                            <div class="flex flex-col gap-5.5 p-6.5">
                                <div>
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Statement title
                                    </label>

                                    {{-- TODO WYSIWYG Editor Quill put js and css in resource folder CDN instead --}}

                                    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

                                    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">

                                    <div id="editor"></div>
                                    <textarea name="content" id="hidden-content" style="display:none"></textarea>
                                </div>

                            </div>

                            <x-admin.save-button message="Save new Statement"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
