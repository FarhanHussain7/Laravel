<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
     <!--  -->
    <h1>
        Http Request Client :
    </h1>
    <form action="/requestget" method="get">
        <input type="text" name="name" placeholder="Enter your name">
        <br/>
        <br/>
        <input type="text" name="password" placeholder="Password">
        <br/>
        <br/>
        <button>Submit</button>
    </form>

<h1>Post Request : </h1>
    <form action="/requestpost" method='post'>
    @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <br/>
        <br/>
        <input type="text" name="password" placeholder="Password">
        <br/>
        <br/>
        <button>Submit</button>
    </form>
</div>
