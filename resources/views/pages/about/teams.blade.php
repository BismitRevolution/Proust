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
                        <a href="{{ route('about.teams') }}" class="breadcrumb">Editorial Team</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card blue lighten-2">
                <div class="card-content white-text">
                    <span class="card-title"><b>Editorial Team</b></span><br>
                    <ul class="collection with-header">
                        <li class="collection-header white-text text-upper red lighten-1"><h6><b>Editor-in-Chief</b></h6></li>
                        <li class="collection-item">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header black-text">
                                        <i class="material-icons black-text">person</i>
                                        <b>Zara Ambadar</b>, University of Pittsburgh, United States
                                    </div>
                                    <div class="collapsible-body white link-anim">
                                        <ul class="collection">
                                            <li class="collection-item avatar">
                                                <img src="https://static.thenounproject.com/png/630729-200.png" alt="" class="circle">
                                                <span class="title black-text">Zara Ambadar</span><br>
                                                <a href="http://www.pitt.edu/~ambadar/">http://www.pitt.edu/~ambadar/</a><br>
                                                <p class="black-text">University of Pittsburgh, United States</p><br>
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId=6506452950">Scopus ID : 6506452950</a><br>
                                                <a href="https://www.researchgate.net/profile/Zara_Ambadar">Research Gate</a><br>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="collection-header white-text text-upper red lighten-1"><h6><b>Managing Editor</b></h6></li>
                        <li class="collection-item">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header black-text">
                                        <i class="material-icons black-text">person</i>
                                        <b>Dr. Debora Eflina Purba</b>, Universitas Indonesia, Indonesia
                                    </div>
                                    <div class="collapsible-body white link-anim">
                                        <ul class="collection">
                                            <li class="collection-item avatar">
                                                <img src="https://static.thenounproject.com/png/630729-200.png" alt="" class="circle">
                                                <span class="title black-text">Dr. Debora Eflina Purba</span><br>
                                                <p class="black-text">Universitas Indonesia, Indonesia</p><br>
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId=57191242302">Scopus ID : 57191242302</a><br>
                                                <a href="https://orcid.org/0000-0002-0610-3209">ORCiD ID : 0000-0002-0610-3209</a><br>
                                                <a href="https://scholar.google.co.id/citations?user=GnUh73EAAAAJ&hl=id&oi=ao">Google Scholar</a><br>
                                                <a href="https://www.researchgate.net/profile/Debby_Purba2">Research Gate</a><br>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="collection-header white-text text-upper red lighten-1"><h6><b>Editorial Board</b></h6></li>
                        <li class="collection-item">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header black-text">
                                        <i class="material-icons black-text">person</i>
                                        <b>Henry Otgaar</b>, Maastricht University, Netherlands
                                    </div>
                                    <div class="collapsible-body white link-anim">
                                        <ul class="collection">
                                            <li class="collection-item avatar">
                                                <img src="https://static.thenounproject.com/png/630729-200.png" alt="" class="circle">
                                                <span class="title black-text">Henry Otgaar</span><br>
                                                <p class="black-text">Maastricht University, Netherlands</p><br>
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId=24169457100">Scopus ID : 24169457100</a><br>
                                                <a href="https://orcid.org/0000-0002-2782-2181">ORCiD ID : 0000-0002-2782-2181</a><br>
                                                <a href="https://scholar.google.co.id/citations?user=1ptisj0AAAAJ&hl=id">Google Scholar</a><br>
                                                <a href="https://www.researchgate.net/profile/Henry_Otgaar">Research Gate</a><br>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header black-text">
                                        <i class="material-icons black-text">person</i>
                                        <b>Christopher Cohrs</b>, Jacobs University, Germany
                                    </div>
                                    <div class="collapsible-body white link-anim">
                                        <ul class="collection">
                                            <li class="collection-item avatar">
                                                <img src="https://static.thenounproject.com/png/630729-200.png" alt="" class="circle">
                                                <span class="title black-text">Christopher Cohrs</span><br>
                                                <p class="black-text">Jacobs University, Germany</p><br>
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId=6507375556">Scopus ID : 6507375556</a><br>
                                                <a href="https://scholar.google.co.id/citations?user=RKGqOqAAAAAJ&hl=id">Google Scholar</a><br>
                                                <a href="https://www.researchgate.net/profile/J_Christopher_Cohrs">Research Gate</a><br>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header black-text">
                                        <i class="material-icons black-text">person</i>
                                        <b>Christopher Sonn</b>, Victoria University Australia, Australia
                                    </div>
                                    <div class="collapsible-body white link-anim">
                                        <ul class="collection">
                                            <li class="collection-item avatar">
                                                <img src="https://static.thenounproject.com/png/630729-200.png" alt="" class="circle">
                                                <span class="title black-text">Christopher Sonn</span><br>
                                                <p class="black-text">Victoria University Australia, Australia</p><br>
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId=24169457100">Scopus ID : 6601938546</a><br>
                                                <a href="https://orcid.org/0000-0002-2782-2181">ORCiD ID : 0000-0002-6175-1030</a><br>
                                                <a href="https://scholar.google.co.id/citations?user=YNgVBTsAAAAJ&hl=id">Google Scholar</a><br>
                                                <a href="https://www.researchgate.net/profile/Christopher_Sonn">Research Gate</a><br>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
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
