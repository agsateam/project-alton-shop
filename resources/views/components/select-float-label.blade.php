@props([
    'label' => 'Label',
    'name'  => 'name',
    'id'    => 'id',
    'value' => '',
    'class' => '',
])

<div class="relative {{ $class }}">
    <select wire:model="{{ $name }}" id="{{ $id }}" value="{{ $value }}" class="w-full block px-2.5 pb-2.5 pt-4 text-sm text-gray-900 bg-transparent rounded-sm border-1 {{ $errors->has($name) ? 'border-red-500' : 'border-[#B7B7B7]' }} appearance-none peer">
        {{ $slot }}
    </select>
    <label for="{{ $id }}" class="absolute text-sm {{ $errors->has($name) ? 'text-red-500' : 'text-gray-500' }} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">{{ $label }}</label>
</div>