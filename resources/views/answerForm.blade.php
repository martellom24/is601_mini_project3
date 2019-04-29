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
                                <div class="card-header">Create Answer</div>
                                <div class="card-body">
                                    @if($edit === FALSE)
                                        {!! Form::model($answer, ['route' => ['answers.store', $question], 'method' => 'post']) !!}

                                    @else()
                                        {!! Form::model($answer, ['route' => ['answers.update', $question, $answer], 'method' => 'patch']) !!}
                                    @endif
                                    <div class="form-group">
                                        {!! Form::label('body', 'Body') !!}
                                        {!! Form::text('body', $answer->body, ['class' => 'form-control','required' => 'required']) !!}
                                    </div>
                                    <button class="btn btn-success float-right" value="submit" type="submit" id="submit">Save
                                    </button>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection