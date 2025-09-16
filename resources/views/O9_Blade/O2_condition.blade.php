<!-- *  Blade is a simple yet powerful templating engine for executing php code
     * This is include in the Laravel framework
     * The template engine is a module or tool for executing code
     * We can write php tages also in the blade template
     * To use blade template view should end with the blade php exetension
      -->

<div>
    <H1>Working of blade </H1>
    <!-- <P>{{$user}}</P> -->
<!-- Print the value from controller -->
    <!-- <p><?php  echo $user ?> </p> -->

    <!-- Print the result of function  -->
     <H1>{{rand()}}</H1>

     <!-- Print the array value  -->
      <H1>{{$users[1]}}</H1>
      @if($name=='anil')
      <H1>This is anil</H1>
      @elseif($name=='arjun')
      <H1>This is arjun</H1>
      @elseif($name=='ankur')
      <H1>This is ankur</H1>
      @else
      <H1>other user </H1>
    @endif
</div>
