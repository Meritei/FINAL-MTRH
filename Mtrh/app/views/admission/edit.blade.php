@extends('defaults.masterpage')
@section('header')
{{ HTML::style('css/main.css') }}
 <title>Edit Admission</title>
@stop



@section('content')
<center>
<div id="cover">
{{Form::open(['route'=>'admission.store'])}}



<table id="tabler">

<tr><td>
  
<table>
      <tr>
      <th colspan = "7" >Fill The Appropriate Section  To Edit </th>
      </tr>
      <tr>
      <td> {{Form::label('file_number','File Number:')}}</td>

      <td>{{Form::input('text','file_number')}} {{ $errors->first('name', '<span class=error>:message></span>') }}</td>

      <td> {{Form::label('diagnosis','Diagnosis:')}}</td>

      <td> {{Form::input('text','diagnosis')}} </td>

       <td>{{Form::label('prescription','Prescription:')}}</td>

       <td>{{Form::input('text','prescription')}} </td>

       <td>{{Form::label('word_allocated','Word Allocated:')}}</td>

       <td>{{Form::input('text','word_allocated')}} </td>

       </tr>

       <tr>

       <td>{{Form::label('word_number','Word Number:')}}</td>

       <td>{{Form::input('text','word_number')}} </td>

       <td>{{Form::label('word_room','Word Room:')}}</td>

       <td>{{Form::input('text','word_room')}}</td>

      <td>{{Form::label('current_condition','Current Condition:')}}</td>

      <td>{{Form::input('text','current_condition')}}</td>

       <td>{{Form::label('comments','Doctor's Comments:')}}</td>

       <td>{{Form::input('text','comments')}}</td>

      </tr>
      <tr>
        <td colspan = "1"></td>
       <td>{{Form::label('farther_test','Farther Test:')}}</td>
       <td>{{Form::input('text','farther_test')}} </td>
       <td>{{Form::label('farther_resuilt','Farther Resuilts:')}}</td>
       <td>{{Form::input('text','farther_resuilt')}}</td>
       <td>{{Form::label('relised_date','Relise Date:')}}</td>
       <td>{{Form::input('text','relised_date')}} </td>
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