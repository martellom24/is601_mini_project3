@extends('layouts.app')

@section('content')
    <style>
        .filterDiv {
            display: none !important; /* Hidden by default */
        }
        .show {display:block;}
    </style>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 bg-dark">
                    @include('includes.sidebar')
                </div>
                <div class="col-10">
                    {{--search filter--}}
{{--                    <div class="row my-4">--}}
{{--                        <div class="col-12">--}}
{{--                            <div id="myBtnContainer" class="btn-group" role="group" aria-label="Basic example">--}}
{{--                                <button type="button" class="btn btn-secondary active" onclick="filterSelection('all')">All</button>--}}
{{--                                <button type="button" class="btn btn-secondary" onclick="filterSelection('g_one')">Group One</button>--}}
{{--                                <button type="button" class="btn btn-secondary" onclick="filterSelection('g_two')">Group Two</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div id="post_content" class="row py-3">
                        @foreach($posts as $post)
                            <div id="{{$post->id}}" class="col-3 filterDiv">
                                <div class="card m-3">
                                    <img class="card-img-top" src="{{$post->images}}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">{{$post->title}}</h5>
                                        <p class="card-text">{{$post->body}}</p>
                                        <p class="card-text">{{$post->created_at}}</p>
                                        <a href="{{$post->link}}" class="btn btn-primary" target="_blank" rel="noopener">Go somewhere new</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection