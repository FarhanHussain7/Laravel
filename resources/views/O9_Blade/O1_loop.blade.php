
<div>
<!-- Print the result of function  -->
     <H1>{{rand()}}</H1>

     <!-- Print the array value  -->
      <H1>{{$users[1]}}</H1>
</div>
<div>
      @foreach($users as $user)
        <H3>{{$user}}</H3>
        @endforeach
</div>
<div>

      @for($i=0;$i<=10;$i++)
        <H3>{{$i}}</H3>
      @endfor

</div>
