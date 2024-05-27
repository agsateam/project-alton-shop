<div class="flex flex-col w-1/4">
    <div
        class="bg-[#8D7B68] p-4 mb-1 inline-flex items-center text-white font-semibold cursor-pointer"
        wire:click="select('brownShadow')"
    >
        <input type="checkbox" value="#8D7B68" class="checked:bg-[#8D7B68]" @if($selected == 'brownShadow') checked @endif disabled/>
        <span class="ml-3">Brown Shadow</span>
    </div>
    <div
        class="bg-[#85586F] p-4 mb-1 inline-flex items-center text-white font-semibold cursor-pointer"
        wire:click="select('blackberry')"
    >
        <input type="checkbox" value="#85586F" class="checked:bg-[#85586F]" @if($selected == 'blackberry') checked @endif disabled/>
        <span class="ml-3">Blackberry</span>
    </div>
    <div
        class="bg-[#333333] p-4 mb-1 inline-flex items-center text-white font-semibold cursor-pointer"
        wire:click="select('dark')"
    >
        <input type="checkbox" value="#333333" class="checked:bg-[#333333]" @if($selected == 'dark') checked @endif disabled/>
        <span class="ml-3">Dark</span>
    </div>
    <div
        class="bg-[#9A3B3B] p-4 mb-1 inline-flex items-center text-white font-semibold cursor-pointer"
        wire:click="select('smokyTopaz')"
    >
        <input type="checkbox" value="#9A3B3B" class="checked:bg-[#9A3B3B]" @if($selected == 'smokyTopaz') checked @endif disabled/>
        <span class="ml-3">Smoky Topaz</span>
    </div>
    <div
        class="bg-[#7077A1] p-4 mb-1 inline-flex items-center text-white font-semibold cursor-pointer"
        wire:click="select('rhythm')"
    >
        <input type="checkbox" value="#7077A1" class="checked:bg-[#7077A1]" @if($selected == 'rhythm') checked @endif disabled/>
        <span class="ml-3">Rhytm</span>
    </div>

    <button class="bg-[#393939] hover:bg-white border-2 border-[#393939] hover:text-[#393939] text-white font-medium inline-flex justify-center p-3 mt-5" wire:click="save">
        <svg class="h-5 w-5 mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />  <circle cx="12" cy="14" r="2" />  <polyline points="14 4 14 8 8 8 8 4" /></svg>
        Simpan
    </button>
</div>