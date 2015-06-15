@extends('defaults.masterpage')

@section('content')
<div="cover">
<center>
{{Form::open(['route'=>'lab.store'])}}
 <table id="tabler">

      <tr>
           <td>{{Form::label('file_number','File Number:')}}</td>
           <td>{{Form::input('text','file_number')}}</td>

           <td>{{Form::label('date','Date:')}}</td>

           <td>{{Form::input('text','date')}}</td>

      </tr>

      <tr>

          <td>{{Form::label('symptoms','Symptoms:')}}</td>

          <td>{{Form::input('text','symptoms')}}</td>

          <td>{{Form::label('test_done','Type Of Test Done:')}}</td>

          <td>{{Form::input('text','test_done')}}</td>

      </tr>

      <tr>


       <td>{{Form::label('observation','Observation Made:')}}</tr>

       <td>{{Form::input('text','observation')}}</tr>



       <td>{{Form::label('hiv_and_aids_status','HIV/AIDS Status:')}}</tr>

       <td>{{Form::input('text','hiv_and_aids_status')}}</tr>

      </tr>

      <tr>

      <td>{{Form::label('full_resuilts','Test Results:')}}</td>

      <td> {{Form::input('text','full_resuilts')}}</td>

      <td>{{Form::label('test_done_by','Test Done By:')}}</td>

      <td> {{Form::input('text','test_done_by')}}</td>

      </tr>

      <tr>

        <td>{{Form::submit('Save Records')}}</td>

      </tr>

</table>


{{Form::close()}}
</div>

</center>





@stop