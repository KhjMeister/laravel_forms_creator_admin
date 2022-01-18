@extends('layouts.home')

@section('content') 
   
    <livewire:home.qnr :qnrurl="$qnrurl" />
@endsection
