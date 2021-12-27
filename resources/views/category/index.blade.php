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
                   <div>
                        <a href="{{ route('categories.create') }}" class="btn btn-success " style="text-align:right;">
                            {{ __('message.create') }}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                    <thead>
                        <tr>
                        <th>{{__('Name')}}</th>
                        <th>{{__('message.image')}}</th>
                        <th>{{__('')}}</th>
                        <th colspan="3">{{__('Action')}}</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $allCategory as $category )
                            <tr>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                    <img style="width:200px;height:auto;" src="{{ asset('uploads/'.$category->img_url) }}" alt="kj">
                                </td>
                                <td>

                                </td>
                                <td>
                                <form method="post" action="{{ route('categories.destroy',[$category->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >{{ __('message.delete') }}</button>
                                </form>    
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{route('categories.show',[$category->id])}}">{{__('message.show')}}</a> 
                                </td>
                                <td>
                                    <a class="btn btn-secondery" href="{{route('categories.edit',[$category->id])}}">{{__('message.edite')}}</a> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </tabel>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
