<!-- It will be access through controller  -->
@include('10_SubView.header')
<H1>About Page</H1>
<p> Name   :  Farhan Hussain</p>
<p> Age    :  2000</p>
<p> Address:  1085 Malabu point </p>
<p> Email  :  Farhanhussain@gmail.com</p>
<p> Phone no:  93934932303</p>
<p> Work   :  Software Engineer</p>


@include('10_SubView.inner',['page'=>'It will Contain all Information about User '])
