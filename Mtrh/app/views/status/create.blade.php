@extends('defaults.masterpage')

@section('content')
<center>
{{Form::open(['route'=>'status.store'])}}
  <div>

       {{Form::label('file_number','File Number:')}}

       {{Form::input('text','file_number')}}

</div>

<div>

       {{Form::label('diagnosis','Diagnosis:')}}

       {{Form::input('text','diagnosis')}}

</div>
<div>

       {{Form::label('prescription','Prescription:')}}

       {{Form::input('text','prescription')}}

</div>
<div>

       {{Form::label('How_am_fearing','How Am Fearing:')}}

       {{Form::input('text','How_am_fearing')}}

</div>
<div>

       {{Form::label('patient_phone_number','Patients Phone Number:')}}

       {{Form::input('text','patient_phone_number')}}

</div>
<div>

       {{Form::label('email','Email:')}}

       {{Form::input('text','prescription')}}

</div>
<div>

       {{Form::label('mail_text','Text To send:')}}

       {{Form::input('text','mail_text')}}

</div>
<div>
        {{Form::submit('Follow Up')}}

</div>

{{Form::close()}}


</center>





@stop