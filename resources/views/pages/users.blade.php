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
                    <div class="col-10">
                        <div class="row py-4">
                            <div class="col-12">
                                <section id="usrTable" class="usr_table_results">
                                    <div class="container">
                                        <table class="table table-striped">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Account ID</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Night</th>
{{--                                                <th scope="col">Email</th>--}}
                                                <th scope="col">History</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($profiles as $profile)
                                                <tr>
                                                    <th scope="row">{{$profile->user_id}}</th>
                                                    <td>{{$profile->fname}}</td>
                                                    <td>{{$profile->lname}}</td>
{{--                                                    <td>{{$profile->email}}</td>--}}
                                                    <td>{{$profile->created_at}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection