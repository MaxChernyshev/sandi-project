<div class="my-2 p-2 rounded-lg bg-white border-1 dark:bg-boxdark">
    <div class="rounded-sm bg-white dark:bg-boxdark">
        <div class="flex justify-end gap-5 xl:gap-20">
            <form action="{{ $route }}" method="{{ $method }}" class="flex space-x-2">
                <div class="m-10">
                    <input
                        type="{{ $fieldType }}"
                        name="{{ $name }}"
                        placeholder="{{ $placeHolder }}"
                        class="inline-flex items-center justify-center rounded-md border border-black px-10 py-4 text-center font-medium text-black hover:font-900 hover:bg-opacity-90 lg:px-4 xl:px-10 dark:bg-white">
                </div>
                <div class="rounded-sm bg-white dark:bg-boxdark">
                    <div class="flex justify-end gap-5 xl:gap-20">
                        <button type="submit" class="inline-flex items-center justify-center rounded-md border border-black px-5 py-5 text-center font-medium text-black hover:font-900 hover:bg-opacity-90 lg:px-5 xl:px-5 dark:bg-white">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
