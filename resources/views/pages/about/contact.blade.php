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
                        <a href="{{ route('about.contact') }}" class="breadcrumb">Journal Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card blue lighten-2">
                <div class="card-content white-text">
                    <span class="card-title"><b>Contact</b></span><br>
                    <ul class="collection with-header">
                        <li class="collection-header white-text text-upper red lighten-1"><h6><b>Mailing Address</b></h6></li>
                        <li class="collection-item black-text"><br>
                            <span><b>Faculty of Psychology Universitas Indonesia</b></span>
                            <br><br>
                            <i class="material-icons black-text">location_on</i><span>  Kampus Baru UI – Depok 16424</span><br>
                            <i class="material-icons black-text">phone_in_talk</i><span>  (021) 786 3520, 786 6523, 786 8280, 727 0004, 727 0005</span><br>
                            <i class="material-icons black-text">perm_phone_msg</i><span>  (021) 786 3526</span><br>
                            <i class="material-icons black-text">email</i><span>  proust@ui.ac.id</span><br><br>
                        </li>
                        <li class="collection-header white-text text-upper red lighten-1"><h6><b>Principal Contact</b></h6></li>
                        <li class="collection-item black-text"><br>
                            <span><b>Psychological Research on Urban Society</b></span>
                            <br><br>
                            <i class="material-icons black-text">my_location</i><span>  Faculty of Psychology, Universitas Indonesia</span><br><br>
                            <span><b>Faculty of Psychology Universitas Indonesia</b></span>
                            <br><br>
                            <i class="material-icons black-text">location_on</i><span>  Kampus Baru UI – Depok 16424</span><br>
                            <i class="material-icons black-text">location_city</i><span>  West Java  16424</span><br>
                            <i class="material-icons black-text">email</i><span>  proust@ui.ac.id</span><br><br>
                        </li>
                        <li class="collection-header white-text text-upper red lighten-1"><h6><b>Support Contact</b></h6></li>
                        <li class="collection-item black-text"><br>
                            <span><b>Faculty of Psychology Universitas Indonesia</b></span>
                            <br><br>
                            <i class="material-icons black-text">person_pin</i><span>  Dito Aryo Prabowo, S.Psi.</span><br>
                            <i class="material-icons black-text">email</i><span>  dito.aryo@ui.ac.id</span><br><br>
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
