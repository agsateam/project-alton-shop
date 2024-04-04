<a {{ $attributes }}
    class="{{ request()->fullUrlIs(url($href)) ? "btn-primary text-white" : "btn-ghost text-black hover:bg-primary hover:text-white "}}
        btn w-full mb-1 md:mb-0 md:my-2 text-start justify-start text-xs md:text-base"
>
    {{ $slot }}
</a>
