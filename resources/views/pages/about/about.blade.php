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
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card blue lighten-2">
                <div class="card-content white-text">
                    <span class="card-title"><b>About the Journal</b></span><br>
                    <ul class="collapsible">
                        <li class="active">
                            <div class="collapsible-header black-text">
                                <i class="material-icons black-text">people</i>
                                People
                            </div>
                            <div class="collapsible-body blue lighten-5 about-links link-anim">
                                <a href="{{ route('about.contact') }}" class="waves-effect waves-light text-upper">▶ Contact</a><br>
                                <a href="{{ route('about.teams') }}" class="waves-effect waves-light text-upper">▶ Editorial Team</a><br>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header black-text">
                                <i class="material-icons black-text">assignment</i>
                                Policies
                            </div>
                            <div class="collapsible-body blue lighten-5 about-links link-anim">
                                <a href="{{ route('about.policies') }}" class="waves-effect waves-light text-upper">▶ Focus and Scope</a><br>
                                <a href="{{ route('about.policies') }}" class="waves-effect waves-light text-upper">▶ Section Policies</a><br>
                                <a href="{{ route('about.policies') }}" class="waves-effect waves-light text-upper">▶ Peer Review Process</a><br>
                                <a href="{{ route('about.policies') }}" class="waves-effect waves-light text-upper">▶ Publication Frequency</a><br>
                                <a href="{{ route('about.policies') }}" class="waves-effect waves-light text-upper">▶ Open Access Policy</a><br>
                                <a href="{{ route('about.policies') }}" class="waves-effect waves-light text-upper">▶ Article Processing Charge</a><br>
                                <a href="{{ route('about.policies') }}" class="waves-effect waves-light text-upper">▶ Publication Ethics</a><br>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header black-text">
                                <i class="material-icons black-text">note_add</i>
                                Submissions
                            </div>
                            <div class="collapsible-body blue lighten-5 about-links link-anim">
                                <a href="{{ route('about.submissions') }}" class="waves-effect waves-light text-upper">▶ Online Submissions</a><br>
                                <a href="{{ route('about.submissions') }}" class="waves-effect waves-light text-upper">▶ Author Guidelines</a><br>
                                <a href="{{ route('about.submissions') }}" class="waves-effect waves-light text-upper">▶ Copyright Notice</a><br>
                                <a href="{{ route('about.submissions') }}" class="waves-effect waves-light text-upper">▶ Privacy Statement</a><br>
                                <a href="{{ route('about.submissions') }}" class="waves-effect waves-light text-upper">▶ Author Fees</a><br>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header black-text">
                                <i class="material-icons black-text">more_horiz</i>
                                Other
                            </div>
                            <div class="collapsible-body blue lighten-5 about-links link-anim">
                                <a href="{{ route('about.sponsorship') }}" class="waves-effect waves-light text-upper">▶ Journal Sponsorship</a><br>
                                <a href="{{ route('about.site') }}" class="waves-effect waves-light text-upper">▶ Site Map</a><br>
                                <a href="{{ route('about.system') }}" class="waves-effect waves-light text-upper">▶ About this Publishing System</a><br>
                                <a href="{{ route('about.statistics') }}" class="waves-effect waves-light text-upper">▶ Statistics</a><br>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/about.js') }}"></script>
@endsection
