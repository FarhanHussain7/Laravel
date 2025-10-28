<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
     <!-- Layout : - * Reuse Code
                     * Reuse Common UI
                     * Reuse Style
                     * and similar look and feel

     Step 1 - Let create a component file "php artisan make:component layout "
     : now a file is created in component folder which can have code which is used in multiple view files
     step 2 - let use them in view files
     -->
</div>
<x-layout>
    <x-slot name="title">Login Page</x-slot>
    <x-slot name="main">
        <div class="form">
            <h1 id="heading" class="heading">User Login</h1>
            <input type="text" name="name" placeholder="Enter your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Enter your password">
            <br/>
            <br/>
            <button onclick="changeColor()">Submit</button>
        </div>
    </x-slot>
</x-layout>
