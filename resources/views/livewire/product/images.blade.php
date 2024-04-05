<div class="p-5 flex flex-col items-center">
    <img src="{{ $mainImages }}" class="w-[330px] border-2 border-gray-100 shadow-lg ml-5">
    <div class="flex flex-wrap justify-center mt-3">
        @foreach ($images as $img)
            <div wire:click="changeMainImages('{{ $img }}')" class="w-16 h-16 mr-1 mb-1 cursor-pointer">
                <img src="{{ $img }}" class="border-2 {{ $img == $mainImages ? 'border-primary' : 'border-gray-100' }} shadow-md">
            </div>
        @endforeach
    </div>
</div>