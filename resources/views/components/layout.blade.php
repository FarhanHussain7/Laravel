<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
    <!-- Css Style folder is in public   -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/custom.js"></script>
</head>
<body>
    <div class="header">
        <ul>
            <li>
                <a href="/layouthome">Home</a>
            </li>
            <li>
                <a href="/layout">About</a>
            </li>
            <li>
                <a href="/layoutlogin">Login</a>
            </li>
            <li>
                <a href="/layoutwelcome">Welcome</a>
            </li>
        </ul>
    </div>
    <div>
        {{$main}}
    </div>
    <div class="footer">
        <footer>
            <p>Footer page</p>
        </footer>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->
</body>
</html>
