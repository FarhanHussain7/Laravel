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

    <style>
        /* Reset some default styles */
body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

/* Header styling */
.header {
    background-color: #333;
    padding: 10px 0;
}

.header ul {
    list-style: none;
    display: flex;
    justify-content: center;
}

.header ul li {
    margin: 0 20px;
}

.header ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.header ul li a:hover {
    color: #ffcc00;
}

/* Main content styling */
div > h1 {
    text-align: center;
    margin-top: 40px;
    font-size: 2.5em;
    color: #222;
}

div > h2 {
    text-align: center;
    margin-top: 10px;
    font-size: 1.5em;
    color: #555;
}

div > p {
    max-width: 600px;
    margin: 20px auto;
    text-align: center;
    font-size: 1.1em;
    color: #666;
}

/* Footer styling */
.footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 15px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

/* Form container */
.form {
    max-width: 400px;
    margin: 80px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Heading */
.form h1 {
    margin-bottom: 20px;
    font-size: 2em;
    color: #333;
}

/* Input fields */
.form input[type="text"] {
    width: 90%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1em;
    transition: border-color 0.3s ease;
}

.form input[type="text"]:focus {
    border-color: #007BFF;
    outline: none;
}

/* Button */
.form button {
    width: 95%;
    padding: 12px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form button:hover {
    background-color: #0056b3;
}
    </style>
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
