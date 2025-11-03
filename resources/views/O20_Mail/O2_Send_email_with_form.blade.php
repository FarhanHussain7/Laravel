<div>
    <h1>Add detailsa here </h1>
    <form action="emailform" method="post">
        @csrf
        <input type="text" name="to" placeholder="Enter email address">
        <br/>
        <br/>
        <input type="text" name="subject" placeholder="Enter email Subject">
        <br/>
        <br/>
        <textarea name="message" placeholder="Type your message"></textarea>
        <br/>
        <button>Send...</button>
    </form>
</div>

