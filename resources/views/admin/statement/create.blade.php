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

                            <x-admin.text-input
                                label="Statement Name"
                                fieldType="text"
                                id="title"
                                name="title"
                                value=""
                                placeholder="Statement Title"
                                :message={{ $message }}
                            />
                            <div class="flex flex-col gap-5.5 p-6.5 pt-0">
                                @error('title')
                                <div class="error text-frontred">{{ $message }}</div>
                                @enderror
                            </div>

                            <x-admin.quill-editor title="Statement Content" name="content" id="hidden-content" value=""/>
                            <div class="flex flex-col gap-5.5 p-6.5 pt-0">
                                @error('content')
                                <div class="error text-frontred">{{ $message }}</div>
                                @enderror
                            </div>

                            <x-admin.save-button message="Save new Statement"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
