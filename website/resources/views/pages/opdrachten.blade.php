@extends('layout')
@section('css')

<link href="{{ asset('css/opdrachten.css') }}" rel="stylesheet">

@endsection


@section('content')

<p class="projectcenter">𝙾𝚙𝚍𝚛𝚊𝚌𝚑𝚝𝚎𝚗</p>
<div class="opdrfoto">
  <h2>Keuze 1.</h2>
  <a href=#
    ><img class="opdracht" src="{{asset('images/opdr1.jpg')}}" alt="opdr"
  /></a>
  <h2>Keuze 2.</h2>
  <a href="#"
    ><img class="opdracht" src="{{asset('images/opdr2.jpg')}}" alt="opdr"
  /></a>
  <h2>Keuze 3.</h2>
  <a href="#"
    ><img class="opdracht" src="{{asset('images/opdr3.jpg')}}" alt="opdr"
  /></a>
 
</div>
</section>

@endsection