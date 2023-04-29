@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

@section('title', 'Book Review Site')

@section('content')
<h3>Welcome {{ Auth::user()->name }}</h3>
<div class="dashboard-main-container">
    <div class="dashboard-main-card">
        <h5 class="card-title">Search a Book</h5>
        <p class="card-text">Find and search for books in our extensive library collection.</p>
        <a class="card-link" href="/searchbook" class="btn btn-primary">Search</a>
    </div>
    <div class="dashboard-main-card">
        <h5 class="card-title">Read a Review</h5>
        <p class="card-text">Read reviews of popular books and discover new titles.</p>
        <a class="card-link" href="/readreview" class="btn btn-primary">Read</a>
    </div>
    <div class="dashboard-main-card">
        <h5 class="card-title">Submit a Review</h5>
        <p class="card-text">Share your thoughts and contribute to our community of book lovers.</p>
        <a class="card-link" href="/submitreview" class="btn btn-primary">Submit</a>
    </div>
</div>
@endsection