<!-- TO run the Project give Command : php artisan serve -->

<h1>Hello Laravel</h1>
<p>First File which is show on browser , It will created already during creation of project </p>
<p>It link is saved in routes folder in web.php file </p>

<a href="/home">O2_ Home Page  </a>
<br/>
<a href="/about">O3_about</a>
<br/>
<a href="/controller">O4_Controller</a>
<br/>
    <li>
        <a href="/controller">O1_Controller_Para</a>
    </li>
    <li>
        <a href="/about">O2_About_Controller</a>
    </li>
    <li>
        <a href="/getname/{name}">O3_Getname_Controller</a>
    </li>
    <li>
        <a href="/view">O4_View_Controller</a>
    </li>
    <li>
        <a href="/conuser/{name}">O5_Controller</a>
    </li>
    <li>
        <a href="/admin">O6_View_page_Controller</a>
    </li>
<br/>
<a href="/view">O5_View </a>
<br/>
<a href="/subview">O7_SubView</a>
<br/>
    <li>
        <a href="/subabout">O7_SubAbout</a>
    </li>
<br/>
<a href="/comp">O8_Component</a>
<br/>
<a href="/form">O9_Form_Data</a>
<br/>
    <li>
        <a href="/check">O9_CheckBox and Radio Button</a>
    </li>
<br/>
    <li>
        <a href="/valid">O9_Form_Validation</a>
    </li>
<br/>
<a href="{{URL::to('url')}}">1O_Routes</a>
<br/>
    <li>
        <a href="{{route('nr')}}">1O_Named_routes</a>
    </li>
<br/>
<a href="/middleware">11_Middleware</a>
<br/>
<a href="/db">12_Database</a>
<br/>
    <a href="/insertform">12_SubView</a>
<br/>
<a href="/model">13_Model</a>
<br/>
<a href="/http">14_Http</a>
<br/>
<a href="/locwelcome">16_Localization</a>
<br/>
<br/>
<a href="/layout">17_Layout</a>
<br/>
<a href="/subview">O7_SubView</a>
<br/>
<a href="/subview">O7_SubView</a>
<br/>
<a href="/subview">O7_SubView</a>
<br/>
<a href="/subview">O7_SubView</a>
<br/>
<a href="/subview">O7_SubView</a>
<br/>

<!-- TO run the Project give Command: php artisan serve -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Project Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fdf6e3;
            font-family: 'Georgia', serif;
        }
        h1, h2 {
            font-weight: bold;
        }
        .chapter {
            margin-bottom: 2rem;
        }
        .chapter-title {
            font-size: 1.5rem;
            color: #2c3e50;
            border-bottom: 2px solid #ccc;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        .chapter ul {
            list-style-type: none;
            padding-left: 0;
        }
        .chapter li {
            margin-bottom: 0.5rem;
        }
        .chapter a {
            text-decoration: none;
            color: #34495e;
        }
        .chapter a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="container py-5">

    <h1 class="text-center mb-5">📘 Laravel Project Index</h1>

    <div class="chapter">
        <div class="chapter-title">Chapter 1: Introduction</div>
        <ul>
            <li><a href="/home">1.1 Home Page</a></li>
            <li><a href="/about">1.2 About Page</a></li>
            <li><a href="/view">1.3 View Page</a></li>
            <li><a href="/layout">1.4 Layout Example</a></li>
        </ul>
    </div>

    <div class="chapter">
        <div class="chapter-title">Chapter 2: Controllers</div>
        <ul>
            <li><a href="/controller">2.1 Basic Controller</a></li>
            <li><a href="/controller">2.2 Controller with Parameter</a></li>
            <li><a href="/getname/John">2.3 Get Name Controller</a></li>
            <li><a href="/conuser/Farhan">2.4 User Controller</a></li>
            <li><a href="/admin">2.5 Admin View Controller</a></li>
        </ul>
    </div>

    <div class="chapter">
        <div class="chapter-title">Chapter 3: Views & Components</div>
        <ul>
            <li><a href="/subview">3.1 Subview</a></li>
            <li><a href="/subabout">3.2 Subabout</a></li>
            <li><a href="/comp">3.3 Blade Component</a></li>
        </ul>
    </div>

    <div class="chapter">
        <div class="chapter-title">Chapter 4: Forms & Validation</div>
        <ul>
            <li><a href="/form">4.1 Form Handling</a></li>
            <li><a href="/check">4.2 Checkbox & Radio</a></li>
            <li><a href="/valid">4.3 Form Validation</a></li>
        </ul>
    </div>

    <div class="chapter">
        <div class="chapter-title">Chapter 5: Routing</div>
        <ul>
            <li><a href="{{ URL::to('url') }}">5.1 URL Route</a></li>
            <li><a href="{{ route('nr') }}">5.2 Named Route</a></li>
            <li><a href="/middleware">5.3 Middleware</a></li>
        </ul>
    </div>

    <div class="chapter">
        <div class="chapter-title">Chapter 6: Database & Models</div>
        <ul>
            <li><a href="/db">6.1 Database Connection</a></li>
            <li><a href="/insertform">6.2 Insert Form</a></li>
            <li><a href="/model">6.3 Model Example</a></li>
        </ul>
    </div>

    <div class="chapter">
        <div class="chapter-title">Chapter 7: Advanced Features</div>
        <ul>
            <li><a href="/http">7.1 HTTP Request</a></li>
            <li><a href="/locwelcome">7.2 Localization</a></li>
        </ul>
    </div>

</body>
</html>
