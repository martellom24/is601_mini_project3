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
                                <div class="card-header">Create Question</div>
                                <div class="card-body">
                                    @if($edit === FALSE)
                                        {!! Form::model($question, ['action' => 'QuestionController@store']) !!}
                                    @else()
                                        {!! Form::model($question, ['route' => ['question.update', $question->id], 'method' => 'patch']) !!}
                                    @endif
                                    <div class="form-group">
                                        {!! Form::label('body', 'Body') !!}
                                        {!! Form::text('body', $question->body, ['class' => 'form-control','required' => 'required']) !!}
                                    </div>
                                    <button class="btn btn-success float-right" value="submit" type="submit" id="submit">Save
                                    </button>
                                    {!! Form::close() !!}
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