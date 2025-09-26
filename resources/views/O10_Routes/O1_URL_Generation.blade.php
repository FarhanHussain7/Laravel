<div>

<h1>
    URL Generation
</h1>

<h2>
    <!-- It will only show Static URL in Html page  -->
{{URL::current()}}

<!--  it is also do the same   {{url()-current()}} -->
</h2>

<h3>
    <!-- It will show the Parameterize value in url http://127.0.0.1:8000/url?name=jituuu -->
{{URL::full()}}
</h3>

<h4>
    {{URL::previous()}}
</h4>

<a href="{{URL::to('url',['farhan'])}}">Para</a>

</div>
