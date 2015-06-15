@extends('defaults.masterpage')

@section('content')
<center>
<div $id="cover"	>
{{Form::open(['route'=>'diagnosis.store'])}}
  <table  $id = "tabler">
  	<tr>
  	<th colspan="1"> <h1>Fill These Diagnosis Form </h1></th>
  </tr>
<tr>
       <td>{{Form::label('file_number','File Number:')}}</td>

      <td> {{Form::input('text','file_number')}}</td>
</tr>
<tr>


      <td> {{Form::label('diagnosis','Diagnosis:')}}</td>

       <td>{{Form::input('text','diagnosis')}}</td>

</tr>
<tr>

       <td>{{Form::label('prescription','Prescription:')}}</td>

       <td>{{Form::input('text','prescription')}}</td>
</tr>
<tr>

       <td colspan="1"> {{Form::submit('Save Diagnosis Records')}}</td>

</tr>
</table>

{{Form::close()}}

</div>
</center>





@stop