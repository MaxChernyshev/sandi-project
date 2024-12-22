<div class="flex flex-col gap-5.5 p-6.5 pt-0">
    @error($fieldName)
    <div class="error text-frontred">{{ $message }}</div>
    @enderror
</div>
