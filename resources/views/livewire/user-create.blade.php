<div>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif        
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                    @error('name')
                    <div id="" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                    @enderror                              
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                    @error('email')
                    <div id="" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model="password">
                    @error('password')
                    <div id="" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                    @enderror
                </div>
                <button wire:click="store" class="btn btn-primary">Submit</button>    
            </form>            
        </div>
    </div>
</div>
