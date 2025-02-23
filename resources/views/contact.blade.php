@extends('layout')
@section('content')

    <section class="header section-padding">
        <div class="background">&nbsp;</div>
        <div class="container">
            <div class="header-text">
                <h1>Contact Us</h1>
                <p>
                    Feel free to contact us!
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">
                <h1>HAVE ANY QUESTIONS?</h1>
                <p>Please contact us by sending a message using the form below:</p>
                {{ html()->span($errors->all(), ['class' => 'alert alert-danger'])->class('fa fa-eye') }}

                {{ html()->form('POST')->open() }}
                {{ html()->label('Subject') }}
                {{ html()->text('subject')->class('form-control')->placeholder('Enter your Subject here')->required() }}<br />
                {{ html()->label('Message') }}
                {{ html()->textarea('message')->class('form-control')->placeholder('Enter your Message here')->required() }}<br />
                {{ html()->submit('Send Message')->class('btn btn-primary') }}
                {{ html()->form()->close() }}
            </div>
        </section>
    </div>

@stop
