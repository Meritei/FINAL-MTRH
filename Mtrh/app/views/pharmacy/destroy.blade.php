@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Delete Pharmacy Records</title>

@stop

@section('content')

<center>
	<div id="cover">

{{Form::open(['route'=>'file.destroy'])}}

  <table id="tabler">
  	<tr>
         <th colspan = "1"><b>FILL  THESE FORM TO DELETE  PHARMACY DETAILS</b></th>
  	</tr>
  	   <tr>
          <td><p><i>Please ensure you have filled the file number section</br>The other section is not compulsory  </i></p></td>
  	   </tr> 
     <tr>
          <td> {{Form::label('file_number','File Number:')}}</td>
          <td>{{Form::input('text','file_number')}}{{ $errors->first('name', '<span class=error>:message></span>') }}</td>
     </tr>
     <tr>

      l<td> {{Form::label('diagnosis','Diagnosis')}}</td>

       <td>{{Form::input('text','diagnosis')}}</td>
</tr>
<tr>


       <td>{{Form::label('prescription','Symptoms:')}}</td>

       <td>{{Form::input('text','prescription')}}</td>
</tr>
<tr>


       <td>{{Form::label('drugs_given','Drugs Given:')}}</td>

      <td> {{Form::input('text','drugs_given')}}</td>
</tr>
     <tr>
        <td colspan="1">{{Form::submit('DELETE')}}</td>
     </tr>
</table>

{{Form::close()}}

</div>

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop 