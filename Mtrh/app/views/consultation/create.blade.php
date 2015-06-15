@extends('defaults.masterpage')

@section('content')
<center>
	<div id="cover">
{{Form::open(['route'=>'consultation.store'])}}
<table id = "tabler">
       <tr>
             <th colspan ="1"> Feel in The Consultation Form  </th>
       </tr>
       <tr>
       <td>{{Form::label('file_number','File Number:')}}</td>

       <td>{{Form::input('text','file_number')}}</td>
       </tr>
       <tr>
       <td>{{Form::label('doctor_assigned','Doctor Assigned:')}}</td>

       <td>{{Form::input('text','doctor_assigned')}}</td>
      </tr>
      <tr>
       <td>{{Form::label('symptoms','Symptoms:')}}</td>

      <td> {{Form::input('text','symptoms')}}</td>
      </tr>
      <tr>
        <td colspan="1">{{Form::submit('Save Consultation')}}</td>
      </tr>
</table>

{{Form::close()}}

</div>
</center>

@stop

@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop 