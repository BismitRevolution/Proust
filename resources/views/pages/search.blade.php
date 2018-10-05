@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/search.css') }}"> -->
@endsection

@section('content')
<div class="row">
    <div class="col s12">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input id="search-query" type="text" class="validate">
                    <label for="search-query">Search</label>
                </div>
                <!-- <a class="col s4 input-field waves-effect waves-light btn-large">SEARCH</a> -->
            </div>

            <a class="input-field waves-effect waves-light btn-large">SHOW ADVANCED SEARCH</a>

            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12 m6">
                        <input id="search-author" type="text" class="validate">
                        <label for="search-author">Author</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="search-title" type="text" class="validate">
                        <label for="search-title">Title</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="search-abstract" type="text" class="validate">
                        <label for="search-abstract">Abstract</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="search-fulltext" type="text" class="validate">
                        <label for="search-fulltext">Full Text</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="search-supplementary-files" type="text" class="validate">
                        <label for="search-supplementary-files">Supplementary File(s)</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="search-date-start" type="date" class="validate">
                        <label for="search-date-start">From</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="search-date-stop" type="date" class="validate">
                        <label for="search-date-stop">To</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input id="search-discipline" type="text" class="validate">
                        <label for="search-discipline">Discipline(s)</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="search-keyword" type="text" class="validate">
                        <label for="search-keyword">Keyword(s)</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="search-type" type="text" class="validate">
                        <label for="search-type">Type (method/approach)</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="search-coverage" type="text" class="validate">
                        <label for="search-coverage">Coverage</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="search-index" type="text" class="validate">
                        <label for="search-index">All Index Term Fields</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <a class="input-field waves-effect waves-light btn-large" style="width: 100%;">SEARCH</a>
                </div>
            </div>
        </form>
    </div>

    <div class="col s12">
        <table class="table-responsive highlight">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Issue</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>-</td>
                    <td>No Result</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col s12" style="padding: 20px 10px;">
        <div class="card white">
            <div class="card-content blue-grey-text text-darken-4">
                <span class="card-title">Search Tips</span>
                <!-- <p>Keep yourself updates!</p> -->
            </div>
            <div class="collection">
                <a href="#!" class="collection-item">Search terms are case-insensitive</a>
                <a href="#!" class="collection-item">Common words are ignored</a>
                <a href="#!" class="collection-item">By default only articles containing all terms in the query are returned (i.e., AND is implied)</a>
                <a href="#!" class="collection-item">Combine multiple words with OR to find articles containing either term; e.g., education OR research</a>
                <a href="#!" class="collection-item">Use parentheses to create more complex queries; e.g., archive ((journal OR conference) NOT theses)</a>
                <a href="#!" class="collection-item">Search for an exact phrase by putting it in quotes; e.g., "open access publishing"</a>
                <a href="#!" class="collection-item">Exclude a word by prefixing it with - or NOT; e.g. online -politics or online NOT politics</a>
                <a href="#!" class="collection-item">Use * in a term as a wildcard to match any sequence of characters; e.g., soci* morality would match documents containing "sociological" or "societal"</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/search.js') }}"></script> -->
@endsection
