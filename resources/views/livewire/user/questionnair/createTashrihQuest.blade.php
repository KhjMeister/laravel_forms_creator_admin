<form class=" form-group" >          
    <div class="row">
        <input wire:model="sText"  type="text" class="form-control col-4 @error('sText') is-invalid @enderror" placeholder="{{__('message.question')}}">
            @error('sText') <span class="text-danger">{{ $message }}</span>@enderror
            &nbsp;
            <button type="button" data-toggle="minimize" class="btn btn-outline-success col-3 " wire:click.prevent="storeTQuestion()">
            {{__('message.confirm')}}
        </button>
    </div>
</form>