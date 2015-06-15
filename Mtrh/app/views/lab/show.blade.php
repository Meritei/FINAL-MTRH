@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Show Lab Details</title>
@stop

@section('content')

@foreach($files as $file)
<div id="results">
<ul>
<li>{{ $Lab_results->file_number }}</li>
<li>{{ $Lab_results->date  }}</li>
<li>{{ $Lab_results->symptoms }}</li>
<li>{{ $Lab_results->test_done}}</li>
<li>{{ $Lab_results->observation  }}</li>
<li>{{ $Lab_results->hiv_and_aids_status}}</li>
<li>{{ $Lab_results->full_resuilts }}</li>
<li>{{$Lab_results->test_done_by}}</li>
</ul>
</div>
@endforeach


@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop