@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Show Diagnosis Details</title>

@stop

@section('content')

@foreach($Diagnosis as $Diagnos)
<div id="results">
<ul>
<li>{{$Diagnosis->file_number }}</li>
<hr>
<li>{{$Diagnosis->diagnosis}}</li>
<hr>
<li>{{$Diagnosis->prescriptions}}</li>
<hr>
<li>{{$Diagnosis->comments}}</li>
</ul>
  
</div>
@endforeach



@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop