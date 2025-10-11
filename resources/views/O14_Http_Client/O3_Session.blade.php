<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
     <!-- Session :- A session is a way to store and access data across multiple pages of a websie for single user
                   - Session store data in the server side
                   - But manage with browser cookies  -->

                   <h1>Session Page : </h1>

<h2>Input Data : </h2>
    <form action="/sessionget" method="post">
@csrf
    <input type="text" name="name" placeholder="Enter your name">
        <br/>
        <br/>
        <input type="text" name="password" placeholder="Password">
        <br/>
        <br/>
        <button>Submit</button>
    </form>



    <!-- This data is handle by the controller  -->
    <h2>Read Session Data Coming From Controller </h2>
    <!-- <h3>{{session('name')}}</h3> -->
    @if(session('name'))
    <h3>Welcome , {{session('name')}}</h3>
    @else
    <h3>No User Found yet ! </h3>
    @endif

    <a href="/sessionlogout">Terminate session</a>
</div>
