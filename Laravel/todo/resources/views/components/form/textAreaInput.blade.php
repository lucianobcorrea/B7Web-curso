<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <textarea placeholder="{{ $placeholder ?? '' }}" rows="5" name="{{ $name }}" id="{{ $name }}"
        {{ empty($required) ? 'required' : '' }}></textarea>
</div>
