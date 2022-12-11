<div>
    <div class="mb-3">
        <input type="number" class="form-control" wire:model="keranjang">
    </div>
    <button class="btn btn-primary" wire:model="keranjang" wire:click="plus"> + Plus</button>
    @if ($keranjang >= 1)
    <button class="btn btn-danger" wire:click="minus"> - Minus</button>
    @endif
</div>
