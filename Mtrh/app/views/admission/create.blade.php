@extends('defaults.masterpage')
@section('header')
{{ HTML::style('css/main.css') }}
 <title>Admitte</title>
@stop



@section('content')
<center>
<div id="cover">
{{Form::open(['route'=>'admission.store'])}}



<table id="tabler">

<tr><td>
  
<table>
      <tr>
      <th colspan = "7" >Fill In These Form To Admitte A Patient</br>Please Fill Every Field</th>
      </tr>
      <tr>
      <td> {{Form::label('file_number','File Number:')}}</td>

      <td>{{Form::input('text','file_number')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>

      <td> {{Form::label('diagnosis','Diagnosis:')}}</td>

      <td> {{Form::input('text','diagnosis')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>

       <td>{{Form::label('prescription','Prescription:')}}</td>

       <td>{{Form::input('text','prescription')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>

       <td>{{Form::label('word_allocated','Word Allocated:')}}</td>

       <td>{{Form::input('text','word_allocated')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>

       </tr>

       <tr>

       <td>{{Form::label('word_number','Word Number:')}}</td>

       <td>{{Form::input('text','word_number')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>

       <td>{{Form::label('word_room','Word Room:')}}</td>

       <td>{{Form::input('text','word_room')}} {{ $errors->first('name', '<span class=error>:message></span>') }} </td>

      <td>{{Form::label('current_condition','Current Condition:')}}</td>

      <td>{{Form::input('text','current_condition')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>

       <td>{{Form::label('comments','Doctor's Comments:')}}</td>

       <td>{{Form::input('text','comments')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>

      </tr>
      <tr>
        <td colspan = "1"></td>
       <td>{{Form::label('farther_test','Farther Test:')}}</td>
       <td>{{Form::input('text','farther_test')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>
       <td>{{Form::label('farther_resuilt','Farther Resuilts:')}}</td>
       <td>{{Form::input('text','farther_resuilt')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>
       <td>{{Form::label('relised_date','Relise Date:')}}</td>
       <td>{{Form::input('text','relised_date')}} {{ $errors->first('name', '<span class=error>:message></span>') }} </td>
       <td colspan = "1"></td>
        <tr>
          <th colspan = "7">{{Form::submit('Save')}}</th>
        </tr>

       </table>

{{Form::close()}}

</div>

</center>

@stop


@section('footer')

<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 

@stop