<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">{{ __('Name') }}:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ __('Name') }}" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">{{ __('message.image') }}:</label>
        <input type="file" class="form-control" id="exampleFormControlInput2" wire:model="img_url" >
        
        @error('img_url') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">
    {{ __('message.confirm') }}
    </button>
</form>
