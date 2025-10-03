<!-- - part of mvc architecture
     - This is a PHP file with class
     - Here we write bussiness logic and DB Connections
     - But in laravel we mostly do DB related work
     - In laravel we have an Object relational mapper (ORM) feature

     - Step 1 - php artisan make:model <  name should be same as database tables name and in singular form >

        step 2 - create controller then give path of model in function with ::all()
        step 3 -  create a route in web.php of the controller
        step 4 -  create a view page to print data in fine state


    Note :- Command - php artisan model:show < model table name>
    To see the all details of table like coloums name, constraint, data type and limit
-->

<div>
    <h1>
        Student List

    </h1>
    {{
            print_r($student)
        }}
<table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($student as $std)
        <tr>
            <td>{{$std->name}}</td>
            <td>{{$std->email}}</td>
            <td>{{$std->batch}}</td>
        </tr>
        @endforeach
    </table>
    </div>
