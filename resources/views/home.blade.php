@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-secondary" href="{{ route('questionnair.index') }}">{{ __('message.questionnair') }}</a>
                    <br>
                    <br>
                    <a class="btn btn-secondary" href="{{ route('categories.index') }}">{{ __('message.category') }}</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
