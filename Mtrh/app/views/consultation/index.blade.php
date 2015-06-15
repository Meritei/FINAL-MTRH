@extends('defaults.masterpage')



@section('header')

{{ HTML::style('css/main.css') }}
<title>Consultation</title>
@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'consultation.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> Choose What You Want To Do </th>
    </tr>
    <tr>
    <th colspan="2">IT'S VERY EASY </br>CLICK ON WHAT YOU WANT </th>
    </tr>
    <tr>
    <td><a href="consultation.create"><button type="button"  autofocus="autofocus" value="create">Fill A Consultation Form</button></a></td>
    <td><a href="consultation.show"><button type="button"  autofocus="autofocus" value="show">View Consultation Details</button></a></td>
    </tr>
    <tr>
    <td><a href="consultation.edit"><button type="button"  autofocus="autofocus" value="edit">Edit Consultation Details </button></a></td>
    <td><a href="consultation.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete Consultation Details</button></a></td>
    </tr>

       

  {{Form::close()}}



    </table>



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop

