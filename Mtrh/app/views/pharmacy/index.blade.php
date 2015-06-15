
@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Pharmacy</title>
@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'pharmacy.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> Choose What You Want To Do </th>
    </tr>
    <tr>
    <th colspan="2"><i>IT'S VERY EASY </br>CLICK ON WHAT YOU WANT TO DO</i></th>
    </tr>
    <tr>
    <td><a href="pharmacy.create"><button type="button"  autofocus="autofocus" value="create">Fill pharmacy Details</button></a></td>
    <td><a href="pharmacy.show"><button type="button"  autofocus="autofocus" value="show">View pharmacy Details</button></a></td>
    </tr>
    <tr>
    <td><a href="pharmacy.edit"><button type="button"  autofocus="autofocus" value="show">Edit pharmacy Details</button></a></td>
    <td><a href="pharmacy.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete pharmacy Details</button></a></td>
    </tr>
    
      </table>  
  {{Form::close()}}

     </div>

   



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop
