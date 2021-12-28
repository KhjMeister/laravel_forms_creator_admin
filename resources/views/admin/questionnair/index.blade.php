@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">پرسش نامه  <div><a class="btn btn-secondary" href="{{ route('home') }}">برگشت</a></div> </div>
                <div class="card-body">
                    <div class="row align-center">
                        <div class="col-6">
                            <form method="post" class="row form-group" action="{{ route('questionnair.store') }}">
                                @csrf
                                <div class="row col-6">
                                    <input  name="name" type="text" class="form-control col-6" placeholder="نامی برای پرسش نامه خود انتخاب کنید">
                                    <button type="submit" class="btn btn-success " href="{{ route('questionnair.create') }}">
                                        ایجاد پرسش نامه
                                    </button>

                                </div>
                            </form>
                            
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success" href="#">
                                 پرسش نامه اماده
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
