<div>

@if($indexPart)

    @if (session()->has('message') && session('message')==='deleteQNair')
        <div class="alert alert-success" aria="Close">
            <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">X</button>
            {{ __('message.deleteMSG') }}
        </div>
    @elseif(session()->has('message') && session('message')==='updateQNair')
        <div class="alert alert-success">
        <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">X</button>
            {{ __('message.updateMSG') }}
        </div>
    @elseif(session()->has('message') && session('message')==='createQNair')
        <div class="alert alert-success">
        <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">X</button>
            {{ __('message.createMSG') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-xl-10 mb-4 mb-xl-0">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <a class="btn btn-outline-primary " href="#">
                        {{__('message.readyQuestionNair')}}
                    </a>
                </div>
               
                <form class=" form-group col-12 col-xl-8" >          
                    <div class="row">
                        <input wire:model="name"  type="text" class="form-control col-9 col-lg-6 col-xl-6 @error('name') is-invalid @enderror" placeholder="{{__('message.questionNairName')}}">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                            &nbsp;
                            <button type="button" data-toggle="minimize" class="btn btn-outline-success col-4 col-lg-4 col-xl-4" wire:click.prevent="storeQNair()">
                            {{__('message.makeQuestionNair')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-xl-2">
            <div class="justify-content-end d-flex">
                <a class="btn btn-outline-secondary" href="{{ route('home') }}">
                    {{__('message.back')}}
                </a>
            </div>
        </div>
    </div>
    <br>
 
    <div class="card">
        <div class="card-body">
            <div class="row">
                <p class="card-title mb-0 col-4"> {{ __('message.yourQuestionNair') }}</p>
                <div class="col-4">
                    <div class="input-group">
                        
                        <input wire:model="search" type="text" class="form-control " id="navbar-search-input" placeholder="{{ __('Search') }}" aria-label="search" aria-describedby="search">
                    
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div >
                    <div class="card-body">
                        <div class="row align-center">
                            
                            <div class="col-12">
                            
                                @if($updateQN)
                                    @include('livewire.user.questionnair.update')
                                @else
                                <div class="table-responsive">  
                                    <table class="table table-striped table-borderless ">
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
                                                    <button wire:click="deleteQNair({{ $qnair->id }})" class="btn btn-outline-danger btn-sm">{{__('message.delete')}}</button>
                                                    <button type="button" data-toggle="minimize" wire:click="show_questions({{ $qnair->id }})" class="btn btn-outline-info btn-sm">{{__('message.show')}}</button>
                                                    <button wire:click="editQNair({{ $qnair->id }})" class="btn btn-outline-primary btn-sm">{{__('message.edite')}}</button>       
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
                                </div>
                                <div class="mypaginate">
                                    {{ $qunairs->links('vendor.livewire.simple-bootstrap') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Modal -->
        <!-- <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> ایجاد پرسش نامه</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('message.Cancel')}}</button>
                    <button type="button" class="btn btn-primary"></button> 
                </div>
                </div>
            </div>-->
        </div> 

    </div>

    @elseif($questionPart)
        @include('livewire.user.questionnair.createQuestion')
    @endif
</div>
