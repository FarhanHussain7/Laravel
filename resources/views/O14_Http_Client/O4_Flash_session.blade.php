<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
<!-- Flash Session :-
            - A session is a way to store data only once
            - After page refresh or anything route request data will removed from flash session
            - This is basically used for display error and success message
 -->
    <h1>Flash Session : </h1>

        <form action="/flashpost" method="post">
@csrf
    <input type="text" name="name" placeholder="Enter your name">
        <br/>
        <br/>
        <input type="text" name="email" placeholder="email">
        <br/>
        <br/>
        <input type="text" name="phone" placeholder="Phone">
        <br/>
        <br/>

        <button>Submit</button>
    </form>
<span class='flash-data'>
    {{session('message')}}
    </span>
    @if(session('name'))
    <span class='flash-data'>{{session('name')}}</span>
    @endif
</div>

<style>
    .flash-data{
        background:green;
        border-radius:20px;
        color: white;
        padding:10px;
        margin:10px;

    }
</style>
