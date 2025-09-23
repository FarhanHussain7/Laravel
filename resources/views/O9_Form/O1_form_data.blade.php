<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
     <H1>
        Yes i will do it
     </H1>

     <form action="adduser" method="post">
        <!-- if you didn't use the @csrf then it will give 4197 error   -->
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="enter your name " name="username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="enter your email " name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="enter your Password " name="password">
        </div>
        <div class="input-wrapper">
                <button>Add new User</button>
    </div>

     </form>
</div>

<style>
    input{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;

    }
    .input-wrapper{
        margin-top:5px;
    }
    button{
        margin-top:10px;
        background:blue;
        color:white;
        border-radius:10px;
        width:150px;
        height:25px;
        cursor: pointer;
    }
</style>
