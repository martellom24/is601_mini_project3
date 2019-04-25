@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    @include('includes.sidebar')
                </div>
                <!-- Widgets -->
                <div class="col-10">
                    <div class="row py-4">
                        <div class="col-8">@include('widgets.welcomeWidget')</div>
                        <div class="col-3 offset-1">@include('widgets.cardsWidget')</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
