
@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}

<title>PAYMENT</title>
@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'payment.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> Choose What You Want To Do </th>
    </tr>
    <tr>
    <th colspan="2"><i>IT'S VERY EASY </br>CLICK ON WHAT YOU WANT TO DO</i></th>
    </tr>
    <tr>
    <td><a href="payment.create"><button type="button"  autofocus="autofocus" value="create">Fill Payment Details</button></a></td>
    <td><a href="payment.show"><button type="button"  autofocus="autofocus" value="show">View Payment Details</button></a></td>
    </tr>
    <tr>
    <td><a href="payment.edit"><button type="button"  autofocus="autofocus" value="show">Edit Payment Details</button></a></td>
    <td><a href="payment.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete Payment Details</button></a></td>
    </tr>

       

  {{Form::close()}}



    </table>



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop
