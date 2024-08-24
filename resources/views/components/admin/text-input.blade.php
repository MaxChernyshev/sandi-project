<div class="flex flex-col p-6.5 pb-0.5">
    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
        {{ $label }}
    </label>
    <input type="{{ $fieldType }}"
           id="{{ $id }}"
           name="{{ $name }}"
           value="{{ $value }}"
           placeholder="{{ $placeholder }}"
           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent p-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
</div>
