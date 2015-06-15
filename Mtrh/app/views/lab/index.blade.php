
@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}

<title>LAB</title>
@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'lab.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> Choose What You Want To Do </th>
    </tr>
    <tr>
    <th colspan="2"><i>IT'S VERY EASY </br>CLICK ON WHAT YOU WANT TO DO</i></th>
    </tr>
    <tr>
    <td><a href="file.create"><button type="button"  autofocus="autofocus" value="create">Fill Lab Details</button></a></td>
    <td><a href="file.show"><button type="button"  autofocus="autofocus" value="show">View Lab Details</button></a></td>
    </tr>
    <tr>
    <td><a href="file.edit"><button type="button"  autofocus="autofocus" value="show">Edit Lab Details</button></a></td>
    <td><a href="file.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete Lab Details</button></a></td>
    </tr>
      </table>  

  {{Form::close()}}

     </div>

   



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop