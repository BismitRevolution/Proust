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
                        <a href="{{ route('about.policies') }}" class="breadcrumb">Editorial Policies</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card blue lighten-2">
                <div class="card-content white-text">
                    <span class="card-title"><b>Editorial Policies</b></span><br>
                    <ul class="collapsible">
                        <li class="active">
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Focus and Scope</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text drop-cap">
                                    Psychological Research on Urban Society (PRoUSt) welcomes excellent empirical and theoretical contributions to applied research related to the psychology of urban issues. Reviews are also welcome, as are replications of previous research. Articles deal with all fields on urban society, such as urban mental health and well-being, educational and child development in urban society, intergroup relation, acculturation, and identity formation in urban contexts, urban social issues (e.g., poverty, traffic, crime and violence), urban culture, and urban issues on employment and organizational behavior. As these topics are closely related to issues in other disciplines, this journal is open to contributions of an interdisciplinary nature.
                                    <br>
                                    <br>
                                    The readership of PRoUSt Journal consists of academics and practitioners; thus it is suggested that all authors consider these diverse audiences into their writing. Authors of theoretical or highly empirical papers are encouraged to communicate practical implications of their studies, and authors of practice-oriented papers should clearly elaborate the theoretical approach they are using.
                                    <br>
                                    <br>
                                    The topics that include in this journal are:
                                    <br>
                                    •&nbsp; Urban mental health and well-being<br>
                                    •&nbsp; Education and child development in urban society<br>
                                    •&nbsp; Intergroup relation, acculturation, and identity formation in urban contexts<br>
                                    •&nbsp; Urban social issues (ex: poverty, traffic, crime and violence)<br>
                                    •&nbsp; Urban culture<br>
                                    •&nbsp; Urban issues on employment and organizational behavior<br>
                                    •&nbsp; Technology and urban society<br>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Section Policies</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <h5 class="black-text"><b>Original Research Paper</b></h5>
                                <p class="black-text">
                                    Present new empirical results contributing to theoretical, methodological, and/or applied advances (with a maximum length of 8,000 words, including references but excluding tables and figures). Articles longer than 8,000 words will be accepted on an occasional basis.
                                </p><br>
                                <ul class="row">
                            		<li class="black-text col l12 xl5"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Open Submissions</li>
                                	<li class="black-text col l12 xl3"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Indexed</li>
                                	<li class="black-text col l12 xl4"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Peer Reviewed</li>
                                </ul>
                                <h5 class="black-text"><b>Research Note</b></h5>
                                <p class="black-text">
                                    Similar to original articles but shorter in nature (with a maximum length of 3,000 words, including references but excluding tables and figures).
                                </p><br>
                                <ul class="row">
                            		<li class="black-text col l12 xl5"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Open Submissions</li>
                                	<li class="black-text col l12 xl3"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Indexed</li>
                                	<li class="black-text col l12 xl4"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Peer Reviewed</li>
                                </ul>
                                <h5 class="black-text"><b>Review Article</b></h5>
                                <p class="black-text">
                                    Summarize and integrate a clearly defined literature and make theoretical advances in this area (with a maximum length of 10,000 words, including references but excluding tables and figures). Articles longer than 10,000 words will be accepted on an occasional basis. Policy reviews fall in this category.
                                </p><br>
                                <ul class="row">
                            		<li class="black-text col l12 xl5"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Open Submissions</li>
                                	<li class="black-text col l12 xl3"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Indexed</li>
                                	<li class="black-text col l12 xl4"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Peer Reviewed</li>
                                </ul>
                                <h5 class="black-text"><b>Case Study</b></h5>
                                <p class="black-text">
                                    The article should present good descriptions of experiences from particular contexts that allow lessons to be learned. It need not be a successful case, lessons can be learnt from failure. An article containing a case study should address the following questions: what are the context variables that made it a success or a failure; how can we transfer lessons from this case elsewhere. Case studies should be under 6,000 words, including references but excluding tables and figures.
                                </p><br>
                                <ul class="row">
                            		<li class="black-text col l12 xl5"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Open Submissions</li>
                                	<li class="black-text col l12 xl3"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Indexed</li>
                                	<li class="black-text col l12 xl4"><img src="http://proust.ui.ac.id/lib/pkp/templates/images/icons/checked.gif" width="16" height="14" alt="Checked"> Peer Reviewed</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Peer Review Process</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text drop-cap">
                                    The submitted manuscripts are first reviewed by an assigned editor. Every submitted manuscript which pass this step will be screened using iThenticate to identify any duplicated text or possible plagiarism before being sent to reviewers. This journal uses double-blind review process, involving in-country and international reviewers, to ensure the manuscript in review meets high quality standard. The acceptance criteria for all manuscripts submitted are the quality and originality of the research and its suitability with our readership. Final acceptance or rejection rests with the Editorial Board.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Publication Frequency</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text">
                                    This journal is published twice a year on April and October.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Open Access Policy</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text drop-cap">
                                    This journal is an open access journal which provides immediate, worldwide, barrier-free access to the full text of all published articles without charging readers or their institutions for access. Readers have the right to read, download, copy, distribute, print, search, or link to the full texts of all articles in Psychological Research on Urban Society.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Article Processing Charge</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text drop-cap">
                                    Every article submitted to Psychological Research on Urban Society <b>will not have</b> any 'Article Processing Charges'. This includes submitting, peer-reviewing, editing, publishing, maintaining and archiving, and allows immediate access to the full text versions of the articles.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Publication Ethics</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text drop-cap">
                                    This journal follows guidelines from <a href="https://publicationethics.org/core-practices">Committee on Publication Ethics (COPE)</a> in facing all aspects of publication ethics and, in particular, how to handle cases of research and publication misconduct. All articles in this journal involving human subjects should respect principles of research ethics as described in Declaration of Helsinki.
                                    <br>
                                    <br>
                                    PRoUSt adapts COPE to meet high quality standard of ethics for publisher, editors, authors, and reviewers. As an essential issue, publication ethics needs to be explained clearly to improve the quality of the research worldwide. In this part, we explain the standard for editors, authors, and reviewers. In addition, publisher don’t have right to interfere with the integrity of the contents and only support to publish in timely manner.
                                </p>
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
