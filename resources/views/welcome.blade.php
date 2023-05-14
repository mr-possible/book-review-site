@extends('layouts.app')

@section('title', 'Book Review Site')

@section('content')
<div class="dashboard-main-container has-text-centered" 
    style="background-image: url('{{ asset('images/welcome-bg.jpg') }}');">
    <div class="container is-pulled-right">
        <p class="title is-3 has-text-white">
            This project is part of the Coursework 03 submission in CSCM48 module for MSc degree, Swansea University, Wales, United Kingdom.
        </p>
        <p class="title is-5 has-text-white">
            Name: <strong>Sambhav Dave</strong>
        </p>
        <p class="title is-5 has-text-white">
            Student Id: <strong>2267358</strong>
        </p>
        <p class="title is-5 has-text-white">
            Email: <strong>2267358@swansea.ac.uk</strong>
        </p>     
        <hr>
        <p class="subtitle is-4 has-text-white has-text-centered">
            Quote of the day
        </p>
        <p class="title is-4 has-text-centered has-text-white">
            <i>
                <span class="subtitle is-3 has-text-white">&ldquo; {{ $quote }} <span class="subtitle is-3 has-text-white">&rdquo;
            </i>
        </p>
    </div>
</div>
@endsection

<!-- 
                  References:
  HTML: https://developer.mozilla.org/en-US/docs/Web/HTML
  Bulma CSS: https://bulma.io/documentation/
  Livewire: https://laravel-livewire.com/docs/2.x/quickstart
  Laravel: https://laravel.com/docs/10.x/readme 
-->