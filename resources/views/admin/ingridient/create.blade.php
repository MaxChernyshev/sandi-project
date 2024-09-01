@extends('admin.layouts.layout')

@section('content')
    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                <x-admin.back-button message="Back" :href="route('admin.ingridients.index')"/>

                <div class="my-4 p-4 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <form id="myForm" role="form" method="POST" action="{{ route('admin.ingridients.store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <x-admin.text-input
                                label="Ingridient Name"
                                fieldType="text"
                                id="name"
                                name="name"
                                value=""
                                placeholder="Ingridient Name"
                                :message={{ $message }}
                            />
                            <div class="flex flex-col gap-5.5 p-6.5 pt-0">
                                @error('name')
                                <div class="error text-frontred">{{ $message }}</div>
                                @enderror
                            </div>

                            <x-admin.save-button message="Save new Ingridient"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
