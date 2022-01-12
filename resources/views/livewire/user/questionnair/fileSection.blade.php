<div class="form-group col-8">
    <label for="image">{{ __('message.image') }}:</label>
    <input type="file" class="form-control" id="image" wire:model="img_url" >
    @error('img_url') <span class="text-danger">{{ $message }}</span>@enderror
</div>

<div class="form-group col-8">
    <label for="video">{{ __('message.video') }}:</label>
    <input type="file" class="form-control" id="video" wire:model="video_url" >
    @error('video_url') <span class="text-danger">{{ $message }}</span>@enderror
</div>