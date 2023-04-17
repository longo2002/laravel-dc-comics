<?php
use resources/views/show.blade.php ;

@extends('layouts.app')

@section('content')

<div class="container">
  <h1>{{ $comics->title }}</h1>
</div>

<div class="container">
  <img src="{{ $comics->thumb }}" alt="">
  <p>{!! $comics->description !!}</p>
</div>

<div class="container">
  <ul class="list-group">
    <li class="list-group-item">Prezzo: {{ $comics->price }}</li>
    <li class="list-group-item">Serie: {{ $comics->series }}</li>
    <li class="list-group-item">Tipologia: {{ $comics->type }}</li>
  </ul>
</div>

@endsection