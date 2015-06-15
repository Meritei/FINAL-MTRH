@extends('defaults.masterpage')




@section('header')

{{ HTML::style('css/main.css') }}
<title>Diagnosis</title>

@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'diagnosis.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> Choose What You Want To Do </th>
    </tr>
    <tr>
    <th colspan="2">IT'S VERY EASY </br>CLICK ON WHAT YOU WANT </th>
    </tr>
    <tr>
    <td><a href="diagnosis.create"><button type="button"  autofocus="autofocus" value="create">Fill A Diagnosis Form</button></a></td>
    <td><a href="diagnosis.show"><button type="button"  autofocus="autofocus" value="show">View Diagnosis  Details</button></a></td>
    </tr>
    <tr>
    <td><a href="diagnosis.edit"><button type="button"  autofocus="autofocus" value="edit">Edit Diagnosis  Details </button></a></td>
    <td><a href="diagnosis.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete Diagnosis  Details</button></a></td>
    </tr>

       

  {{Form::close()}}



    </table>



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop

