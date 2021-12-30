<div> 
@if (session()->has('message') && session('message')==='delete')
    <div class="alert alert-success">
    <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">X</button>
        {{ __('message.deleteMSG') }}
    </div>
@elseif(session()->has('message') && session('message')==='update')
    <div class="alert alert-success">
    <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">X</button>
        {{ __('message.updateMSG') }}
    </div>
@elseif(session()->has('message') && session('message')==='create')
    <div class="alert alert-success">
    <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">X</button>
        {{ __('message.createMSG') }}
    </div>
@endif
<div class="card">
    <div class="card-body">
        <div >
            <p class="card-title mb-0">{{__('message.category')}}</p>
            
            <div class="card">
                
                <div class="card-body">
                    @if($updateMode)
                        @include('livewire.admin.category.update')
                    @elseif($createMode)
                        @include('livewire.admin.category.create')
                    @else
                    
                    <div>
                    <button wire:click="addCategory()" class="btn btn-inverse-primary btn-icon-text">
                        {{__('message.create')}}
                        <i class="ti-file btn-icon-prepend"></i>
                    </button>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                <th>{{__('Name')}}</th>
                                <th>{{__('message.image')}}</th>
                                <th >{{__('Action')}}</th>
                                <th >{{__('message.status')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categorys as $cats)
                                <tr>   
                                    <td>{{ $cats->name }}</td>
                                    <td>
                                        <img style="width:200px;height:auto;" src="{{ asset('storage/'.$cats->img_url) }}" alt="image">
                                    </td>     
                                    <td>
                                        <button wire:click="edit({{ $cats->id }})" class="btn btn-inverse-secondary btn-icon-text btn-sm">
                                            {{__('message.edite')}}
                                            <i class="ti-reload btn-icon-prepend"></i>
                                        </button>
                                        <button wire:click="delete({{ $cats->id }})" class="btn btn-inverse-danger btn-icon-text btn-sm">
                                            {{__('message.delete')}}
                                            <i class="ti-trash btn-icon-prepend"></i>
                                        </button>
                                    </td>
                                    <td>
                                        @if($cats->active_state)
                                            <div class="badge badge-success">{{__('message.active')}}</div>
                                        @elseif(!$cats->active_state)
                                            <div class="badge badge-danger">{{__('message.deactive')}}</div>

                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</div>
