@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}

 <title>Edit Diagnosis</title>

@stop



@section('content')

<center>
<div id="cover"  >
{{Form::open(['route'=>'diagnosis.store'])}}

<table id = "tabler"  >
	    <tr>

      <th colspan = "2"> Fill The Form To Edit A Diagnosis</th>

        </tr>
        <tr>

             <td> {{Form::label('file_number','File Number:')}}</td>

             <td> {{Form::input('text','file_number')}}{{ $errors->first('name', '<span class=error>:message></span>') }}</td>
        
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

           <td>{{Form::submit('Edit')}}</td>
         
        </tr>

 </table>

{{Form::close()}}

</div>

</center>

@stop
@section('footer')

<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 

@stop