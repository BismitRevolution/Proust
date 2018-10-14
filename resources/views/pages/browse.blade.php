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
            </div>
        </nav>
        <h2 >Archives</h2>
        <div class="row">
            <div class="col s12 m6">
                <div class="card-horizontal grey lighten-1">
                    <div class="card-content white-text bold">
                        <span class="card-title">2018</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="issues">
            <a href="">Vol 1, No 1 (2018): April 2018</a>
        </div>
        <p>1 - 1 of 1 items</p>
    </div>
</div>
@endsection

