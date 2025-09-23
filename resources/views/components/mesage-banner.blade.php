<div>
    <!-- A piece of code that can reuse in our project
    Like a function is written once can reuse again and again
    We can  make a component and reuse it agian and again
    Component can be resued in the same file as well as different files too


php command to create component file : php artisan make:component messageBanner
    -->
<!-- Static data  -->
    <span class="success">User Login Sussceffully</span>



    <!-- Dynamic data : it will pass in blade file and  -->
    <span class="{{$class}}">{{$msg}}</span>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

</div>
