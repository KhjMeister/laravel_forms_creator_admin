<form class="row form-group" >   
    <input type="hidden" wire:model="q_id">
    <div class="row col-6">
        <input wire:model="name"  type="text" class="form-control col-6 @error('name') is-invalid @enderror" wire:model="name"  >
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        <button  class="btn btn-info " wire:click.prevent="updateQNair()">
        {{__('message.confirm')}}
        </button>

    </div>
</form>