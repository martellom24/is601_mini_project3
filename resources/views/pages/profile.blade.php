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
                            <div class="card border-primary mb-3">
                                <div class="card-header">
                                    <h5 class="card-title">My Account</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">name: {{ Auth::user()->name }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-3">
                                                <p class="card-text">Account #:<br> {{Auth::user()->id}}</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="card-text">Email: <br>{{Auth::user()->email}}</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="card-text">Password: <br><a href="#" class="card-link">Card link</a></p>
                                            </div>
                                            <div class="col-3">
                                                <p class="card-text">History: <br>{{Auth::user()->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 offset-1">
                            <section id="account_image" class="">
                                <figure class="figure">
                                    <img src="http://placehold.it/250x250" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
                                </figure>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection