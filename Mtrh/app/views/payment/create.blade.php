@extends('defaults.masterpage')

@section('content')
<center>
  <div id="">
{{Form::open(['route'=>'payment.store'])}}
 <table>
  <tr>
  <th colspan="1">Please Feel This Payment Form</th>
</tr>
<tr>
       <td>{{Form::label('file_number','File Number:')}}</td>

       <td>{{Form::input('text','file_number')}}</td>
</tr>
<tr>
      <td> {{Form::label('lab_charges','lab Charges:')}}</td>

       <td>{{Form::input('text','lab_charges')}}</td>
</tr>
<tr>
      <td> {{Form::label('consultation_fee','Consultation Fee:')}}</td>

      <td> {{Form::input('text','consultation_fee')}}</td>
</tr>
<tr>

      <td> {{Form::label('medication_fee','Medication Fee:')}}</td>

       <td>{{Form::input('text','medication_fee')}}</td>

</tr>
<tr>

       <td>{{Form::label('total_amound','Total Amound:')}}</td>

       <td>{{Form::input('text','total_amound')}}</td>
</tr>
<tr>


       <td>{{Form::label('amound_paid','Amound Paid:')}}</td>

      <td>{{Form::input('text','amound_paid')}}</td>
</tr>
<tr>


      <td> {{Form::label('balance','Balance:')}}</td>

       <td>{{Form::input('text','balance')}}</td>

</tr>
<tr>
       <td colspan="1"> {{Form::submit('Save Records')}}</td>
</tr>
</table>

{{Form::close()}}
</div>

</center>





@stop