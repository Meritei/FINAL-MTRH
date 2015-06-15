

@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Patients Details</title>
@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'info.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> Patients Info</th>
    </tr>
    <tr>
    <th colspan="2">IT'S VERY EASY </br>CLICK ON WHAT YOU WANT </th>
    </tr>
    <tr>
    <td><a href="info.create"><button type="button"  autofocus="autofocus" value="create">Feed Patients Info</button></a></td>
    <td><a href="info.show"><button type="button"  autofocus="autofocus" value="show">View Patients Info</button></a></td>
    </tr>
    <tr>
    <td><a href="info.edit"><button type="button"  autofocus="autofocus" value="edit">Edit Patients Info </button></a></td>
    <td><a href="info.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete Patients Info</button></a></td>
    </tr>

       

  {{Form::close()}}



    </table>



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop

