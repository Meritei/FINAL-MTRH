@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Show File</title>
@stop

@section('content')

@foreach($files as $file)
<div 
id="results">
<ul>
<li>{{ $files->file_number }}</li>
<li>{{ $files->name }}</li>
</ul>
</div>
@endforeach



@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop