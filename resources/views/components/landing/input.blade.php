@props([
    'id' => null,
    'name' => '',
    'type' => 'text',
    'label' => '',
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'bg' => ''
])

<div>
    @if ($label)
        <label for="{{ $id ?? $name }}" class="block text-text-high mb-2 ml-1">
            {{ $label }}
        </label>
    @endif
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id ?? $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if ($required) required @endif
        {{ $attributes->merge(['class' => 'block w-full border-gray-300 rounded-sm py-2 px-4 text-text-high']) }}
    >
    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
