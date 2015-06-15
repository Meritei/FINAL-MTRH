
@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>File</title>
@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'file.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> CREATE A FiLE </th>
    </tr>
    <tr>
    <th colspan="2">IT'S VERY EASY </br>CLICK ON WHAT YOU WANT TO DO</th>
    </tr>
    <tr>
    <td><a href="file.create"><button type="button"  autofocus="autofocus" value="create">Create a File</button></a></td>
    <td><a href="file.show"><button type="button"  autofocus="autofocus" value="show">View a File</button></a></td>
    </tr>
    <tr>
    <td><a href="file.edit"><button type="button"  autofocus="autofocus" value="show">View a File</button></a></td>
    <td><a href="file.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete a File</button></a></td>
    </tr>

       

  {{Form::close()}}



    </table>



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop