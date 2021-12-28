@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
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
                            <form method="post" class="row form-group" action="{{ route('questionnair.store') }}">
                                @csrf
                                <div class="row col-6">
                                    <input  name="name" type="text" class="form-control col-6 @error('name') is-invalid @enderror" placeholder="{{__('message.questionNairName')}}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button type="submit" class="btn btn-success " href="{{ route('questionnair.create') }}">
                                    {{__('message.makeQuestionNair')}}
                                    </button>

                                </div>
                            </form>
                            
                        </div>
                        <div class="col-6">
                        <h6>{{ __('message.yourQuestionNair') }}</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                <th>{{__('Name')}}</th>
                                <th></th>
                                <th></th>
                                <th colspan="3">{{__('Action')}}</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            @foreach( $questionnair as $quest)
                            <tr>
                                <td>
                                {{ $quest->qname }}
                                </td>

                                <td>

                                </td>
                                <td>
                                <form method="post" action="{{ route('questionnair.destroy',[$quest->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >{{ __('message.delete') }}</button>
                                </form>    
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{route('questionnair.show',[$quest->id])}}">{{__('message.show')}}</a> 
                                </td>
                                <td>
                                    <a class="btn btn-secondery" href="{{route('questionnair.edit',[$quest->id])}}">{{__('message.edite')}}</a> 
                                </td>
                            </tr>
                            @endforeach

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
