@extends('defaults.masterpage')

@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Admission</title>
@stop


@section('content')
<center>

	<div id="cover">

{{Form::open(['route'=>'admission.index'])}}

    <table id= "tabler">
    <tr>	
    <th colspan="2"> ADMISSION </th>
    </tr>
    <tr>
    <th colspan="2">IT'S VERY EASY </br>CLICK ON WHAT YOU WANT </th>
    </tr>
    <tr>
    <td><a href="admission.create"><button type="button"  autofocus="autofocus" value="create">Admitte</button></a></td>
    <td><a href="admission.show"><button type="button"  autofocus="autofocus" value="show">View Admission Details</button></a></td>
    </tr>
    <tr>
    <td><a $href="admission.edit"><button $type="button"  $autofocus="autofocus" $value="edit">Edit Admission Details </button></a></td>
    <td><a href="admission.destroy"><button type="button"  autofocus="autofocus" value="delete">Delete Admission Details</button></a></td>
    </tr>

       

  {{Form::close()}}



    </table>



    

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop
