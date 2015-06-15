@extends('defaults.masterpage')

@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Booking</title>
@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'booking.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> Book An Appoindment </th>
    </tr>
    <tr>
    <th colspan="2">IT'S VERY EASY </br>CLICK ON WHAT YOU WANT </th>
    </tr>
    <tr>
    <td><a href="booking.create"><button type="button"  autofocus="autofocus" value="create">Create An Appoindment</button></a></td>
    <td><a href="booking.show"><button type="button"  autofocus="autofocus" value="show">View Appoindment Details</button></a></td>
    </tr>
    <tr>
    <td><a href="booking.edit"><button type="button"  autofocus="autofocus" value="edit">Edit Appoindment Details </button></a></td>
    <td><a href="booking.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete Appoindment</button></a></td>
    </tr>

       

  {{Form::close()}}



    </table>



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop

