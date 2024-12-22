@extends('admin.layouts.layout')

@section('content')
    <!-- ===== Main Content Start ===== -->


    <div class="mx-4 p-4">
        <div class="max-w-full overflow-x-auto">
            <div class="min-w-[1170px]">

                {{-- Import Products Button section--}}

                <form action="{{ route('admin.products.import.products') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    {{ csrf_field() }}
                    @csrf
                    <input type="file" name="file" id="file">
                    <button type="submit">Import</button>
                </form>

            </div>
        </div>
    </div>

    <!-- ===== Main Content End ===== -->

@endsection
