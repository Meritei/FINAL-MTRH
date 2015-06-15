@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title> Details</title>
@stop

@section('content')

@foreach( $Payments as  $Payment)
<div id="results">
<ul>
<li>{{ $files->file_number }}</li>
<hr>
<li>{{ $Payments->lab_charges  }}</li>
<hr>
<li>{{ $Payments->consultation_fee  }}</li>
<hr>
<li>{{ $Payments->medication_fee}}</li>
<hr>
<li>{{ $Payments->total_amound  }}</li>
<hr>
<li>{{ $Payments->amound_paid }}</li>
<hr>
<li>{{ $Payments->balance }}</li>
<hr>
</ul>
</div>
@endforeach


@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop