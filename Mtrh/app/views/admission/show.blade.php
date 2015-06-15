@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Show Admission Details</title>
@stop

@section('content')

@foreach($Admissions as $Admission)
<div id="results">
<ul>
<li>{{$Admissions->file_number }}</li>
<hr>
<li>{{ $Admissions->word_number}}</li>
<hr>
<li>{{$Admissions->word_room}}</li>
<hr>
<li>{{ $Admissions->word_allocated}}</li>
<hr>
<li>{{$Admissions->prescription }}</li>
<hr>
<li>{{ $Admissions->diagnosis}}</li>
<hr>
<li>{{$Admissions->relised_date }}</li>
<hr>
<li>{{$Admissions->farther_resuilts}}</li>
<hr>
<li>{{$Admissions->farther_test }}</li>	
<hr>
<li>{{$Admissions->comments}}</li>
<hr>	
<li>{{$Admissions->current_condition}}</li>
</ul>		
</div>
@endforeach



@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop