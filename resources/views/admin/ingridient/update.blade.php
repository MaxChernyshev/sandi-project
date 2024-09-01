@extends('admin.layouts.layout')

@section('content')
    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                <x-admin.back-button message="Back" :href="route('admin.ingridients.index')"/>

                <div class="my-2 p-2 rounded-lg bg-white border-1 dark:bg-boxdark">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <form id="myForm" role="form" method="POST" action="{{ route('admin.ingridients.update', ['ingridient' => $ingridient]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <x-admin.text-input
                                label="Ingridient Name"
                                fieldType="text"
                                id="name"
                                name="name"
                                value="{{ old('name') ?? $ingridient->name }}"
                                placeholder="Ingridient Title"
                                :message={{ $message }}
                            />
                            @error('name')
                            <div class="flex flex-col p-6.5 pt-0">
                                <label class="mb-3 block text-sm font-medium pl-6.5">
                                    <div class="error text-frontred">{{ $message }}</div>
                                </label>
                            </div>
                            @enderror

                            <x-admin.save-button message="Save Changes"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
