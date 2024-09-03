<div class="flex flex-col gap-5.5 px-6.5">
    <div>
        <div id="editor"></div>
        <input class="quill-textarea" name="{{ $name }}" id="{{ $id }}" style="display:none" value="{{ $value ? html_entity_decode(strip_tags($value)) : '' }}"/>
    </div>
</div>
