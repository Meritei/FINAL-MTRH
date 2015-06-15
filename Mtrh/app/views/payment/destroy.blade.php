@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Delete Payments Records</title>

@stop

@section('content')

<center>
	<div id="cover">

{{Form::open(['route'=>'payment.destroy'])}}

  <table id="tabler">
  	<tr>
         <th colspan = "2"><b>FILL  THESE FORM TO DELETE PAYMENT DETAILS</b></th>
  	</tr>
  	   <tr>
          <td><p><i>Please ensure you have filled the file number section</br>The other section is not compulsory  </i></p></td>
  	   </tr> 
     <tr>
          <td> {{Form::label('file_number','File Number:')}}</td>
          <td>{{Form::input('text','file_number')}}{{ $errors->first('name', '<span class=error>:message></span>') }}</td>
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
        <td>{{Form::submit('DELETE')}}</td>
     </tr>
</table>

{{Form::close()}}

</div>

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop 