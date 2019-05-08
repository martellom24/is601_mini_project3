@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 bg-dark">
                    @include('includes.sidebar')
                </div>
                <div class="col-10">
                    {{--search filter--}}
                    <div class="row my-4">
                        <div class="col-12">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-5 pr-5">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Filter by:
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                                <a id="post_ID_sort" class="dropdown-item" href="#">Post ID</a>
                                                <div class="dropdown-divider"></div>
                                                <a id="post_title_sort" class="dropdown-item" href="#">Post Title</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="row py-3">
                        @foreach($posts as $post)
                        <div class="col-3">
                            <div id="{{$post->id}}" class="card m-3">
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
    <script>
        "use strict";
        // JavaScript now has adopted Block Scope into it core. I have used ECMA6script(ES6) into this app.
        // define Function to return data to HTML
        const myFunction = (data) => {

            let output = "", readMore;

            output += "<div class=\"col-12\"><h2 class=\"text-center mb-3 text-white\">Belt Ranking System</h2></div>";

            // for loop to return data from txt file
            for (let i = 0; i < data.length; i++) {

                let id = data[i].id,
                    string = data[i].meaning,
                    trimString = string.substring(0, 200) + '...';

                output += '<div class="col-3">' +
                    '<div class="card text-white bg-secondary mb-3">' +
                    '<div class="card-header">' + data[i].name + '</div>';

                output += '<div class="card-body">'+
                    '<h5 class="card-title">' + data[i].duration +  '</h5>'+
                    '<p class="card-text">' + trimString + ' <a href="#" id="id-' + id + '" class="d-block" data-toggle="modal" data-target="#readMoreModalCenter-' + id + '">read more</a></p>'+
                    '<div class="modal fade" id="readMoreModalCenter-' + id + '" tabindex="-1" role="dialog" aria-labelledby="readMoreModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document">';

                output += '<div class="modal-content"><div id="readMore" class="modal-body text-secondary">' + data[i].meaning + '</div></div></div></div></div></div></div>';

            }
            // This is my return statement to output the array into HTML
            document.getElementById("belt_ranking_system").innerHTML = output;
        }

        // callback function to get data **in progress**
        const init = (callback) => {
            let xhr = new XMLHttpRequest();
            xhr.open('GET', callback, true);
            xhr.onreadystatechange = () => {
                if (xhr.readyState === 4 && xhr.status === 200 ) {
                    let data = JSON.parse(xhr.responseText);
                    return myFunction(data);
                }
            }
            xhr.send(null);
        }

        // init('json/data.txt');

    </script>
@endsection