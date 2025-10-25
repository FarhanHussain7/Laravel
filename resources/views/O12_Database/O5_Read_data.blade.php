<div>
    <h1>Read Data From MySql Database </h1>
    <!-- {{print_r($students)}} -->
    <form action="/search" method="get">
            <input type="text" name="search" placeholder="Search with name " value="{{@$search}}">
            <button>search</button>
    </form>
    <button><a href="/insertform" class="insert-btn">Insert Data</a></button>

    <form action="/deletemulti" method="post">
        @csrf
        <button class="deletemul">Delete Multi</button>
    <table border="1">
        <tr>
            <td>Select</td>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
            <td>Operation</td>
            <td>Update</td>


        </tr>
        @foreach($students as $user)
        <tr>
            <td><input type="checkbox" name="ids[]" value="{{$user->id}}"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->batch}}</td>
            <td><a href="{{'deletedata/'.$user->id}}">Delete</a></td>
            <td><a href="{{'editdata/'.$user->id}}">Edit</a></td>
        </tr>
        @endforeach
    </table>

    </form>
    <!-- This is pageination link so now only few data is visible for further you have to go to next page -->
    {{$students->links()}}
</div>
<style>

    /* Pageination  */
    .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    list-style: none;
    padding: 0;
}

.pagination li {
    margin: 0 5px;
}

.pagination li a,
.pagination li span {
    display: block;
    padding: 8px 12px;
    background-color: #3498db;
    color: white;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.pagination li a:hover {
    background-color: #2980b9;
}

.pagination .active span {
    background-color: #2c3e50;
    font-weight: bold;
}

.pagination .disabled span {
    background-color: #ccc;
    color: #666;
    cursor: not-allowed;
}
    .w-5.h-5{
        width:20px;
    }


    /* General page styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    margin: 0;
    padding: 20px;
    color: #333;
}

h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 30px;
}

/* Form styling */
form {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

input[type="text"] {
    padding: 10px;
    width: 250px;
    border: 1px solid #ccc;
    border-radius: 4px 0 0 4px;
    outline: none;
}

button {
    padding: 10px 15px;
    border: none;
    background-color: #3498db;
    color: white;
    cursor: pointer;
    border-radius: 0 4px 4px 0;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #2980b9;
}

/* Insert button styling */
.insert-btn {
    float: left;
    background-color: #3498db;
    color: white;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    text-decoration: none;
}

button a:hover {
    text-decoration: underline;
}

/* Table styling */
table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

table th, table td {
    padding: 12px 15px;
    text-align: center;
    border: 1px solid #ddd;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1;
}

a {
    color: #e74c3c;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
/* Delete multiple */
.deletemul{
    border: 2px solid white;
}
</style>
