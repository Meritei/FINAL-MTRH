@extends('defaults.masterpage')

@section('content')
<center>
  <div id="cover">

{{Form::open(['route'=>'pharmacy.store'])}}
 <table id="tabler">
  <tr>
        <th>Pharmacy Form</th>
  </tr>
 <tr>
       <td>{{Form::label('file_number','File Number:')}}</td>

       <td>{{Form::input('text','file_number')}}</td>

</tr>
<tr>

      l<td> {{Form::label('diagnosis','Diagnosis')}}</td>

       <td>{{Form::input('text','diagnosis')}}</td>
</tr>
<tr>


       <td>{{Form::label('prescription','Symptoms:')}}</td>

       <td>{{Form::input('text','prescription')}}</td>
</tr>
<tr>


       <td>{{Form::label('drugs_given','Drugs Given:')}}</td>

      <td> {{Form::input('text','drugs_given')}}</td>
</tr>
<tr>
      <td colspan="1"> {{Form::submit('Save Records')}}<td>
</tr>
</table>

{{Form::close()}}
</div>

</center>





@stop