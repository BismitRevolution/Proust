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
                    <span class="card-title">Register</span>
                    <!-- <p>Keep yourself updates!</p> -->
                    <div class="row">
                        <div class="col s12 m6" style="margin-top: 20px;">
                            <button id="btn-new" class="waves-effect waves-light btn-large" style="width: 100%;">
                                <i class="material-icons right">person_add</i>NEW ACCOUNT
                            </button>
                        </div>
                        <div class="col s12 m6" style="margin-top: 20px;">
                            <button id="btn-existing" class="waves-effect waves-light btn-large" style="width: 100%;">
                                <i class="material-icons right">person</i>EXISTING ACCOUNT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="register-existing" class="row hidden">
        <div class="col s12">
            <div class="card white" style="padding: 20px;">
                <div class="card-content blue-grey-text text-darken-4">
                    <span class="card-title">Register Existing Account</span>
                    <!-- <p>Keep yourself updates!</p> -->
                    <div class="row">
                        <div class="col s12">
                            <form class="" action="#" method="post">
                                <div class="input-field col s12">
                                    <input id="existing-username" type="text" class="validate">
                                    <label for="existing-username">Username *</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="existing-password" type="password" class="validate">
                                    <label for="existing-password">Password *</label>
                                </div>
                                <p class="col s12" style="margin-bottom: 20px;">
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="true" />
                                        <span>Register as <b>Reader</b> (Notified by email on publication of an issue of the journal)</span>
                                    </label>
                                </p>
                                <p class="col s12" style="margin-bottom: 20px;">
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="true" />
                                        <span>Register as <b>Author</b> (Able to submit items to the journal)</span>
                                    </label>
                                </p>
                                <div class="" style="margin: 10px;">
                                    <a class="waves-effect waves-light btn-large" style="width: 100%;">
                                        <i class="material-icons right">person</i>REGISTER EXISTING ACCOUNT
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="register-new" class="row hidden">
        <div class="col s12">
            <div class="card white" style="padding: 20px;">
                <div class="card-content blue-grey-text text-darken-4">
                    <span class="card-title">Register New Account</span>
                    <!-- <p>Keep yourself updates!</p> -->
                    <div class="row">
                        <div class="col s12">
                            <form class="" action="#" method="post">
                                <div class="input-field col s12">
                                    <input id="username" type="text" class="validate">
                                    <label for="username">Username *</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password *</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="confirm-password" type="password" class="validate">
                                    <label for="confirm-password">Confirm Password *</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="salutation" type="text" class="validate">
                                    <label for="salutation">Salutation</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="firstname" type="text" class="validate">
                                    <label for="firstname">First Name *</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="middlename" type="text" class="validate">
                                    <label for="middlename">Middle Name</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="lastname" type="text" class="validate">
                                    <label for="lastname">Last Name *</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="initial" type="text" class="validate">
                                    <label for="initial">Initials</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose your gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                    <label>Gender</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="afiliation" type="text" class="validate">
                                    <label for="afiliation">Afiliation</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="signature" type="text" class="validate">
                                    <label for="signature">Signature</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email *</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="confirm-email" type="email" class="validate">
                                    <label for="confirm-email">Confirm Email *</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="orcid" type="text" class="validate">
                                    <label for="orcid">ORCID</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="url" type="text" class="validate">
                                    <label for="url">URL</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="phone" type="tel" class="validate">
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="fax" type="tel" class="validate">
                                    <label for="fax">Fax</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="mailing-address" type="text" class="validate">
                                    <label for="mailing-address">Mailing Address</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose your country</option>
                                        <option value="1">Indonesia</option>
                                        <option value="2">Other</option>
                                    </select>
                                    <label>Country</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="bio" type="text" class="validate">
                                    <label for="bio">Bio</label>
                                </div>
                                <p class="col s12" style="margin-bottom: 20px;">
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="true" />
                                        <span>Send me a confirmation email including my username and password</span>
                                    </label>
                                </p>

                                <p class="col s12" style="margin-bottom: 20px;">
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="true" />
                                        <span>Register as <b>Reader</b> (Notified by email on publication of an issue of the journal)</span>
                                    </label>
                                </p>
                                <p class="col s12" style="margin-bottom: 20px;">
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="true" />
                                        <span>Register as <b>Author</b> (Able to submit items to the journal)</span>
                                    </label>
                                </p>
                                <div class="" style="margin: 10px;">
                                    <a class="waves-effect waves-light btn-large" style="width: 100%;">
                                        <i class="material-icons right">person_add</i>REGISTER EXISTING ACCOUNT
                                    </a>
                                </div>
                            </form>
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
                <a href="#!" class="collection-item">Already have an account?</a>
                <a href="#!" class="collection-item">Already registered with this or another journal in this site?</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card white">
                <div class="card-content blue-grey-text text-darken-4">
                    <span class="card-title" style="padding-bottom: 20px;">Privacy Statement</span>
                    <p style="text-align: justify;">The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made available for any other purpose or to any other party.</p>
                </div>
                <!-- <div class="card-action">
                    <a href="#">View</a>
                    <a href="#">Subscribe</a>
                </div> -->
            </div>
        </div>
    </div>

</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/auth/login.js') }}"></script>
@endsection
