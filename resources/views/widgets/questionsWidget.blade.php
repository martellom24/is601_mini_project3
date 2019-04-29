
        <div class="card">
            <div class="card-header">Questions
                <a class="btn btn-primary float-right" href="{{ route('question.create') }}">
                    Create a Question
                </a>
            </div>
            <div class="card-body">
                <div class="card-deck">
                    @foreach($questions as $question)
                        <div class="col-sm-4 d-flex align-items-stretch">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <small class="text-muted">
                                        Updated: {{ $question->created_at->diffForHumans() }}
                                        Answers: {{ $question->answers()->count() }}
                                    </small>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{$question->body}}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('question.show', ['id' => $question->id]) }}" class="btn btn-primary">
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <div>
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
