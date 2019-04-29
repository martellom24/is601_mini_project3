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
                        <div class="col-8">@include('widgets.welcomeWidget')</div>
                        <div class="col-3 offset-1">@include('widgets.cardsWidget')</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">Questions
                                    <div class="card-body">
                                        <div class="card-deck">
                                            @foreach($questions as $question)
                                                <div class="col-sm-4 d-flex align-items-stretch">
                                                    <div class="card mb-3">
                                                        <div class="card-header">
                                                            <small class="text-muted">
                                                                Updated: {{ $question->created_at->diffForHumans() }}
                                                                Answers: {{ $question->answer()->count() }}
                                                            </small>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">{{$question->body}}</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <a href="{{route('question.show', ['id', $question->id])}}" class="btn btn-primary">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
