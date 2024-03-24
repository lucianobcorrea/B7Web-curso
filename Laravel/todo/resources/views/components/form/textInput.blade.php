<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <input name="{{ $name }}" id="{{ $name }}" type="{{ empty($type) ? 'text' : $type }}"
        placeholder="{{ $placeholder ?? '' }}" {{ empty($required) ? 'required' : '' }} />
</div>
