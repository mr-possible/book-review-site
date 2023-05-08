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
    </div>
</div>
@endsection
