@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Submission</span>
                    <p>Valian ganteng tiada lawan.</p>
                </div>
            </div>
            <div class="card cyan darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Online Submission</span>
                    <p class="paragraph"><b>Registration and login are required to submit items online and to check
                       the status of current submissions.</b></p>
                    <p class="paragraph">Already have a Username/Password for Psychological Research on Urban Society?</p>
                    <div class="" style="margin: 10px;">
                        <a href="{{ route('login') }}" class="waves-effect waves-light btn-large">
                            <i class="material-icons right">exit_to_app</i>Go to Login
                        </a>
                    </div>
                    <p class="paragraph">Need a Username/Password?</p>
                    <div class="" style="margin: 10px;">
                        <a href="{{ route('register') }}" class="waves-effect waves-light btn-large">
                            <i class="material-icons right">create</i>Register
                        </a>
                    </div>
                </div>
            </div>
            <div class="card cyan darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Author Guidelines</span>
                    <p class="paragraph" style="font-weight:bold; font-size:small;">Types of Articles</p>
                    <p class="paragraph">There are four categories of submission:</p>
                    <p class="paragraph" style="font-weight:bold;">Original Research Papers</p>
                    <p class="paragraph">present new empirical results contributing to theoretical,
                        methodological, and/or applied advances (with a maximum length of 8,000 words,
                        including references but excluding tables and figures). Articles longer than
                        8,000 words will be accepted on an occasional basis.
                    </p>
                    <p class="paragraph" style="font-weight:bold;">Research Notes</p>
                    <p class="paragraph">similar to original articles but shorter in nature (with a
                        maximum length of 3,000 words, including references but excluding tables
                        and figures).</p>
                    <p class="paragraph" style="font-weight:bold;">Review Articles</p>
                    <p class="paragraph">summarize and integrate a clearly defined literature and make
                        theoretical advances in this area (with a maximum length of 10,000 words,
                        including references but excluding tables and figures). Articles longer than
                        10,000 words will be accepted on an occasional basis. Policy reviews fall
                        in this category.</p>
                    <p class="paragraph" style="font-weight:bold;">Case Studies</p>
                    <p class="paragraph">present good descriptions of experiences from particular
                         contexts that allow lessons to be learned. It need not be a successful case,
                         lessons can be learnt from failure. An article containing a case study should
                         address the following questions: what are the context variables that made it a
                         success or a failure; how can we transfer lessons from this case elsewhere.
                         Case studies should be under 6,000 words, including references but excluding
                         tables and figures.</p>
                    <p class="paragraph" style="font-weight:bold;">Peer review</p>
                    <p class="paragraph">This journal operates a double blind review process.
                        All contributions will be initially assessed by the editor for suitability for the
                        journal. Papers deemed suitable are then typically sent to a minimum of two
                        independent expert reviewers to assess the scientific quality of the paper.
                        The Editor is responsible for the final decision regarding acceptance or
                        rejection of articles. The Editor's decision is final. </p>
                    <p class="paragraph" style="font-weight:bold; font-size:small;">Article Structure</p>
                    <p class="paragraph" style="font-weight:bold;">Introduction</p>
                    <p class="paragraph">State the objectives of the work and provide an adequate background,
                        with extended theories that lay the foundation for further work.</p>
                    <p class="paragraph" style="font-weight:bold;">Methods</p>
                    <p class="paragraph">Provide sufficient detail to allow the work to be reproduced.
                        Methods already published should be indicated by a reference: only relevant
                        modifications should be described.</p>
                    <p class="paragraph" style="font-weight:bold;">Results</p>
                    <p class="paragraph">Results should be clear and concise.</p>
                    <p class="paragraph" style="font-weight:bold;">Discussion</p>
                    <p class="paragraph">This should explore the significance of the results of the work
                        , not repeat them. A combined Results and Discussion section is often appropriate.
                        Avoid extensive citations and discussion of published literature.</p>
                    <p class="paragraph" style="font-weight:bold;">Conclusions</p>
                    <p class="paragraph">The main conclusions of the study may be presented in a short
                        Conclusions section, which may stand alone or form a subsection of a Discussion
                        or Results and Discussion section.</p>
                    <p class="paragraph"></p>
                    <p style="font-weight:bold;">Title page information</p>
                    <ul class="browser-default">
                        <li><b><em>Title</em></b>. Concise and informative. Titles are often used in information-retrieval systems.
                            Avoid abbreviations and formulae where possible.</li>
                        <li><b><em>Author names and affiliations</em></b>. Please clearly indicate the given name(s) and family
                            name(s) of each author and check that all names are accurately spelled. Present the
                            authors' affiliation addresses (where the actual work was done) below the names.
                            Indicate all affiliations with a lower-case superscript letter immediately after
                            the author's name and in front of the appropriate address. Provide the full postal
                            address of each affiliation, including the country name and, if available, the e-mail
                            address of each author.</li>
                        <li><b><em>Corresponding author</em></b>. Clearly indicate who will handle correspondence at all stages of
                            refereeing and publication, also post-publication. <b>Ensure that the e-mail address is
                            given and that contact details are kept up to date by the corresponding author</b>.</li>
                        <li><b><em>Present/permanent address</em></b>. If an author has moved since the work described in the
                            article was done, or was visiting at the time, a 'Present address' (or 'Permanent
                            address') may be indicated as a footnote to that author's name. The address at which
                            the author actually did the work must be retained as the main, affiliation address.
                            Superscript Arabic numerals are used for such footnotes.</li>
                    </ul>
                    <p style="font-weight:bold;">Abstract</p>
                    <p class="paragraph">A concise and factual abstract is required. The abstract should state
                        briefly the purpose of the research, the principal results and major conclusions.
                        An abstract is often presented separately from the article, so it must be able to stand
                        alone. For this reason, References should be avoided, but if essential, then cite the
                        author(s) and year(s). Also, non-standard or uncommon abbreviations should be avoided,
                        but if essential they must be defined at their first mention in the abstract itself.
                        Abstracts must be 200 words or fewer. </p>
                    <p style="font-weight:bold;">Keywords</p>
                    <p class="paragraph">Immediately after the abstract, provide a maximum of 6 keywords, using
                        American spelling and avoiding general and plural terms and multiple concepts (avoid,
                        for example, 'and', 'of'). Be sparing with abbreviations: only abbreviations firmly
                        established in the field may be eligible. These keywords will be used for indexing purposes.</p>
                    <p style="font-weight:bold;">Acknowledgements</p>
                    <p class="paragraph">Collate acknowledgements in a separate section at the end of the article
                        before the references and do not, therefore, include them on the title page, as a footnote
                        to the title or otherwise. List here those individuals who provided help during the research
                        (e.g., providing language help, writing assistance or proof reading the article, etc.).</p>
                    <p style="font-weight:bold;">Headings</p>
                    <p class="paragraph">Appropriate headings should be used to help organize the manuscript and
                        should follow <em>APA Style Manual</em> guidelines. Typical headings for quantitative and qualitative
                        research articles include review of literature, method, results, discussion, and references.
                        For theoretical manuscripts, authors are encouraged to use headings that clarify the flow of
                        the manuscript as well as assist the reader in understanding the content of the paper. Authors
                        are encouraged to use up to two (2) additional levels of headings in accordance with <em>APA Style
                        Manual</em> guidelines.</p>
                    <p style="font-weight:bold;">Tables and Figures</p>
                    <p class="paragraph">Tables should be titled and numbered at the top of the table. They should
                        be numbered consecutively as they appear in the text. Tables should be clear, concise, and
                        able to stand alone. Complete headings and footnotes should be included to clarify entries.
                        Figures should be numbered consecutively, at the bottom of the figure, with a short and
                        concise description. Fonts used in any table or figure should be compatible with that
                        used in the text. All tables and figures should be referred to in the text with a notation
                        made in the manuscript indicating approximately where each should be located. Illustrations
                        should be of professional quality and supplied in EPS, tiff, or PDF formats.</p>
                    <p style="font-weight:bold;">Permissions</p>
                    <p class="paragraph">The author(s) is responsible for providing copies of written permission for
                        lengthy quotations or reprinted or adapted tables or figures. It is the responsibility of
                        the author(s) to check with the publisher or copyright owner regarding specific requirements
                        for permission to adapt or quote from copyrighted material. See the <em>APA Style Manual</em> for
                        guidelines.</p>
                    <p style="font-weight:bold;">Literature Cited</p>
                    <p class="paragraph">All citations and references must be complete and accurate on submission and
                        should follow the <em>APA Style Manual</em>. Papers cannot be reviewed if they have references that
                        are found to be incomplete or inaccurate.</p>
                    <p style="font-weight:bold;">For Authors</p>
                    <ol class="browser-default">
                        <li>Author(s) affirm that the material has not been previously published and that they
                            have not trans­ferred elsewhere any rights to the article.</li>
                        <li>Author(s) should ensure the originality of the work and they have properly cited
                            others’ work in accordance of the references format.</li>
                        <li>Author(s) should not engage in plagiarism nor self-plagiarism.</li>
                        <li>Author(s) should ensure that they follow the authorship criteria that are taken
                            from APA that is explained in instruction for author of PRoUSt.</li>
                        <li>The author(s) haven’t suggested any personal information that may make the identity
                            of the patient recognizable in any forms of description part, photograph or pedigree.
                            When the photographs of the patient were essential and indispensable as scientific
                            information, the author(s) have received the consent in written form and have clearly
                            stated it.</li>
                        <li>In case of experimenting on human, the authors have certified that the process of
                            the research is in accordance with ethical standards of Helsinki declaration,
                            domestic and foreign committees that preside over human experi­ment. If any doubts
                            are raised whether the research was proceeded in accordance with the declaration,
                            the authors should explain it. In case of experimenting on animals, the authors
                            have certified that the authors had followed the domestic and foreign guideline
                            related to experiment of animals in a laboratory.</li>
                        <li>Author(s) should give the editor the data and details of the work, if there are
                            suspicions of data falsification or fabrication.</li>
                        <li>Authors of the journal should clarify everything that may cause conflict of interests
                            such as work, research expenses, consul­tant expenses, and intellectual property.</li>
                    </ol>
                </div>
            </div>
            <div class="card cyan darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Submission Preparation Checklist</span>
                    <p>As part of the submission process, authors are required to check
                        off their submission's compliance with all of the following items,
                       and submissions may be returned to authors that do not adhere to
                       these guidelines.</p>
                       <ol class="browser-default">
                           <li>The submission has not been previously published, nor is it before another journal
                               for consideration (or an explanation has been provided in Comments to the Editor).</li>
                           <li>The submission file is in Microsoft Word (.doc or .docx) document file format.</li>
                           <li>Where available, URLs for the references have been provided.</li>
                           <li>The text is double-spaced; uses Times New Roman 12-point font; employs italics,
                               rather than underlining (except with URL addresses); and all illustrations, figures,
                               and tables are placed at the end of the manuscript after the reference list. Cite
                               each table at the most appropriate point in the text.</li>
                           <li>The text adheres to the stylistic and bibliographic requirements outlined in the
                               Author Guidelines, which is found in About the Journal.</li>
                           <li>This journal employs double-blind review process, which means that both the reviewer
                               and author identities are concealed from both parties throughout the review process.</li>
                       </ol>
                </div>
            </div>
            <div class="card cyan darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Copyright Notice</span>
                    <p class="paragraph">Authors who publish with this journal agree to the following terms:</p>
                    <ol class="browser-default">
                        <li>Authors retain copyright and grant the journal right of first publication with the work
                            simultaneously licensed under a <a href="https://creativecommons.org/licenses/by/4.0/" style="color: #ffb74d">
                                Creative Commons Attribution License</a>
                            that allows others to share the work with an acknowledgement of the work's authorship
                            and initial publication in this journal.</li>
                        <li>Authors are able to enter into separate, additional contractual arrangements for the
                            non-exclusive distribution of the journal's published version of the work (e.g., post it
                            to an institutional repository or publish it in a book), with an acknowledgement of its
                            initial publication in this journal.</li>
                        <li>Authors are permitted and encouraged to post their work online (e.g., in institutional
                            repositories or on their website) prior to and during the submission process, as it can
                            lead to productive exchanges, as well as earlier and greater citation of published work
                            (See <a href="http://opcit.eprints.org/oacitation-biblio.html" style="color: #ffb74d" target="_new">The Effect
                            of Open Access</a>).</li>
                    </ol>
                    <p class="paragraph">
                        <im src="https://licensebuttons.net/l/by/3.0/88x31.png" alt="" width="88" height="31">
                    </p>
                    <p class="paragraph">This work is licensed under a
                        <a class="card-action" href="http://creativecommons.org/licenses/by/4.0/" style="color: #ffb74d" rel="license">Creative Commons Attribution 4.0 International License</a>.
                    </p>
                </div>
            </div>
            <div class="card cyan darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Privacy Statement</span>
                    <p>The names and email addresses entered in this journal
                     site will be used exclusively for the stated purposes of
                     this journal and will not be made available for any other
                     purpose or to any other party.</p>
                </div>
            </div>
            <div class="card cyan darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Author Fees</span>
                    <p class="paragraph">This journal charges the following author fees.</p>
                    <p class="paragraph">
                       Article Submission: 0.00 (IDR)
                       Authors are not required to pay an Article Submission Fee
                       as part of the submission process to contribute to review costs.
                    </p>
                    <p class="paragraph">
                       Article Publication: 0.00 (IDR)
                       If this paper is accepted for publication, you will not be
                       asked to pay an Article Publication Fee to cover publications costs.
                   </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
