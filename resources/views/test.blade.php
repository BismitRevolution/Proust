@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}"> -->
@endsection

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card white" style="padding: 20px;">
                <div class="card-content blue-grey-text text-darken-4">
                    <span class="card-title">Login</span>
                    <!-- <p>Keep yourself updates!</p> -->
                    <div id="login">
                        <div class="row">
                            <div class="col s12">
                                <form class="" action="#" method="post">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" class="validate">
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                    <p class="col s12" style="margin-bottom: 20px;">
                                        <label>
                                            <input type="checkbox" class="filled-in" />
                                            <span>Remember me</span>
                                        </label>
                                    </p>
                                    <div class="" style="margin: 10px;">
                                        <a class="waves-effect waves-light btn-large" style="width: 100%;">
                                            <i class="material-icons right">exit_to_app</i>LOGIN
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col s12" style="padding: 0px 0px;">
        <div class="card white">
            <div class="card-content blue-grey-text text-darken-4">
                <span class="card-title">Help</span>
                <!-- <p>Keep yourself updates!</p> -->
            </div>
            <div class="collection">
                <a href="#!" class="collection-item">Forgot password?</a>
                <a href="#!" class="collection-item">Doesn't have account?</a>
            </div>
        </div>
    </div>

</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/auth/login.js') }}"></script>
@endsection
