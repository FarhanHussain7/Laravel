
 <div>
<x-mesage-banner />
<x-mesage-banner msg="this is dynamic data with constructor" class="success"/>


<x-mesage-banner msg="Password Not find ! try again" class="help"/>

 <H1>Home page of component </H1>
</div>

<style>
    .success{
        background:lightgreen;
        color:green;
        padding:3px;
        border-radius:20px;
        display: inline-block;
        margin: 10px;
    }
    .help{
        background:black;
        color:white;
        padding:3px;
        border-radius:10px;
        display: inline-block;
        margin: 20px;
    }
</style>
