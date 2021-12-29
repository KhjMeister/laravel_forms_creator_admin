<div>
    @if (session()->has('message') && session('message')==='delete')
        <div class="alert alert-success">
            {{ __('message.deleteMSG') }}
        </div>
    @elseif(session()->has('message') && session('message')==='update')
        <div class="alert alert-success">
            {{ __('message.updateMSG') }}
        </div>
    @elseif(session()->has('message') && session('message')==='create')
        <div class="alert alert-success">
            {{ __('message.createMSG') }}
        </div>
    @endif
   
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
