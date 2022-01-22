<div class="col-8 row">
    <div class="container">
    <div class="form-group row">
        <div class="col-sm-4">
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" wire:click="changeVideoSection(1)" name="membershipRadios" id="membershipRadios1" >
            عکس
            <i class="input-helper"></i></label>
        </div>
        </div>
        <div class="col-sm-5">
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" wire:click="changeVideoSection(2)"  name="membershipRadios" id="membershipRadios2" >
            ویدیو
            <i class="input-helper"></i></label>
        </div>
        </div>
    </div>
    </div>
    @if($videoSection==true)
    <div class="form-group col-6">
        <label for="image" class="btn btn-outline-info btn-sm">{{ __('message.image_url') }}</label>
        <input type="file" class="form-control " hidden id="image" wire:model="image_url" >
        @error('image_url') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    @elseif($videoSection==false)
    <div class="form-group col-6">
        <label for="video">{{ __('message.video_url') }}:</label>
        <input type="text" class="form-control" id="video" wire:model="video_url" >
        @error('video_url') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    @endif
</div>