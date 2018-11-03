@extends('layouts.default')

@section('title', 'Chirp')
@section('description', 'Chirp helps you get there on time')

@section('head')
@endsection

@section('content')
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        <strong>Chirp</strong>
                    </h1>

                    <h2>Get There, On Time</h2>
    
                    <a 
                        href="#subscribe" 
                        class="btn btn-warning btn-lg mt-10"
                    >Sign Up</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row vert-spacing centered">
            <div class="col-lg-6 col-lg-offset-3">
                <h1>Commuting is Stressful</h1>
                
                <h3>Missed alarms, bad weather, traffic jams and road closures.. All of these things can really get our anxieties racing, especially when people are counting on us to be there on time</h3>

                <h3>Chirp takes the stress out of your daily commute by monitoring traffic conditions and notifying you of potential issues in advance</h3>
            </div>
        </div>
    
        <div class="row vert-spacing centered">
            <div class="col-lg-4">                
                <h4><i class="fas fa-bullhorn"></i> Smart Notifications</h4>
                <p>No more checking the local news, the weather, your navigation app..  No more checking anything! Chirp notifies you when its time to leave, when its time to get ready, even what route to take to get there stress-free</p>
            </div>
            
            <div class="col-lg-4">                
                <h4><i class="fas fa-mobile-alt"></i> No App Required</h4>
                <p>Tired of downloading yet another app to your already cluttered smartphone? With Chirp, you can sign up and get started with Chirp Notifications with no download required! You can always download the app later to unlock additional features</p>
            </div>
    
            <div class="col-lg-4">    
                <h4><i class="fas fa-user-secret"></i> No More Digital Surveillance</h4>
                <p>With Chirp, <u>we</u> notify <u>you</u> when its time to leave, so there is no reason to track your daily lives. In fact, we never track your location while using Chirp, unless you specifically allow us to do so.</p>
            </div>
        </div>
    </div>
    
    <div class="container mb-30">
        <div class="row vert-spacing centered">
            <hr>

            <div class="col-xs-12">
                <h1><a name="subscribe">Chirp is under active development</a></h1>
                <h3>Be the first to hear about new features!</h3>
                <br>
            </div>

            <div class="col-xs-12">
                <form 
                    action="/subscribe-email"
                    method="POST"
                    class="form-inline" 
                    role="form"
                >
                    <div class="form-group mr-15">
                        @csrf

                        <input 
                            type="email" 
                            name="email"
                            id="exampleInputEmail1" 
                            class="form-control"
                            placeholder="Enter your email address">
                    </div>
    
                    <button 
                        type="submit" 
                        class="btn btn-warning btn-lg"
                    >Subscribe</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('end_body')
@endsection
