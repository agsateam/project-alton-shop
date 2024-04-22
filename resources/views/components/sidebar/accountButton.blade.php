<?php 
$checkPath = request()->getPathInfo() == $href;
?>

@props(['state' => 'default'])

<a {{ $attributes }}
    class="{{ $checkPath ? "btn-primary text-white" : "btn-ghost hover:bg-primary hover:text-white "}}
        btn w-full mb-0 md:mb-0 md:my-2 text-start justify text-xs md:text-base border {{ $state == 'outline' ? 'border-primary text-primary' : 'border-gray-300 text-black' }}">
    {{ $slot }}
</a>
