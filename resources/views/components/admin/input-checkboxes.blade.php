<div class="flex px-6.5">
    <div class="grid grid-cols-5 gap-6">
        @foreach($options as $value => $label)
            <div class="rounded-lg border-[1.5px] border-stroke bg-transparent p-3">
                <label class="">
                    <input
                        type="{{ $fieldType }}"
                        name="{{ $name }}[]"
                        value="{{ $value }}"
                        @if(in_array($value, $selected)) checked @endif
                        class="rounded-lg border-[1.5px] border-stroke bg-transparent p-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                    />
                    <span class="m-2 text-xl">{{ $label }}</span>
                </label>
            </div>
        @endforeach
    </div>
</div>

