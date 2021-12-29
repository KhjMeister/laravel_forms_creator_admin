<div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session()->has('message') && session('message')==='delete')
                <div class="alert alert-success">
                <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ __('message.deleteMSG') }}
                </div>
            @elseif(session()->has('message') && session('message')==='update')
                <div class="alert alert-success">
                <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ __('message.updateMSG') }}
                </div>
            @elseif(session()->has('message') && session('message')==='create')
                <div class="alert alert-success">
                <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ __('message.createMSG') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header" style="display:flex;justify-content:space-between;">
                   <div>
                        {{ __('message.category') }}
                   </div>
                </div>
                <div class="card-body">
                    @if($updateMode)
                        @include('livewire.admin.category.update')
                    @elseif($createMode)
                        @include('livewire.admin.category.create')
                    @else
                    
                    <div>
                    <button wire:click="addCategory()" class="btn btn-success btn-sm">{{__('message.create')}}</button>

                    </div>
                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                            <th>{{__('Name')}}</th>
                            <th>{{__('message.image')}}</th>
                            <th >{{__('Action')}}</th>
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
                                    <button wire:click="edit({{ $cats->id }})" class="btn btn-primary btn-sm">{{__('message.edite')}}</button>
                                    <button wire:click="delete({{ $cats->id }})" class="btn btn-danger btn-sm">{{__('message.delete')}}</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</div>
