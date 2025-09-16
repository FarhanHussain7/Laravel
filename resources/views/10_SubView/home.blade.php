
@include('10_SubView.header')
<H1>Home Page</H1>
<!-- Passing value from here to inner page -->
@include('10_SubView.inner',['page'=>'It will Contain all the Page Information'])

<!-- Put If where the page is not created then it will not give error  -->
@includeIf('10_SubView.commn',['page'=>'It will Contain all the Page Information'])
