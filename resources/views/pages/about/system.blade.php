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
                        <a href="{{ route('about.system') }}" class="breadcrumb">About this Publishing System</a>
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
                    <div class="text-justify">
                        <p class="drop-cap">
                            This journal uses Open Journal Systems 2.4.8.2, which is open source journal management and publishing software developed, supported, and freely distributed by the Public Knowledge Project under the GNU General Public License.
                        </p>
                    </div><br>
                    <div class="text-center">
                        <img src="http://proust.ui.ac.id/locale/en_US/edprocesslarge.png" alt="OJS Editorial and Publishing Process">
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
