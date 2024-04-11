<div>
    <div class="mt-5 mb-3">
        <input type="checkbox" wire:click="tosCheck" id="tos-agreement" {{ $tosAgree ? 'checked' : '' }}>
        <label for="tos-agreement" class="text-xs"> Saya menyetujui <a class="text-primary underline" href="/tos" wire:navigate>Syarat & Ketentuan</a> yang berlaku.</label>
    </div>
    <button {{ $subTotal > 0 && $tosAgree ? '' : 'disabled' }} class="btn btn-primary w-full text-white rounded-sm">
        <span>Bayar Sekarang</span>
    </button>
</div>