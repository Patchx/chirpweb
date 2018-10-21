<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chirp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open&#43;Sans:400,600" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://themes.gohugo.io//theme/hugo-fresh/css/style.min.0716df82c59b46eb0b19ff92fab552fc16c047bf08587a79e580f97e70330158.css">
    <link rel="stylesheet" type="text/css" href="https://themes.gohugo.io/css/icons.css">
</head>

<body>

    <div id="preloader" style="display:none">
        <div id="status"></div>
    </div>

    
    <section class="hero is-fullheight is-default is-bold">
        <nav id="navbar" class="navbar is-fresh is-transparent" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://cssninja.io">Chirp</a>
                </div>

                <div id="cloned-navbar-menu" class="navbar-menu is-fixed">
                    <div class="navbar-end">
                        <a href="https://themes.gohugo.io//theme/hugo-fresh/" class="navbar-item is-secondary">
                            Features
                        </a>

                        <a href="https://themes.gohugo.io//theme/hugo-fresh/" class="navbar-item is-secondary">
                            Pricing
                        </a>

                        <a href="https://themes.gohugo.io//theme/hugo-fresh/" class="navbar-item is-secondary">
                            Log in
                        </a>

                        <a href="https://themes.gohugo.io//theme/hugo-fresh/" class="navbar-item">
                            <span class="button signup-button rounded secondary-btn raised">
                                Sign up
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
  
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-5">
                        <figure class="image is-4by3" style="border:2px solid black">
                            <p>Image here</p>
                        </figure>
                    </div>

                    <div class="column is-5 is-offset-1 landing-caption">
                        <h1 class="title is-1 is-bold is-spaced">
                            Chirp
                        </h1>
                    
                        <h2 class="subtitle is-5 is-muted">
                            Lorem ipsum sit dolor amet is dummy text used by the typography industry
                        </h2>
                    
                        <p>
                            <a class="button cta rounded primary-btn raised" href="#">
                                Get started
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section section-feature-grey is-medium">
        <div class="container">
            <div class="title-wrapper has-text-centered">
                <h2 class="title is-2">Features</h2>
                <div class="divider is-centered"></div>
            </div>

            <div class="content-wrapper">
                <div class="columns">
                    <div class="column is-one-third">
                        <div class="feature-card is-bordered has-text-centered revealOnScroll delay-1" data-animation="fadeInLeft">
                            <div class="card-title">
                                <h4>App builder</h4>
                            </div>
                
                            <div class="card-icon">
                                <img src="https://themes.gohugo.io//theme/hugo-fresh/images/illustrations/icons/mouse-globe.svg">
                            </div>
                
                            <div class="card-text">
                                <p>This is some explanatory text that is on two rows</p>
                            </div>
                
                            <div class="card-action">
                                <a href="https://themes.gohugo.io//theme/hugo-fresh/" class="button btn-align-md accent-btn raised">Free trial</a>
                            </div>
                        </div>
                    </div>
            
                    <div class="column is-one-third">
                        <div class="feature-card is-bordered has-text-centered revealOnScroll delay-1" data-animation="fadeInLeft">
                            <div class="card-title">
                                <h4>Cloud integration</h4>
                            </div>
                
                            <div class="card-icon">
                                <img src="https://themes.gohugo.io//theme/hugo-fresh/images/illustrations/icons/laptop-cloud.svg">
                            </div>
                
                            <div class="card-text">
                                <p>This is some explanatory text that is on two rows</p>
                            </div>
                
                            <div class="card-action">
                                <a href="https://themes.gohugo.io//theme/hugo-fresh/" class="button btn-align-md accent-btn raised">Get started</a>
                            </div>
                        </div>
                    </div>
            
                    <div class="column is-one-third">
                        <div class="feature-card is-bordered has-text-centered revealOnScroll delay-1" data-animation="fadeInLeft">
                            <div class="card-title">
                                <h4>Add-ons &amp; plugins</h4>
                            </div>
                
                            <div class="card-icon">
                                <img src="https://themes.gohugo.io//theme/hugo-fresh/images/illustrations/icons/plug-cloud.svg">
                            </div>
                
                            <div class="card-text">
                                <p>This is some explanatory text that is on two rows</p>
                            </div>
                
                            <div class="card-action">
                                <a href="https://themes.gohugo.io//theme/hugo-fresh/" class="button btn-align-md accent-btn raised">Get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section section-light-grey is-medium">
  <div class="container">
    <div class="title-wrapper has-text-centered">
      <h2 class="title is-2 is-spaced">Drop us a line or two </h2>
      <div class="divider is-centered"></div>
    </div>

    <div class="content-wrapper">
      <div class="columns">
        <div class="column is-6 is-offset-3">
          <form>
            <div class="columns is-multiline">
              <div class="column is-6">
                <input class="input is-medium" type="text" placeholder="Enter your name">
              </div>
              <div class="column is-6">
                <input class="input is-medium" type="email" placeholder="Enter your email address">
              </div>
              <div class="column is-12">
                <textarea class="textarea" rows="10" placeholder="Write someting..."></textarea>
              </div>
              <div class="form-footer has-text-centered mt-10">
                <button class="button cta is-large primary-btn raised is-clear">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
    
<footer class="footer footer-dark">
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="footer-logo">
          <p>Chirp</p>
        </div>
      </div>
      <div class="column">
        <div class="footer-column">
          <div class="footer-header">
              <h3>Product</h3>
          </div>
          <ul class="link-list">
            <li>
              <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                Discover features
              </a>
            </li>
            <li>
              <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                Why choose our product?
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="column">
        <div class="footer-column">
          <div class="footer-header">
            <h3>Blogroll</h3>
          </div>
          <ul class="link-list">
            <li>
              <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                Latest news
              </a>
            </li>
            <li>
              <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                Tech articles
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="column">
        <div class="footer-column">
          <div class="footer-header">
            <h3>Follow Us</h3>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="level-item" href="https://github.com/lucperkins/github-fresh">
                  <span class="icon"><i class="fa fa-github"></i></span>
                </a>
                <a class="level-item" href="https://dribbble.com/#">
                  <span class="icon"><i class="fa fa-dribbble"></i></span>
                </a>
                <a class="level-item" href="https://facebook.com/#">
                  <span class="icon"><i class="fa fa-facebook"></i></span>
                </a>
                <a class="level-item" href="https://twitter.com/lucperkins">
                  <span class="icon"><i class="fa fa-twitter"></i></span>
                </a>
                <a class="level-item" href="https://bitbucket.org/#">
                  <span class="icon"><i class="fa fa-bitbucket"></i></span>
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>    

</body>
</html>
