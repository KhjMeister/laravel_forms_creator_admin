<div>
    @if (session()->has('message') && session('message')==='deleteQNair')
        <div class="alert alert-success" aria="Close">
            <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ __('message.deleteMSG') }}
        </div>
    @elseif(session()->has('message') && session('message')==='updateQNair')
        <div class="alert alert-success">
        <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ __('message.updateMSG') }}
        </div>
    @elseif(session()->has('message') && session('message')==='createQNair')
        <div class="alert alert-success">
        <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ __('message.createMSG') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-xl-10 mb-4 mb-xl-0">
            <div class="row">
                <div class="col-12 col-xl-4">
                <a class="btn btn-inverse-primary " href="#">
                    {{__('message.readyQuestionNair')}}
                </a>
                </div>
               
                <form class=" form-group col-12 col-xl-8" >          
                    <div class="row">
                        <input wire:model="name"  type="text" class="form-control col-xl-8 @error('name') is-invalid @enderror" placeholder="{{__('message.questionNairName')}}">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        <button  class="btn btn-inverse-success col-4" wire:click.prevent="storeQNair()">
                            {{__('message.makeQuestionNair')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-xl-2">
            <div class="justify-content-end d-flex">
                <a class="btn btn-inverse-secondary" href="{{ route('home') }}">
                    {{__('message.back')}}
                </a>
            </div>
        </div>
    </div>
    <br>
    
       
       
<div class="card">
    <div class="card-body">
        <p class="card-title mb-0">{{__('message.questionnair')}}</p>
        <div class="col-md-12">
            
            <div >
                <div class="card-body">
                    <div class="row align-center">
                        
                        <div class="col-12">
                            <h6>{{ __('message.yourQuestionNair') }}</h6>
                            @if($updateQN)
                                @include('livewire.user.questionnair.update')
                            @else
                                
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>{{__('Name')}}</th>
                                    <th >{{__('Action')}}</th>
                                    <th >{{__('message.status')}}</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                

                                @foreach( $qunairs as $qnair)
                                    <tr>
                                        <td>
                                            {{ $qnair->qname }}
                                        </td>
                                        
                                        <td>
                                            <button wire:click="deleteQNair({{ $qnair->id }})" class="btn btn-inverse-danger btn-sm">{{__('message.delete')}}</button>
                                            <button  class="btn btn-inverse-info btn-sm" data-bs-toggle="modal" data-bs-target="#showModal">{{__('message.show')}}</button>
                                            <button wire:click="editQNair({{ $qnair->id }})" class="btn btn-inverse-primary btn-sm">{{__('message.edite')}}</button>
                                            
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <label class=" form-check-label">
                                                    <input class="form-check-input" wire:click="changeQState({{ $qnair->id }},{{ $qnair->qstate }})" type="checkbox" id="status" {{ $qnair->qstate ? 'checked' : '' }} />
                                                    <i class="input-helper"></i>
                                                </label>
                                            </div>
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

    <!-- Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">نمایش پرسشنامه</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('message.Cancel')}}</button>
                <!-- <button type="button" class="btn btn-primary"></button> -->
            </div>
            </div>
        </div>
    </div>

</div>
