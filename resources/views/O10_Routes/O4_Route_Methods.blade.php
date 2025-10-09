<div>
    <h1>User Form : </h1>
    <h2>Get Method </h2>
    <form action="/getmethods" method='get'>
            <input type="text" name="username" placeholder="Enter Your name">
            <br/>
            <input type="text" name="password" placeholder="Password">
            <br/>
            <button>Submit</button>
    </form>

    <h2>Post Method</h2>
    <form action="/postmethods" method='post'>
        @csrf
            <input type="text" name="username" placeholder="Enter Your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Password">
            <br/>
            <br/>
            <button>Submit</button>
    </form>
    <h2>Put Method</h2>
    <form action="/putmethods" method='post'>
        <input type="hidden" name="_method" value="PUT">
        @csrf
            <input type="text" name="username" placeholder="Enter Your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Password">
            <br/>
            <br/>
            <button>Submit</button>
    </form>
    <h2>Delete Method</h2>
    <form action="/deletemethods" method='post'>
        <input type="hidden" name="_method" value="DELETE">
        @csrf
            <input type="text" name="username" placeholder="Enter Your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Password">
            <br/>
            <br/>
            <button>Submit</button>
    </form>

    <h2>Any Method</h2>
    <form action="/anymethods" method='post'>
        <input type="hidden" name="_method" value="DELETE">
        @csrf
            <input type="text" name="username" placeholder="Enter Your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Password">
            <br/>
            <br/>
            <button>Submit</button>
    </form>


    <h2>Match Method for Get and Post </h2>
    <form action="/matchmethods" method='get'>
    <!-- <form action="/anymethods" method='post'> -->
        @csrf
            <input type="text" name="username" placeholder="Enter Your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Password">
            <br/>
            <br/>
            <button>Submit</button>
    </form>

    <h2>Match Method for put and delete </h2>
    <form action="/matchmethods" method='get'>
        <input type="hidden" name="_method" value="PUT">
        <!-- <input type="hidden" name="_method" value="DELETE"> -->

        @csrf
            <input type="text" name="username" placeholder="Enter Your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Password">
            <br/>
            <br/>
            <button>Submit</button>
    </form>



</div>
