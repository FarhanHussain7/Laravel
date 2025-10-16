<div>
    <h1>Read Data From MySql Database </h1>
    <!-- {{print_r($students)}} -->
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
            <td>Operation</td>

        </tr>
        @foreach($students as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->batch}}</td>
            <td><a href="{{'deletedata/'.$user->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
