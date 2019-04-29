<div class="jumbotron">
    <h1 class="display-4">Dashboard</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        Welcome <span class="text-secondary">{{ Auth::user()->name }}</span>! You are logged in!
    @endif
    <p class="lead">
        @if(Auth::user()->profile)
            <a class="btn btn-primary btn-lg" role="button" href="{{ route('profile.show', ['user_id' => Auth::user()->id, 'profile_id' => Auth::user()->profile->id]) }}">My Account</a>
        @else
            <a class="btn btn-primary btn-lg" role="button" href="{{ route('profile.create', ['user_id' => Auth::user()->id]) }}">Create Profile</a>
        @endif

    </p>
</div>