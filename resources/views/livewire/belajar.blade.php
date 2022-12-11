<div>
    <div class="mb-3">
        {{-- <input type="text" class="form-control" wire:model="nama"> --}}
        {{-- <textarea class="form-control" wire:model="nama"></textarea> --}}
        {{-- <input type="radio" name="jenis_kelamin" value="laki-laki" wire:model="nama"> Laki-laki
        <input type="radio"name="jenis_kelamin" value="perempuan" wire:model="nama"> Perempuan  --}}

        {{-- <select class="form-select" wire:model="nama">
            <option hidden>Pilih Jenis Kelamin</option>
            <option value="laki">Laki</option>
            <option value="perempuan">Perempuan</option>
        </select> --}}
        <input 
        @if ($show_password == 'show')
            type="text"
        @else
            type="password"
        @endif
        class="form-control" wire:model="nama">
        <label for="">Show Password</label>
        <input type="checkbox" wire:model="show_password" value="show">
    </div>
    {{-- Halo Nama Saya Adalah {{  $nama }} --}}
</div>
