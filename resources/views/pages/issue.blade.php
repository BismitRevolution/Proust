@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/browse.css') }}">
@endsection

@section('content')
<div>
    <div class="row">
        <nav>
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="/" class="breadcrumb">Home</a>
                    <a href="browse" class="breadcrumb">Archives</a>
                    <a href="issue" class="breadcrumb">Issue Title</a>
            </div>
        </nav>

        <h2 >Issue Title</h2>
        <div class="row">
            <div class="col s12 m6">
                <div class="card-horizontal grey lighten-1">
                    <div class="card-content white-text bold">
                        <span class="card-title">Publish date</span>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="bold">Table of Contents</h5>
        <div class="collection">
            <a href="detail" class="collection-item"><span class="badge">PDF</span>Editorial Note</a>
            <a href="detail" class="collection-item"><span class="badge">PDF</span>Original Research Paper</a>
            <a href="detail" class="collection-item"><span class="badge">PDF</span>Review Article</a>
        </div>
                    
    </div>
</div>
@endsection