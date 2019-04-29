@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 bg-dark">
                    @include('includes.sidebar')
                </div>
                <div class="col-10">
                    <div class="row py-4">
                        <div class="col-8">
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-body">
                                            {{$question->body}}
                                        </div>
                                        <div class="card-footer">
                                            <a class="btn btn-primary float-right"
                                               href="{{ route('question.edit',['id'=> $question->id])}}">
                                                Edit Question
                                            </a>

                                            {{ Form::open(['method'  => 'DELETE', 'route' => ['question.destroy', $question->id]])}}
                                            <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="btn btn-primary float-left" href="{{ route('answers.create', ['question_id'=> $question->id])}}">
                                                Answer Question
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            @forelse($question->answers as $answer)
                                                <div class="card mb-3">
                                                    <div class="card-body">{{$answer->body}}</div>
                                                    <div class="card-footer">
                                                        <a class="btn btn-primary float-right"
                                                           href="{{ route('answers.show', ['question_id'=> $question->id,'answer_id' => $answer->id]) }}">
                                                            View
                                                        </a>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="card">
                                                    <div class="card-body"> No Answers</div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
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