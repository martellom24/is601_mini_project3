@extends('layouts.default')

@section('content')

    <div class="content">
        <div class="title m-b-md">
            IS601 Mini Project 3
        </div>
        <div class="text-center my-4">
            <p class="lead">This is my last mini project for Web Systems Development</p>

            <div class="links">
                <a href="{{route('about')}}">About</a>
                <a href="{{route('faqs')}}">FAQs</a>
            </div>
        </div>
    </div>

@endsection