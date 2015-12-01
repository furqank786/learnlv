<!-- 
      This view display the variables and array send by the controller. I applied
      the validation on array variable to check either the array has records or not
      if array does not have any record then the message will appear no record in array.
      This page also display the table of mentioned number on the template.
      I used foreach, if and for from the control structure. 
-->
@extends('app')
@section('content')

    {{$year}}<br>
    {{$designation}}<br>
     
     <?php //echo csrf_field();?>

     {{csrf_field()}}

     <br><h1>{{'Control structure'}}</h1>
   <br>Users list
   @if(count($users)>0)
       <ul>
            @foreach($users as $user)
                <li>
                    {{$user}}
                </li>
             @endforeach
        </ul>
    @else
       <br> <span style="color:red">No user found</span><br>
    @endif


<br>Subjects list
@if(count($subjects)>0)
    <ul>
        @foreach($subjects as $subject)
            <li>
                {{$subject}}
            </li>
        @endforeach
    </ul>
@else
    <br> <span style="color:red">No subject found</span><br>
@endif

<br><br>{{'--------Table-----------'}}

     @for($i =1; $i<=10; $i++)
     <br>The value of i is {{'5 * '.$i.' = ' }} {{$i*5}}
     @endfor


<br>-------------------------------------
@stop