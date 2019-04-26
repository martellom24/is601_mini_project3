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
                                                <th scope="col">Name</th>
                                                <th scope="col">Subscription Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <th scope="row">{{$user->id}}</th>
                                                    <td>{{$user->name}}</td>
                                                    <td>
                                                        @if($user->status == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
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