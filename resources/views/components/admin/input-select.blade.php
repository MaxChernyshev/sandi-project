<div class="flex flex-col px-6.5">
    <select id="{{ $id }}" name="{{ $name }}"
            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent p-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
        <option value=""> {{ $label }} </option>

        @foreach($options as $key=>$value)
            <option value="{{ $key }}"> {{ $value }} </option>
        @endforeach

    </select>
</div>
