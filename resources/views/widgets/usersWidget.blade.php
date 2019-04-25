<section id="usrTable" class="usr_table_results">
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Account ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>