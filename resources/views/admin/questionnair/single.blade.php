@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
    
    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display:flex;justify-content:space-between;">
                   <div>
                        {{ __('message.questionnair') }}
                   </div>
                   <a href="{{ route('questionnair.index') }}" class="btn btn-secondary">{{ __('message.back')}}</a>
                  
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                   <div class="container">
                        <div>

                            {{ $questionnair->qname }}
                           
                        </div>
                   </div>

                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
