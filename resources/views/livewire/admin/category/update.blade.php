<form>
    <input type="hidden" wire:model="c_id">
    <div class="form-group">
        <label for="exampleFormControlInput1">{{ __('Name') }}:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">{{ __('message.image') }}:</label>
        <img style="width:160px;height:auto;" src="{{ asset('storage/'.$old_img_url) }}" alt="">
        <input type="file" class="form-control" id="exampleFormControlInput2" wire:model="img_url" >
        @error('img_url') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class=" btn btn-primary btn-icon-text">
        {{ __('message.confirm') }}
        <i class="ti-file btn-icon-prepend"></i>
    </button>
    <button wire:click.prevent="cancelUpdate()" class="btn btn-secondary btn-icon-text">
        {{ __('message.Cancel') }}
        <i class="ti-upload btn-icon-prepend"></i>
    </button>

</form>