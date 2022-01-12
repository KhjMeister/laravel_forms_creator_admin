<form class=" form-group" >          
    <div class="row">
        <input wire:model="sText"  type="text" class="form-control col-8 @error('sText') is-invalid @enderror" placeholder="{{__('message.question')}}">
            @error('sText') <span class="text-danger">{{ $message }}</span>@enderror
            &nbsp;
            <div class="form-check col-8">
                <label class=" form-check-label">
                    <input class="form-check-input" wire:model="sstate" type="checkbox" />
                    <i class="input-helper">{{__('message.sActivate')}}</i>
                </label>
            </div>
            <div class="form-check col-8">
                <label class=" form-check-label">
                    <input class="form-check-input" wire:model="force_answer" type="checkbox" />
                    <i class="input-helper">{{__('message.forceAnswer')}}</i>
                </label>
            </div>
            <div class="form-check col-8">
                <label class=" form-check-label">
                    <input class="form-check-input" wire:click="change_file_section()" type="checkbox" />
                    <i class="input-helper">{{__('message.fileSection')}}</i>
                </label>
            </div>

            @if($fileSection)
                @include('livewire.user.questionnair.fileSection')

            @endif
            <button type="button" data-toggle="minimize" class="col-8 btn btn-outline-success " wire:click.prevent="storeTQuestion()">
            {{__('message.confirm')}}
        </button>
    </div>
</form>