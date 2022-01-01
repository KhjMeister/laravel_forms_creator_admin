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
            <div class="row">
                <p class="card-title mb-0 col-3">{{__('message.users')}}</p>
                
                <div class="col-4">
                    <div class="input-group">
                        
                        <input wire:model="search" type="text" class="form-control " id="navbar-search-input" placeholder="{{ __('Search') }}" aria-label="search" aria-describedby="search">
                    
                    </div>
                </div>
            </div>
            <div class="card">
                
                <div class="card-body">
                   
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                <th>{{__('Name')}}</th>
                                <th >{{__('message.email')}}</th>
                                <th >{{__('message.phone')}}</th>
                                <th >{{__('message.activeTime')}}</th>
                                <th >{{__('message.activeType')}}</th>
                                <!-- <th >{{__('Action')}}</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $usr)
                                <tr wire:transition.fade.1s>   
                                    <td>{{ $usr->name }}</td>
                                       
                                    <td>
                                        {{ $usr->email }}
                                    </td>
                                    <td>
                                        {{ $usr->phone }}
                                    </td>
                                    <td>
                                        {{ $usr->activetime }} {{__('message.dayLeft')}}
                                    </td>
                                    <td>
                                        @if($usr->activetype === 1)
                                            <div class="badge badge-primary">{{__('message.activeOne')}}</div>
                                        @elseif($usr->activetype === 2)
                                            <div class="badge badge-success">{{__('message.activeTwo')}}</div>
                                        @elseif($usr->activetype === 3)
                                            <div class="badge badge-info">{{__('message.activeThree')}}</div>
                                        @elseif($usr->activetype === 0)
                                            <div class="badge badge-danger">{{__('message.notActive')}}</div>
                                        
                                        @endif
                                    </td>
                                    <!-- <td>
                                        <button wire:click="editUser({{ $usr->id }})" class="btn btn-inverse-secondary btn-icon-text btn-sm">
                                            {{__('message.edite')}}
                                            <i class="ti-pencil btn-icon-prepend"></i>
                                        </button>
                                        @if(!($usr->activetype === 0))
                                            <button wire:click="deActiveUser({{ $usr->id }})" class="btn btn-inverse-warning btn-icon-text btn-sm">
                                                {{__('message.deActivate')}}
                                                <i class="ti-reload btn-icon-prepend"></i>
                                            </button>
                                        @endif
                                        @if($usr->activetype === 0)
                                            <button wire:click="activeUser({{ $usr->id }})" class="btn btn-inverse-success btn-icon-text btn-sm">
                                                {{__('message.activate')}}
                                                <i class="ti-reload btn-icon-prepend"></i>
                                            </button>
                                        @endif
                                       
                                    </td> -->
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>

                    </div>
                    <div class="mypaginate">
                        {{ $users->links('vendor.livewire.simple-bootstrap') }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

</div>
