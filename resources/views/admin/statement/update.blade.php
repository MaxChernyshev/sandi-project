@extends('admin.layouts.layout')

@section('content')

    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                <x-admin.back-button message="Back" :href="route('admin.statements.index')"/>

                <div class="my-2 p-2 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <form id="myForm" role="form" method="POST" action="{{ route('admin.statements.update', ['statement' => $statement]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <x-admin.text-input
                                label="Statement Name"
                                fieldType="text"
                                id="title"
                                name="title"
                                value="{{ old('title') ?? $statement->title }}"
                                placeholder="Statement Title"
                                :message={{ $message }}
                            />
                            @error('title')
                            <div class="flex flex-col p-6.5 pt-0">
                                <label class="mb-3 block text-sm font-medium pl-6.5">
                                    <div class="error text-frontred">{{ $message }}</div>
                                </label>
                            </div>
                            @enderror

                            <x-admin.quill-editor
                                title="Statement Content"
                                name="content"
                                id="hidden-content"
                                value="{{ old('content') ?? $statement->content }}"
                            />
                            <div class="flex flex-col gap-5.5 p-6.5 pt-0">
                                @error('content')
                                <div class="error text-frontred">{{ $message }}</div>
                                @enderror
                            </div>

                            <x-admin.save-button message="Save Changes"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
