@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css">
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
                        <a href="{{ route('about.site') }}" class="breadcrumb">Site Map</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card blue lighten-2">
                <div class="card-content white-text">
                    <span class="card-title"><b>Site Map</b></span><br>

                    <div id="jstree">
                        <ul>
                            <li data-jstree='{"opened":true}'><a href="{{ route('index') }}" class="white-text">Home</a>
                                <ul>
                                    <li data-jstree='{"opened":true}'><a href="# route('journal') " class="white-text">Psychological Research on Urban Society</a>
                                        <ul>
                                            <li data-jstree='{"opened":true}' id="child_node_1"><a href="{{ route('about.about') }}" class="white-text">About</a>
                                                <ul>
                                                    <li data-jstree='{"opened":true}'><a href="{{ route('login') }}" class="white-text">Login</a></li>
                                                    <li data-jstree='{"opened":true}'><a href="{{ route('register') }}" class="white-text">Register</a></li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'><a href="# route('search') " class="white-text">Search</a><br>
                                                <ul>
                                                    <li data-jstree='{"opened":true}'><a href="# route('search.author') " class="white-text">By Author</a></li>
                                                    <li data-jstree='{"opened":true}'><a href="# route('search.title') " class="white-text">By Title</a></li>
                                                </ul>
                                            </li data-jstree='{"opened":true}'>
                                            <li data-jstree='{"opened":true}' class="white-text">Issues<br>
                                                <ul>
                                                    <li data-jstree='{"opened":true}'><a href=" route('issue.current') " class="white-text">Current Issue</a></li>
                                                    <li data-jstree='{"opened":true}'><a href=" route('issue.archive') " class="white-text">Archives</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li data-jstree='{"opened":true}'>
                                <a href="http://pkp.sfu.ca/ojs" class="white-text">Open Journal Systems</a>
                            </li>
                            <li data-jstree='{"opened":true}'>
                                <a href="javascript:openHelp('http://proust.ui.ac.id/index.php/index/help')" class="white-text">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/about.js') }}"></script>
<script>
    $(document).ready(function() {
        $(function () {
            $('#jstree').jstree();
            $('#jstree').on("changed.jstree", function (e, data) {
              console.log(data.selected);
            });
            $('button').on('click', function () {
                $('#jstree').jstree(true).select_node('child_node_1');
                $('#jstree').jstree('select_node', 'child_node_1');
                $.jstree.reference('#jstree').select_node('child_node_1');
            });
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
@endsection
