@extends('defaults.masterpage')
@section('header')

{{ HTML::style('css/main.css') }}

 <title>Create Patients Info</title>

@stop


@section('content')
<div id = "cover">
<center>
{{Form::open(['route'=>'info.store'])}}

<table>
      <tr>
      <th colspan="3">Patients Info Form</th>
      </tr>
        <tr>
       <td>{{Form::label('file_number','File Number:')}}</td>

       <td>{{Form::input('text','file_number')}}</td>

       <td>{{Form::label('name','Name:')}}</td>

       <td>{{Form::input('text','name')}}</td>
        </tr>


      <tr>
      <td> {{Form::label('id_number','ID NUMBER:')}} </td>
     
       <td>{{Form::input('text','id_number')}}</td>



       <td>{{Form::label('residence','Residence:')}}</td>

      <td> {{Form::input('text','residence')}}</td>
     </tr>

     <tr>

       <td>{{Form::label('patient_phone_number','Patients Phone Number:')}}</td>

      <td> {{Form::input('text','patient_phone_number')}}</td>



      <td> {{Form::label('sex','Sex:')}}</td>

       <td>{{Form::input('text','sex')}}</td>
      
      </tr>
   
      <tr>
       <td>{{Form::label('age','Age:')}}</td>

       <td>{{Form::input('text','age')}}</td>



      <td> {{Form::label('marital_status','Marital Status:')}}</td>

      <td> {{Form::input('text','marital_status')}}</td>
       </tr>

       <tr>
       <td>{{Form::label('next_of_keen','Next Of Keen:')}}</td>

      <td> {{Form::input('text','next_of_keen')}}</td>



      <td> {{Form::label('keen_phone_number','Keen's Phone Number:')}}</td>

      <td> {{Form::input('text','keen_phone_number')}}</td>

        <tr>
       <td>{{Form::label('postal_address','Postal Address:')}}</td>

       <td>{{Form::input('text','postal_address')}}</td>



      <td> {{Form::label('email','Email:')}}</td>

       <td>{{Form::input('text','email')}}</td>

         </tr>
         <tr>

        <td colspan="3">{{Form::submit('Save Records')}}</td>

        </tr>

</table>

{{Form::close()}}


</center>





@stop