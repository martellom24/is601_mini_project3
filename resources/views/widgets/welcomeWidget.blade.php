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
        <a class="btn btn-primary btn-lg" href="{{route('profileTest')}}" role="button">My Account</a>
    </p>
</div>