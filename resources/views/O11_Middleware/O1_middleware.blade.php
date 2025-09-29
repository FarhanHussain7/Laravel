<!-- Middleware : - it is a layer between the user and application
                -   Here we can check conditions or filter user requests.
                - If condition pass request will reach to middleware.


                Request ------    Middleware   -------    Controller/View

    Type of middleware
    1 - Global middleware
    2 - Route middleware
    3 - Group middleware


    Step 1 - Create middleware file : php artisan make:middleware elevenPart
    step 2 - Now a folder will appear in app\http with middleware name
                Let control the accsse of request and use it
    step 3 -  now go to bootstrap -- app.php
                Here you can apply middleware in two type
                1 - globally : apply on every route
                 $middleware->append(ClassName::class);

                2 - Route Group : apply only on a named group
                 $middleware->appendToGroup('middle',[
                    AgeCheck::class,
                    CountryCheck::class,
                ]);

                http://127.0.0.1:8000/middleware?country=india&age=20
                -->

<div>

<h1>Middleware Route page </h1>
</div>

