<div class="flex flex-col gap-5.5 p-6.5">
    <div>
        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
            {{ $title }}
        </label>
        <div id="editor"></div>
        <input class="quill-textarea" name="{{ $name }}" id="{{ $id }}" style="display:none" value="{{ $value ? html_entity_decode(strip_tags($value)) : '' }}"/>
    </div>
</div>
