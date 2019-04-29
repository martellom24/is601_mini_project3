@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 bg-dark">
                    @include('includes.sidebar')
                </div>
                <div class="col-10">
                    <!-- Widgets -->
                    <div class="row justified-content-center py-4">
                        <div class="col-8">
                            @include('widgets.welcomeWidget')
                            @include('widgets.questionsWidget')
                        </div>
                        <div class="col-3 offset-1">
                            @include('widgets.cardsWidget')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
