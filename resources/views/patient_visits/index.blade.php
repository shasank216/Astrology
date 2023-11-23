@extends('layouts.app')
@section('title')
    {{ __('messages.visits') }}
@endsection
@section('content')
    <div class="container-fluid">
        @include('flash::message')
        <div class="d-flex flex-column">
            <livewire:patient-visit-table/>
        </div>
    </div>
@endsection
