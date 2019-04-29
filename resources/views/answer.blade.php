
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
                            <div class="card">
                                <div class="card-header">Answer</div>
                                <div class="card-body">
                                    {{$answer->body}}
                                </div>
                                <div class="card-footer">
                                    {{ Form::open(['method'  => 'DELETE', 'route' => ['answers.destroy', $question, $answer->id]])}}
                                    <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">
                                        Delete
                                    </button>
                                    {!! Form::close() !!}
                                    <a class="btn btn-primary float-right mr-2" href="{{ route('answers.edit',['question_id'=> $question, 'answer_id'=> $answer->id, ])}}">
                                        Edit Answer
                                    </a>
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