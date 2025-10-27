<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
     <!-- Layout : - * Reuse Code
                     * Reuse Common UI
                     * Reuse Style
                     * and similar look and feel

     Step 1 - Let create a component file "php artisan make:component layout "
     step 2 - let use them in view files
     -->
</div>
<x-layout>
    <x-slot name="title">Login Page</x-slot>
    <x-slot name="main">
        <div class="form">
            <h1>User Login</h1>
            <input type="text" name="name" placeholder="Enter your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Enter your password">
            <br/>
            <br/>
            <button>Submit</button>
        </div>
    </x-slot>
</x-layout>
