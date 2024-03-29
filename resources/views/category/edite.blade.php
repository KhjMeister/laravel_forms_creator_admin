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
                   <a href="{{ route('categories.index') }}" class="btn btn-secondary">{{ __('message.back')}}</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('categories.update',[$category->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}" required autocomplete="name" autofocus>

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
                                <img style="width:160px;height:auto;" src="{{ asset('uploads/'.$category->img_url) }}" alt="">
                                
                                <input id="old_img_url" type="text" class="form-control @error('old_img_url') is-invalid @enderror" value="{{ $category->img_url }}" name="old_img_url" hidden autofocus>
                                <input id="img_url" type="file" class="form-control @error('img_url') is-invalid @enderror" name="img_url"  autofocus>
                                @error('img_url')
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
