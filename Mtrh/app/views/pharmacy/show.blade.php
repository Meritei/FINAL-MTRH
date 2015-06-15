@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Show Pharmacy Details</title>
@stop

@section('content')

@foreach($Pharmacys as $Pharmacy)
<div id="results">
<ul>
<hr>
<li>{{ $Pharmacys->file_number}}</li>
<hr>
<li>{{ $Pharmacys->diagnosis }}</li>
<hr>
<li>{{ $Pharmacys->prescription }}</li>
<hr>
<li>{{ $Pharmacys->drugs_given }}</li>
<hr>
<li>{{ $Pharmacys->observation  }}</li>
<hr>
</ul>
</div>
@endforeach
 
@stop
@section('footer')
<center><div id = "fpo"><p>A luke Dennis production . dennisluke44@gmail.com</p></div></center> 
@stop