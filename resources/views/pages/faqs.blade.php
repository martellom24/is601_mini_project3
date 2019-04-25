@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="text-center">FAQs Page</div>
        <div class="accordion" id="accordionExample">
            @foreach($posts as $faqs)
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$faqs->id}}" aria-expanded="true" aria-controls="collapse{{$faqs->id}}">
                            {{$faqs->title}}
                        </button>
                    </h5>
                </div>

                <div id="collapse{{$faqs->id}}" class="collapse" aria-labelledby="heading{{$faqs->id}}" data-parent="#accordionExample">
                    <div class="card-body">
                        {{$faqs->body}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection