<div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
            <div class="card">
                <div class="card-header" style="display:flex;justify-content:space-between;">
                    <div>{{ __('message.questionnair') }}</div>
                
                    <div class="col-6">
                        <a class="btn btn-secondary" href="{{ route('home') }}">
                        {{__('message.back')}}
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-success" href="#">
                                {{__('message.readyQuestionNair')}}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-center">
                        <div class="col-6">
                        @if($updateQN)
                                <div>
                                </div>
                            @else
                            <form class="row form-group" >
                                
                                <div class="row col-6">
                                    <input wire:model="name"  type="text" class="form-control col-6 @error('name') is-invalid @enderror" placeholder="{{__('message.questionNairName')}}">
                                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                                    <button  class="btn btn-success " wire:click.prevent="storeQNair()">
                                    {{__('message.makeQuestionNair')}}
                                    </button>

                                </div>
                            </form>
                            @endif
                        </div>
                        <div class="col-6">
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
                                            <button wire:click="deleteQNair({{ $qnair->id }})" class="btn btn-danger btn-sm">{{__('message.delete')}}</button>
                                            <button  class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#showModal">{{__('message.show')}}</button>
                                            <button wire:click="editQNair({{ $qnair->id }})" class="btn btn-primary btn-sm">{{__('message.edite')}}</button>
                                            
                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" wire:click="changeQState({{ $qnair->id }},{{ $qnair->qstate }})" type="checkbox" id="status" {{ $qnair->qstate ? 'checked' : '' }} />
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
