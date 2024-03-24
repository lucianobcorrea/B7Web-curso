<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <select {{ empty($required) ? 'required' : '' }} name="{{ $name }}" id="{{ $name }}">
        <option selected disabled value="">Selecione uma opcao</option>
        {{ $slot }}
    </select>
</div>
