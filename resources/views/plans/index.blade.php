@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 bg-dark">
                    @include('includes.sidebar')
                </div>
                <div class="col-10">
                    <div class="row justify-content-center my-5">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-header">Plans</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach($plans as $plan)
                                            <li class="list-group-item clearfix">
                                                <div class="pull-left">
                                                    <h5>{{ $plan->name }}</h5>
                                                    <h5>${{ number_format($plan->cost, 2) }} monthly</h5>
                                                    <h5>{{ $plan->description }}</h5>
                                                    <a href="" class="btn btn-outline-dark pull-right">Choose</a>
                                                    <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-outline-dark">Choose</a>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection