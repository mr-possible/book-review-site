@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

@section('title', 'Book Review Site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Search a Book</h5>
                <p class="card-text">Find and search for books in our extensive library collection.</p>
                <a href="/searchbook" class="btn btn-primary">Search</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Read a Review</h5>
                <p class="card-text">Read reviews of popular books and discover new titles.</p>
                <a href="/readreview" class="btn btn-primary">Read Reviews</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Submit a Review</h5>
                <p class="card-text">Share your thoughts and contribute to our community of book lovers.</p>
                <a href="#" class="btn btn-primary">Submit a Review</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection