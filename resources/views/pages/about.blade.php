@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container">
        <h2>What's {{ config('app.name') }} ?</h2>
        <p>{{ config('app.name') }} is a clone app of <a href="https://laramap.com" target="_blank">laramap.com</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"></i> This app has been built for learning purposes.</strong>
                </p>
            </div>
        </div>

        <p>Feel free to help improve the <a href="https://github.com/dev-promtheus98/laracarte">source code</a>.</p>

        <hr>

        <h2>What's Laramap ?</h2>
        <p>Laramap is the website by which {{ config('app.name') }} is inspired :).</p>
        <p>More info <a href="https://laramap.com">here</a>.</p>

        <hr>

        <h2>Which tools and services are used in {{ config('app.name') }} ?</h2>
        <p>
            Basically it's built on laravel & bootstrap. But there's a bunch of services used for email
            and others sections.
        </p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon s3</li>
            <li>Mandrill</li>
            <li>Google Map</li>
            <li>Gravatar</li>
            <li>Anthony Martin's Geolocation Package</li>
            <li>Martin Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>


@endsection
