@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<div class="about">
    <div class="row">
        <div class="col s12">
            <nav class="blue lighten-2">
                <div class="nav-wrapper">
                    <div class="col s12">
                        <a href="{{ route('index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('about.about') }}" class="breadcrumb">About the Journal</a>
                        <a href="{{ route('about.statistics') }}" class="breadcrumb">Statistics</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card blue lighten-2">
                <div class="card-content white-text">
                    <span class="card-title"><b>About this Publishing System</b></span><br>
                    <div class="card">
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#2017">2017</a></li>
                            <li class="tab"><a class="active" href="#2018">2018</a></li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4 black-text">
                        <div id="2017">Issues published :	<h4>0</h4></div>
                        <div id="2018">Issues published :	<h4>1</h4></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/about.js') }}"></script>
@endsection
