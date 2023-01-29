@props(['users'])
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
            