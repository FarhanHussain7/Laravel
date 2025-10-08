<div>
    <h1>
        Eloquent Query Builder :
    </h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Email_verified_at</td>
            <td>Password</td>
            <td>Token</td>
            <td>Date</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->email_verified_at}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->remember_token}}</td>
            <td>{{$user->created_at}}</td>
        </tr>
        @endforeach
    </table>
</div>
