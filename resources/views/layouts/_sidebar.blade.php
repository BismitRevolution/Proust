<div class="row">
    <div class="col s12">
        <a href="{{ route('submission') }}" class="waves-effect waves-light btn-large" style="width: 100%; margin-bottom: 10px;">
            <i class="material-icons right">backup</i>SUBMIT MANUSCRIPT
        </a>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <div class="card white">
            <div class="card-content blue-grey-text text-darken-4">
                <span class="card-title">News & Updates</span>
                <p>Keep yourself updates!</p>
            </div>
            <div class="card-action">
                <a href="#">View</a>
                <a href="#">Subscribe</a>
            </div>
        </div>
    </div>
</div>

<div id="sidebar-auth" class="row">
    <div class="col s12">
        <div class="card">
            <!-- <div class="card-content">
            <p>Login</p>
        </div> -->
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#sidebar-login">Login</a></li>
                    <li class="tab"><a href="#sidebar-register">Register</a></li>
                </ul>
            </div>
            <div class="card-content bg-white">
                <div id="sidebar-login">
                    <div class="row">
                        <div class="col s12">
                            <form class="" action="#" method="post">
                                <div class="input-field col s12">
                                    <input id="sidebar-username" type="text" class="validate">
                                    <label for="sidebar-username">Username</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="sidebar-password" type="password" class="validate">
                                    <label for="sidebar-password">Password</label>
                                </div>
                                <div class="" style="margin: 10px;">
                                    <a href="{{ route('login') }}" class="waves-effect waves-light btn-large" style="width: 100%;">
                                        <i class="material-icons right">exit_to_app</i>LOGIN
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="sidebar-register">
                    <a class="waves-effect waves-light btn-large" style="width: 100%;">
                        <i class="material-icons right">person_add</i>New Account
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="https://via.placeholder.com/200x100">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Search by Keywords<i class="material-icons right">expand_less</i></span>
                <!-- <p><a href="#">Search</a></p> -->
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4" style="padding-bottom: 20px;">Recent Keywords<i class="material-icons right">close</i></span>
                <a href="#">word1 word2 word3 word4 word5 word6 word7 word8 word9</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <div class="collection">
            <a href="#!" class="collection-item">For Readers</a>
            <a href="#!" class="collection-item">For Authors</a>
            <a href="#!" class="collection-item">For Librarians</a>
            <a href="#!" class="collection-item">For Reviewers</a>
            <a href="#!" class="collection-item">For Editors</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Visitors</span>
                <p>Data from Google Visitor Analytics</p>
            </div>
            <!-- <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
            </div> -->
        </div>
    </div>
</div>
