@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display:flex;justify-content:space-between;">
                   <div>
                        {{ __('message.category') }}
                   </div>
                   <div>
                        
                    </div>
                </div>

                <div class="card-body">
                   <livewire:admin.category />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
