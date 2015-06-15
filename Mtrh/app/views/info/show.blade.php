@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Show Patients Details</title>

@stop

@section('content')

@foreach($patientsinfos as $patientsinfos)

<div id="results">
<ul>
<li>{{$patientsinfos->file_number }}</li>
<hr>
<li>{{$patientsinfos->name}}</li>
<hr>
<li>{{$patientsinfos->id_number }}</li>
<hr>
<hr>
<li>{{ $patientsinfos->residence}}</li>
<hr>
<li>{{$patientsinfos->patient_phone_number}}</li>
<hr>
<hr>
<li>{{$patientsinfos->sex}}</li>
<hr>
<li>{{$patientsinfos->age }}</li>
<hr>
<hr>
<hr>
<li>{{$patientsinfos->marital_status }}</li>
<hr>
<li>{{$patientsinfos->next_of_keen  }}</li>
<hr>
<hr>
<hr>
<li>{{$patientsinfos->keen_phone_number}}</li>
<hr>
<li>{{$patientsinfos->email}}</li>
<hr>
</ul>

</div>
@endforeach



@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop