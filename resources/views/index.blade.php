@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card blue lighten-2">
                <div class="card-content black-text">
                    <span class="card-title">Psychological Research on Urban Society</span>
                    <p style="margin-top:5px; margin-bottom:5px;">
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
                    <p style="margin-top:5px; margin-bottom:5px;">
                        The readership of PRoUSt Journal consists of academics and
                        practitioners; thus it is suggested that all authors consider
                        these diverse audiences into their writing. Authors of theoretical
                        or highly empirical papers are encouraged to communicate practical
                        implications of their studies, and authors of practice-oriented
                        papers should clearly elaborate the theoretical approach they
                        are using.
                    </p>
                    <p style="margin-top:5px; margin-bottom:5px;">
                        The topics that include in this journal are:
                    </p>
                    <ul class="browser-default" style="margin-top:5px; margin-bottom:5px;">
                        <li>Urban mental health and well-being</li>
                        <li>Education and child development in urban society</li>
                        <li>Intergroup relation, acculturation, and identity formation
                            in urban contexts</li>
                        <li>Urban social issues (ex: poverty, traffic, crime and violence)</li>
                        <li>Urban culture</li>
                        <li>Urban issues on employment and organizational behavior</li>
                        <li>Technology and urban society</li>
                    </ul>
                </div>
            </div>
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Announce</span>
                    <p>Valian ganteng tiada lawan.</p>
                </div>
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
