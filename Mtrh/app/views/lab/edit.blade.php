@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Edit Lab Details</title>

@stop

@section('content')

<center>
	<div id="cover">

{{Form::open(['route'=>'lab.store'])}}

  <table id="tabler">
  	<tr>
         <th colspan = "3"><b>FILL  THESE FORM TO EDIT Lab Details</b></th>
  	</tr>
  	   <tr>
          <td colspan = "3"><p><i>Please ensure you have filled </br>The file number  section . </i></p></td>
  	   </tr> 
     <tr>
          <td> {{Form::label('file_number','File Number:')}}</td>

          <td>{{Form::input('text','file_number')}}{{ $errors->first('name', '<span class=error>:message></span>') }}</td>
      
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
        <td colspan = "3">{{Form::submit('SAVE CHANGES')}}</td>
     </tr>
</table>

{{Form::close()}}

</div>

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop 