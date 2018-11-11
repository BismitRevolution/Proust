@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/browse.css') }}">
@endsection

@section('content')
<div>
    <div class="row">
        <nav>
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="/" class="breadcrumb">Home</a>
                    <a href="issue" class="breadcrumb">Issue Title</a>
                    <a href="detail" class="breadcrumb">Content detail</a>
            </div>
        </nav>
    </div>
    <div class="row">
        <h4>Psychotic Experiences, Depressive Symptoms, 
            Anxiety Symptoms and Common Mental Health Risk Factors of Urban 
            and Non-Urban Dwellers in Indonesia</h4>
        <p class="italic">Edo S Jaya, Sri Wulandari</p>

    </div>
    <div class="row">
        <h5>Abstract</h5>
        <p>The prevalence of risk factors and symptoms of mental-health problems has been found to be higher in urban than non-urban areas. However, most studies are conducted in developed countries, and we are unsure whether a similar pattern can be observed in a developing country. 
            In the present study, we compared rates of common mental health risk-factors and symptoms of psychosis, depression, and anxiety between urban and non-urban residents. 
            A community sample of 844 participants completed an anonymous cross-sectional online survey. T-tests and Mann-Whitney U Test were used to compare participants’ scores on mental health-risk factors and symptoms based on their area of residence.
              Our analyses showed that participants living in urban areas experienced a higher frequency of loneliness, being bullied at home, positive symptoms of psychosis, depression, and stronger beliefs of negative schemas. 
              These results reveal a similar pattern of higher frequencies of risk factors and symptoms of mental-health problems among people living in urban areas was found in a developing country. 
              Urban living may be linked exposure to mental health risk factors and thus, increase the risk of having symptoms of mental health problems. 
            Future research should investigate this mechanism in a longitudinal data.</p>

        <h5>Full Text</h5>
        <div id="button">
            <a href="browse"class="waves-effect waves-light btn">PDF</a>
        </div>
        
    </div>
</div>
@endsection