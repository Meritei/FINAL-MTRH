@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Show Consultation Details</title>

@stop

@section('content')

@foreach($Consultations as $Consultation)
<div id="results">
<ul>
<li>{{$Consultations->file_number }}</li>
<hr>
<li>{{$Consultations->doctor_assigned}}</li>
<hr>
<li>{{$Consultations->symptoms}}</li>
<hr>
</ul>

</div>
@endforeach



@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop