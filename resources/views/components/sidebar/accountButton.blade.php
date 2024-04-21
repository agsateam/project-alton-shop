<?php 
$checkPath = request()->getPathInfo() == $href;
?>

<a {{ $attributes }}
    class="{{ $checkPath ? "btn-primary text-white" : "btn-ghost text-black hover:bg-primary hover:text-white "}}
        btn w-full mb-0 md:mb-0 md:my-2 text-start justify text-xs md:text-base border border-primary">
    {{ $slot }}
</a>
