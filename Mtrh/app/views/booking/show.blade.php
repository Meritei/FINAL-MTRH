@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Show Booking Details</title>

@stop

@section('content')

@foreach($Bookings as $Booking)
<div id="results">
<ul>
<li>{{$Bookings->file_number }}</li>
<hr>
<li>{{ $Bookings->section_to_visit}}</li>
<hr>
<li>{{$Bookings->doctor_assigned}}</li>
<hr>
</ul>

</div>
@endforeach



@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop