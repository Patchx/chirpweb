<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
        
    <title>Chirp</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link type="text/css" rel="stylesheet" href="/css/app.css">

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
    
                <a class="navbar-brand" href="/"><b>Chirp</b></a>
            </div>
    
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
        
    <div class="container mb-30">
        <div class="row vert-spacing centered">
            <div class="col-xs-12 mt-20">
                <h1>Thanks for Subscribing</h1>
                <h3>Stay tuned for good things to come</h3>
                <br>
            </div>
        </div>
    </div>
    
    <div class="container">
        <hr>
    
        <p class="centered">
            <span>Copyright ChirpMyRide.com {{now()->year}}</span><br>
            <span>Design Modified from BlackTie.co - Attribution License 3.0 - 2013</span>
        </p>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
