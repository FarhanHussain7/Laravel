<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        /* Reset some default styles */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

/* Navigation bar */
ul {
    list-style: none;
    margin: 0;
    padding: 10px 20px;
    background-color: #333;
    display: flex;
    gap: 20px;
}

ul li a {
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    display: inline-block;
}

ul li a:hover {
    background-color: #555;
    border-radius: 4px;
}

/* Login form container */
div > div {
    background-color: white;
    padding: 30px;
    margin: 40px auto;
    max-width: 400px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Button styling */
.btn {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

/* Footer */
footer {
    text-align: center;
    padding: 15px;
    background-color: #333;
    color: white;
    position: fixed;
    bottom: 0;
    width: 100%;
}
    </style>
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="/inherithome">Home</a>
            </li>
            <li>
                <a href="http:">About</a>
            </li>
            <li>
                <a href="http:">Login</a>
            </li>
        </ul>
    </div>
    <div>
        @section('main')
        @show
    </div>
    <footer>
        <p>footer</p>
    </footer>
</body>
</html>
