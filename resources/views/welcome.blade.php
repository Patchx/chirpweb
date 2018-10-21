<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
        
    <title>Chirp</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/flatty_theme.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button 
                    type="button" 
                    class="navbar-toggle" 
                    data-toggle="collapse" 
                    data-target=".navbar-collapse"
                >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
    
                <a class="navbar-brand" href="#"><b>Chirp</b></a>
            </div>
    
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Signup</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        <strong>Chirp</strong>
                    </h1>

                    <h2>Get There, On Time</h2>
    
                    <form class="form-inline mt-25" role="form">
                        <div class="form-group mr-10">
                            <input 
                                type="email" 
                                class="form-control" 
                                id="exampleInputEmail1" 
                                placeholder="Enter your email address">
                        </div>
    
                        <button 
                            type="submit" 
                            class="btn btn-warning btn-lg"
                        >Invite Me!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row vert-spacing centered">
            <div class="col-lg-6 col-lg-offset-3">
                <h1>Your Landing Page<br />Looks Wonderful Now.</h1>
                
                <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
            </div>
        </div>
    
        <div class="row vert-spacing centered">
            <div class="col-lg-4">                
                <h4>1 - Browser Compatibility</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            </div>
            
            <div class="col-lg-4">                
                <h4>2 - Email Campaigns</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            </div>
    
            <div class="col-lg-4">    
                <h4>3 - Gather Your Notes</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row vert-spacing centered">
            <hr>

            <div class="col-lg-6 col-lg-offset-3">
                <h1>Stay Updated!</h1>
                <h3>Be the first to hear about new features</h3>
                <br>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <form class="form-inline" role="form">
                    <div class="form-group mr-15">
                        <input 
                            type="email" 
                            class="form-control" 
                            id="exampleInputEmail1" 
                            placeholder="Enter your email address">
                    </div>
    
                    <button 
                        type="submit" 
                        class="btn btn-warning btn-lg"
                    >Invite Me!</button>
                </form>
            </div>
    
            <div class="col-lg-3"></div>
        </div>
    </div>
    
    <div class="container">
        <hr>
    
        <p class="centered">Design Modified from BlackTie.co - Attribution License 3.0 - 2013</p>
    </div>
</body>
</html>
