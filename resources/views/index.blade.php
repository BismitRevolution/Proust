@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title" style="padding-bottom: 20px;">Psychological Research on Urban Society</span>
                    <p class="paragraph">
                        Psychological Research on Urban Society (PRoUSt) welcomes excellent
                        empirical and theoretical contributions to applied research related
                        to the psychology of urban issues. Reviews are also welcome, as are
                        replications of previous research. Articles deal with all fields on
                        urban society, such as urban mental health and well-being,
                        educational and child development in urban society, intergroup
                        relation, acculturation, and identity formation in urban contexts,
                        urban social issues (e.g., poverty, traffic, crime and violence),
                        urban culture, and urban issues on employment and organizational
                        behavior. As these topics are closely related to issues in other
                        disciplines, this journal is open to contributions of an
                        interdisciplinary nature.
                    </p>
                    <p class="paragraph">
                        The readership of PRoUSt Journal consists of academics and
                        practitioners; thus it is suggested that all authors consider
                        these diverse audiences into their writing. Authors of theoretical
                        or highly empirical papers are encouraged to communicate practical
                        implications of their studies, and authors of practice-oriented
                        papers should clearly elaborate the theoretical approach they
                        are using.
                    </p>
                    <p>
                        The topics that include in this journal are:
                    </p>
                    <ul class="browser-default">
                        <li>Urban mental health and well-being</li>
                        <li>Education and child development in urban society</li>
                        <li>Intergroup relation, acculturation, and identity formation in urban contexts</li>
                        <li>Urban social issues (ex: poverty, traffic, crime and violence)</li>
                        <li>Urban culture</li>
                        <li>Urban issues on employment and organizational behavior</li>
                        <li>Technology and urban society</li>
                    </ul>
                </div>
            </div>
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Announcements</span>
                    <!-- <p>Valian ganteng tiada lawan.</p> -->
                </div>
            </div>

            <div class="row">
                @foreach ($announcements as $announcement)
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="https://via.placeholder.com/200x210">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ $announcement['title'] }}<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">See Details</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $announcement['title'] }}<i class="material-icons right">close</i></span>
                            <p class="paragraph">{{ $announcement['content'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <ul class="pagination center">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
