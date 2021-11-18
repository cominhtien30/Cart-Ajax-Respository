@extends('layout')
@section('content')
    <div class="content d-flex align-items-center flex-column">
        @include('component.list')
    </div>
    @include('component.loading')
@endsection
