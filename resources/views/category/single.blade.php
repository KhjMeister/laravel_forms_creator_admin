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
                        {{ __('message.category') }}
                   </div>
                   <a href="{{ route('categories.index') }}" class="btn btn-secondary">{{ __('message.back')}}</a>
                  
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                   <div class="container">
                        <div>

                            {{ $category->name }}
                            <img style="width:200px;height:auto;" src="{{ asset('uploads/'.$category->img_url) }}" alt="kj">
                        </div>
                   </div>

                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
