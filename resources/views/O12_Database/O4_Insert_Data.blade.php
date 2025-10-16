<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
     <h1>INSERT DATA </h1>


    <form action="/insertdata" method='post'>
    @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <br/>
        <br/>
        <input type="text" name="email" placeholder="email">
        <br/>
        <br/>
        <input type="text" name="batch" placeholder="Batch name">
        <br/>
        <br/>
        <button>Submit</button>
    </form>
</div>
