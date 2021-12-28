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
                        {{ __('message.edite') }}
                   </div>
                   <a href="{{ route('questionnair.index') }}" class="btn btn-secondary">{{ __('message.back')}}</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('questionnair.update',[$questionnair->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row mb-3">
                            <label for="qname" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            
                                <input id="qname" type="text" class="form-control @error('qname') is-invalid @enderror" name="qname" value="{{ $questionnair->qname }}" required autocomplete="qname" autofocus>

                                @error('qname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('message.confirm') }}
                                </button>
                               
                            </div>
                            
                        </div>
                    </form>

                   
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
