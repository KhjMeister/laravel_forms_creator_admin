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
                        {{ __('message.create') }}
                   </div>
                   <a href="{{ route('categories.index') }}" class="btn btn-secondary">{{ __('message.back')}}</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="img_url" class="col-md-4 col-form-label text-md-right">{{ __('message.image') }}</label>

                            <div class="col-md-6">
                                <input id="img_url" type="file" class="form-control @error('img_url') is-invalid @enderror" name="img_url"  required  autofocus>

                                @error('img_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
