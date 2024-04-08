<div wire:click="sumCart" tabindex="0" role="button" class="btn btn-ghost btn-circle" data-drawer-target="drawer-cart" data-drawer-show="drawer-cart" data-drawer-placement="right" aria-controls="drawer-cart">
    <div class="indicator">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
        @if ($cartSum != 0)
        <span class="badge badge-sm indicator-item">{{ $cartSum }}</span>
        @endif
    </div>
</div>