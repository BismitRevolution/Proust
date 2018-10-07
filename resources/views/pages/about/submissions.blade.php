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
                        <a href="{{ route('about.submissions') }}" class="breadcrumb">Submissions</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card blue lighten-2">
                <div class="card-content white-text">
                    <span class="card-title"><b>Submissions</b></span><br>
                    <ul class="collapsible">
                        <li class="active">
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Online Submissions</b></h6>
                            </div>
                            <div class="collapsible-body white text-justify">
                                <p class="black-text">
                                    <b>Registration and login are required to submit items online and to check the status of current submissions.</b>
                                </p>
                                <br>
                                <p class="black-text">
                                    Already have a Username/Password for Psychological Research on Urban Society?
                                </p>
                                <br>
                                <a href="{{ route('login') }}" class="waves-effect waves-light btn-small"><i class="material-icons left">vpn_key</i>Go to Login</a>
                                <a href="#submission" class="waves-effect waves-light btn-small"><i class="material-icons left">note_add</i>Start New Submisson</a>
                                <br>
                                <br>
                                <p class="black-text">
                                    Need a Username/Password?
                                </p>
                                <br>
                                <a href="{{ route('register') }}" class="waves-effect waves-light btn-small"><i class="material-icons left">person_add</i>Go to Registration</a>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Author Guidelines</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <h5 class="black-text"><b>Article structure</b></h5>
                                <p class="black-text">
                                    There are four categories of submission:
                                </p><br>
                                <h7 class="black-text"><b>Original Research Paper</b></h7>
                                <p class="black-text">
                                    Present new empirical results contributing to theoretical, methodological, and/or applied advances (with a maximum length of 8,000 words, including references but excluding tables and figures). Articles longer than 8,000 words will be accepted on an occasional basis.
                                </p><br>
                                <h7 class="black-text"><b>Research Note</b></h7>
                                <p class="black-text">
                                    Similar to original articles but shorter in nature (with a maximum length of 3,000 words, including references but excluding tables and figures).
                                </p><br>
                                <h7 class="black-text"><b>Review Article</b></h7>
                                <p class="black-text">
                                    Summarize and integrate a clearly defined literature and make theoretical advances in this area (with a maximum length of 10,000 words, including references but excluding tables and figures). Articles longer than 10,000 words will be accepted on an occasional basis. Policy reviews fall in this category.
                                </p><br>
                                <h7 class="black-text"><b>Case Study</b></h7>
                                <p class="black-text">
                                    The article should present good descriptions of experiences from particular contexts that allow lessons to be learned. It need not be a successful case, lessons can be learnt from failure. An article containing a case study should address the following questions: what are the context variables that made it a success or a failure; how can we transfer lessons from this case elsewhere. Case studies should be under 6,000 words, including references but excluding tables and figures.
                                </p><br>
                                <h7 class="black-text"><b>Peer Review</b></h7>
                                <p class="black-text">
                                    This journal operates a double blind review process. All contributions will be initially assessed by the editor for suitability for the journal. Papers deemed suitable are then typically sent to a minimum of two independent expert reviewers to assess the scientific quality of the paper. The Editor is responsible for the final decision regarding acceptance or rejection of articles. The Editor's decision is final.
                                </p><br>

                                <h5 class="black-text"><b>Types of articles</b></h5>
                                <br>
                                <h7 class="black-text"><b>Introduction</b></h7>
                                <p class="black-text">
                                    State the objectives of the work and provide an adequate background, with extended theories that lay the foundation for further work.
                                </p><br>
                                <h7 class="black-text"><b>Methods</b></h7>
                                <p class="black-text">
                                    Provide sufficient detail to allow the work to be reproduced. Methods already published should be indicated by a reference: only relevant modifications should be described.
                                </p><br>
                                <h7 class="black-text"><b>Results</b></h7>
                                <p class="black-text">
                                    Results should be clear and concise.
                                </p><br>
                                <h7 class="black-text"><b>Discussion</b></h7>
                                <p class="black-text">
                                    This should explore the significance of the results of the work, not repeat them. A combined Results and Discussion section is often appropriate. Avoid extensive citations and discussion of published literature.
                                </p><br>
                                <h7 class="black-text"><b>Conclusions</b></h7>
                                <p class="black-text">
                                    The main conclusions of the study may be presented in a short Conclusions section, which may stand alone or form a subsection of a Discussion or Results and Discussion section.
                                </p><br>

                                <h5 class="black-text"><b>Title page information</b></h5>
                                <br>
                                <h7 class="black-text"><b>Title</b></h7>
                                <p class="black-text">
                                    Present new empirical results contributing to theoretical, methodological, and/or applied advances (with a maximum length of 8,000 words, including references but excluding tables and figures). Articles longer than 8,000 words will be accepted on an occasional basis.
                                </p><br>
                                <h7 class="black-text"><b>Author names and affiliations</b></h7>
                                <p class="black-text">
                                    Similar to original articles but shorter in nature (with a maximum length of 3,000 words, including references but excluding tables and figures).
                                </p><br>
                                <h7 class="black-text"><b>Corresponding author</b></h7>
                                <p class="black-text">
                                    Summarize and integrate a clearly defined literature and make theoretical advances in this area (with a maximum length of 10,000 words, including references but excluding tables and figures). Articles longer than 10,000 words will be accepted on an occasional basis. Policy reviews fall in this category.
                                </p><br>
                                <h7 class="black-text"><b>Present/permanent address</b></h7>
                                <p class="black-text">
                                    The article should present good descriptions of experiences from particular contexts that allow lessons to be learned. It need not be a successful case, lessons can be learnt from failure. An article containing a case study should address the following questions: what are the context variables that made it a success or a failure; how can we transfer lessons from this case elsewhere. Case studies should be under 6,000 words, including references but excluding tables and figures.
                                </p><br>

                                <h5 class="black-text"><b>Abstract</b></h5>
                                <br>
                                <p class="black-text">
                                    A concise and factual abstract is required. The abstract should state briefly the purpose of the research, the principal results and major conclusions. An abstract is often presented separately from the article, so it must be able to stand alone. For this reason, References should be avoided, but if essential, then cite the author(s) and year(s). Also, non-standard or uncommon abbreviations should be avoided, but if essential they must be defined at their first mention in the abstract itself. Abstracts must be 200 words or fewer.
                                </p><br>

                                <h5 class="black-text"><b>Keywords</b></h5>
                                <br>
                                <p class="black-text">
                                    Immediately after the abstract, provide a maximum of 6 keywords, using American spelling and avoiding general and plural terms and multiple concepts (avoid, for example, 'and', 'of'). Be sparing with abbreviations: only abbreviations firmly established in the field may be eligible. These keywords will be used for indexing purposes.
                                </p><br>

                                <h5 class="black-text"><b>Acknowledgements</b></h5>
                                <br>
                                <p class="black-text">
                                    Appropriate headings should be used to help organize the manuscript and should follow APA Style Manual guidelines. Typical headings for quantitative and qualitative research articles include review of literature, method, results, discussion, and references. For theoretical manuscripts, authors are encouraged to use headings that clarify the flow of the manuscript as well as assist the reader in understanding the content of the paper. Authors are encouraged to use up to two (2) additional levels of headings in accordance with APA Style Manual guidelines.
                                </p><br>

                                <h5 class="black-text"><b>Headings</b></h5>
                                <br>
                                <p class="black-text">
                                    Appropriate headings should be used to help organize the manuscript and should follow APA Style Manual guidelines. Typical headings for quantitative and qualitative research articles include review of literature, method, results, discussion, and references. For theoretical manuscripts, authors are encouraged to use headings that clarify the flow of the manuscript as well as assist the reader in understanding the content of the paper. Authors are encouraged to use up to two (2) additional levels of headings in accordance with APA Style Manual guidelines.
                                </p><br>

                                <h5 class="black-text"><b>Tables and figures</b></h5>
                                <br>
                                <p class="black-text">
                                    Tables should be titled and numbered at the top of the table. They should be numbered consecutively as they appear in the text. Tables should be clear, concise, and able to stand alone. Complete headings and footnotes should be included to clarify entries. Figures should be numbered consecutively, at the bottom of the figure, with a short and concise description. Fonts used in any table or figure should be compatible with that used in the text. All tables and figures should be referred to in the text with a notation made in the manuscript indicating approximately where each should be located. Illustrations should be of professional quality and supplied in EPS, tiff, or PDF formats.
                                </p><br>

                                <h5 class="black-text"><b>Permissions</b></h5>
                                <br>
                                <p class="black-text">
                                    The author(s) is responsible for providing copies of written permission for lengthy quotations or reprinted or adapted tables or figures. It is the responsibility of the author(s) to check with the publisher or copyright owner regarding specific requirements for permission to adapt or quote from copyrighted material. See the APA Style Manual for guidelines.
                                </p><br>

                                <h5 class="black-text"><b>Literature cited</b></h5>
                                <br>
                                <p class="black-text">
                                    All citations and references must be complete and accurate on submission and should follow the APA Style Manual. Papers cannot be reviewed if they have references that are found to be incomplete or inaccurate.
                                </p><br>

                                <h5 class="black-text"><b>For Authors</b></h5>
                                <br>
                                <p class="black-text">
                                    1.&nbsp; Author(s) affirm that the material has not been previously published and that they have not trans­ferred elsewhere any rights to the article.
                                    <br>2.&nbsp; Author(s) should ensure the originality of the work and they have properly cited others’ work in accordance of the references format.
                                    <br>3.&nbsp; Author(s) should not engage in plagiarism nor self-plagiarism.
                                    <br>4.&nbsp; Author(s) should ensure that they follow the authorship criteria that are taken from APA that is explained in instruction for author of PRoUSt.
                                    <br>5.&nbsp; The author(s) haven’t suggested any personal information that may make the identity of the patient recognizable in any forms of description part, photograph or pedigree. When the photographs of the patient were essential and indispensable as scientific information, the author(s) have received the consent in written form and have clearly stated it.
                                    <br>6.&nbsp; In case of experimenting on human, the authors have certified that the process of the research is in accordance with ethical standards of Helsinki declaration, domestic and foreign committees that preside over human experi­ment. If any doubts are raised whether the research was proceeded in accordance with the declaration, the authors should explain it. In case of experimenting on animals, the authors have certified that the authors had followed the domestic and foreign guideline related to experiment of animals in a laboratory.
                                    <br>7.&nbsp; Author(s) should give the editor the data and details of the work, if there are suspicions of data falsification or fabrication.
                                    <br>8.&nbsp; Authors of the journal should clarify everything that may cause conflict of interests such as work, research expenses, consul­tant expenses, and intellectual property.
                                </p><br>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Submission Preparation Checklist</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text drop-cap">
                                    As part of the submission process, authors are required to check off their submission's compliance with all of the following items, and submissions may be returned to authors that do not adhere to these guidelines.
                                    <br>
                                    <br>1.&nbsp; The submission has not been previously published, nor is it before another journal for consideration (or an explanation has been provided in Comments to the Editor).
                                    <br>2.&nbsp; The submission file is in Microsoft Word (.doc or .docx) document file format.
                                    <br>3.&nbsp; Where available, URLs for the references have been provided.
                                    <br>4.&nbsp; The text is double-spaced; uses Times New Roman 12-point font; employs italics, rather than underlining (except with URL addresses); and all illustrations, figures, and tables are placed at the end of the manuscript after the reference list. Cite each table at the most appropriate point in the text.
                                    <br>5.&nbsp; The text adheres to the stylistic and bibliographic requirements outlined in the Author Guidelines, which is found in About the Journal.
                                    <br>6.&nbsp; This journal employs double-blind review process, which means that both the reviewer and author identities are concealed from both parties throughout the review process.
                                </p><br>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Copyright Notice</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text">
                                    Authors who publish with this journal agree to the following terms:
                                    <br>
                                    <br>1.&nbsp; Authors retain copyright and grant the journal right of first publication with the work simultaneously licensed under a <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution License</a> that allows others to share the work with an acknowledgement of the work's authorship and initial publication in this journal.
                                    <br>2.&nbsp; Authors are able to enter into separate, additional contractual arrangements for the non-exclusive distribution of the journal's published version of the work (e.g., post it to an institutional repository or publish it in a book), with an acknowledgement of its initial publication in this journal.
                                    <br>3.&nbsp; Authors are permitted and encouraged to post their work online (e.g., in institutional repositories or on their website) prior to and during the submission process, as it can lead to productive exchanges, as well as earlier and greater citation of published work (<a href="http://opcit.eprints.org/oacitation-biblio.html">See The Effect of Open Access</a>).
                                </p><br>
                                <img src="https://licensebuttons.net/l/by/3.0/88x31.png" alt="" width="88" height="31">
                                <br><br>
                                <p class="black-text">
                                    This work is licensed under a <a href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License.</a>
                                </p><br>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Privacy Statement</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text drop-cap">
                                    The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made available for any other purpose or to any other party.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header white-text text-upper red lighten-1">
                                <h6><b>Author Fees</b></h6>
                            </div>
                            <div class="collapsible-body white link-anim text-justify">
                                <p class="black-text">
                                    This journal charges the following author fees.
                                    <br>
                                    <br>
                                    <b>Article Submission:</b> 0.00 (IDR)
                                    <br>
                                    Authors are not required to pay an Article Submission Fee as part of the submission process to contribute to review costs.
                                    <br>
                                    <br>
                                    <b>Article Publication:</b> 0.00 (IDR)
                                    <br>
                                    If this paper is accepted for publication, you will not be asked to pay an Article Publication Fee to cover publications costs.
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
