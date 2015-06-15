@extends('defaults.masterpage')
@section('header')
{{ HTML::style('css/main.css') }}

 <title>Update Consultation Details</title>

@stop



@section('content')
<center>

<div id="cover">

{{Form::open(['route'=>'consultation.store'])}}

<table id = "tabler"  >
      <tr>

      <th colspan = "2"> Fill The Form To Update  Consultation Details</th>

        </tr>
        <tr>

             <td> {{Form::label('file_number','File Number:')}}</td>

             <td> {{Form::input('text','file_number')}}{{ $errors->first('name', '<span class=error>:message></span>') }}</td>
        
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

           <td>{{Form::submit('Update')}}</td>
         
        </tr>

 </table>

{{Form::close()}}

</div>

</center>

@stop


@section('footer')

<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 

@stop