<?php
use Illuminate\resources\views\index.blade.php;

@extends('layouts.app')

@section('content')

<div>
  <div class="container">
      <div class="row">
          {{-- @dump($comics) --}}
          @foreach ($comics as $comic)

              <div class="col-4">
                <a href="{{ route('comics.show',$comics->id) }}">
                  <img src="{{ $comics->thumb }}" alt="">
                  <h3>{{ $comics->title }}</h3>
                </a>
              </div>

          @endforeach
      </div>
  </div>
</div>

@endsection