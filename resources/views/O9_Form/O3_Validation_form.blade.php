<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
     <H1>
        Form Validation
     </H1>
<!--
     @if($errors->any())
     @foreach($errors->all() as $error)
     <div style='color:red'>
        {{$error}}
     </div>
     @endforeach
     @endif

-->

     <form action="validinfo" method="post">
        <!-- if you didn't use the @csrf then it will give 4197 error   -->
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="enter your name " name="username" value="{{old('username')}}"
            class="{{$errors->first('username')?'input-error':''}}" >
            <span style='color:red'>@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="enter your email " name="email" value="{{old('email')}}"
            class="{{$errors->first('email')?'input-error':''}}" >
            <span style='color:red'>@error('email'){{$message}}@enderror</span>

        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="enter your Password " name="password" value="{{old('password')}}"
            class="{{$errors->first('password')?'input-error':''}}" >
            <span style='color:red'>@error('password'){{$message}}@enderror</span>

        </div>

    <div class="skills">
        <h2>User Skills</h2>
        <input type="checkbox" name="skill" value="PHP">
    <label for="PHP">PHP</label>

    <input type="checkbox" name="skill" value="Java">
    <label for="Java">Java</label>

    <input type="checkbox" name="skill" value="Python">
    <label for="Python">Python</label>

    <input type="checkbox" name="skill" value="C++">
    <label for="C++">C++</label>
    </div>
            <span style='color:red'>@error('skill'){{$message}}@enderror</span>

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

    .skills{
        width:400px;
    }
    .input-error{
        color:red;
        border:2px solid red;
    }
</style>
