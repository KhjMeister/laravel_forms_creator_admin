<br>
<div class="row">
    <div class="col-3"></div>
    <form class="form-group col-6" >   
        <input type="hidden" wire:model="s_id">
        <div class="">
            <label for="stext">
            {{__('message.question')}}
            </label>
            <input wire:model="sText" id="stext"  type="text" class="form-control  @error('sText') is-invalid @enderror"   >
            @error('sText') <span class="text-danger">{{ $message }}</span>@enderror
            <button  class="btn btn-outline-info " wire:click.prevent="updateQuestion()">
            {{__('message.confirm')}}
            </button>

            <button  class="btn btn-outline-secondary " wire:click.prevent="cancelupdateQuestion()">
                {{__('message.back')}}
                
            </button>

        </div>
    </form>
    <div class="col-3"></div>
</div>