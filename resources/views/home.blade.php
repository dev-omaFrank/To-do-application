@extends('layout')
@section('content')
    <section class="header section-padding">
        <div class="background">&nbsp;</div>
        <div class="container">
            <div class="header-text">
                <h1>TODO Application: Organization made easy</h1>
                <p>
                    Fastest way to organize activities on the web
                    <br /> using Laravel framework!
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">
                <h1><span class="grey">WELCOME TO</span> OUR HOME</h1>
                <p>
                    Wanna learn Laravel? You've found a great way to start with.
                </p>
            </div>

            <div class="jumbotron text-center">
                <div class="row">
                    <div class="showcase-box col-md-4">
                        <div class="showcase-item">
                            <img src="{{ asset('img/icon1.webp') }}" style="height: 80%;" alt="">
                            <p>The most comprehensive to-do list application</p>
                        </div>

                    </div>
                    <div class="showcase-box col-md-4">
                        <div class="showcase-item">
                            <img src="{{ asset('img/icon2.png') }}" style="height: 80%;" alt="">
                            <p>Organizing your activities while learning</p>
                        </div>
                    </div>
                    <div class="showcase-box col-md-4">
                        <div class="showcase-item">
                            <img src="{{ asset('img/icon3.jpg') }}" style="height: 80%;" alt="">
                            <p>Its not just a user, its a great community</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
