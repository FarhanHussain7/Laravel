<!-- Go to env-- then change database=dglite to mysql
 if you create your own table then go to env file change
  session_driver=file
 -->
<div>
    <h1>Query Builder Data : </h1>
    {{
    print_r($users)
    }}
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
