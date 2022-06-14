
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Track it |  BeachParty</title>
    <!-- Plugins CSS -->
    <link href="{{asset('tracking/assets/v3/css/plugins.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('tracking/assets/v3/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('tracking/assets/v3/fonts/TCM-reg_____.TTF')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('tracking/assets/v3/images/becha_partylogo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
</head>

<style>

.tracker-form .btn {
  z-index: 2;
  color: #000 !important;
  overflow: hidden;
   opacity: 1;
   line-height: 1.42;
    text-decoration: none;
    text-align: center;
     white-space: normal;
  font-size: 13px;
  text-transform: uppercase;
  font-family: 'Tw Cen MT';
  letter-spacing: .3em;
  display: inline-block;
  bottom: 10px;
  right: 10px;
  left: 10px;
  padding: 13px 30px;
 margin: 0;
 width: auto;
 min-width: 90px;
vertical-align: middle;
cursor: pointer;
 border: 1px solid transparent;
 user-select: none;
-webkit-appearance: none;
 border-radius: var(--buttonRadius);
  background: #fff;
}
    .tooltip {
        position: relative;
        display: inline-block;
        opacity: 1;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 300px;
        background-color: black;
        color: #fff !important;
        text-align: center;
        border-radius: 6px;
        padding: 5px 5px;
        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

    .button {
border-radius: none;
border-radius: 0%;
        background-color: black; /* Green */
  color: white;
  padding: 15px 32px;
  text-align: center;
  overflow: hidden;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.last-btn a {
    z-index: 2;
  color: #fff !important;
  overflow: hidden;
  opacity: 1;
  line-height: 1.42;
  text-decoration: none;
  text-align: center;
  white-space: normal;
  font-size: 13px;
  text-transform: uppercase;
  font-family: 'Tw Cen MT';
  letter-spacing: .3em;
  display: inline-block;
   padding: 11px 20px;
 margin: 0;
 width: auto;
 min-width: 90px;
vertical-align: middle;
cursor: pointer;
 border: 1px solid transparent;
 user-select: none;
-webkit-appearance: none;
 border-radius: var(--buttonRadius);
  background: #111111;

}
.last-btn-main {
    text-align: center;
    margin-bottom: 10px;
    margin-top: 10px;
    padding-bottom: 70px;

}
  a:hover {
  color: white;
  /* background-color: black; */
  text-decoration: relative;
}

.header-two
{
    font-family: Georgia, serif;

    padding: 50px;
    font-size: 3.875em; /* 30px/16=1.875em */
    text-align: center;
}

.header
{
    padding: 50px;
    text-align: center;
}
.tracker-section
{
    background-color: #fff;
}
h3.tracker-heading {
  font-size: 22px;
  color: #fff;
  margin-bottom: 8px;
  text-transform: uppercase;
  padding-left: 20px;
}
.tracker-form .btn{
padding: 10px 30px;
}
.top-banner {
    background-color: #000;
    color: #fff;
    text-align: center;
    font-family: 'Tw Cen MT';
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: .2em;
    font-size: -0.1em;
    padding: 5px;
}
.footer-col1 h4 {
    font-size: 12px;
    font-family: 'Tw Cen MT';
    letter-spacing: 2px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.footer__collapsible {
    font-size: 13px;
    font-family: 'Tw Cen MT';
}
.footer-col2 h4 {
    font-size: 12px;
    font-family: 'Tw Cen MT';
    letter-spacing: 2px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.footer-col3 h4 {
    font-size: 12px;
    font-family: 'Tw Cen MT';
    letter-spacing: 2px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.footer-col4 h4 {
    font-size: 12px;
    font-family: 'Tw Cen MT';
    letter-spacing: 2px;
    margin-top: 10px;
    margin-bottom: 10px;
}
input#Email-1494292487693 {
    padding: 10px 45px 10px 0;
    background-color: #fff;
    background-color: var(--colorFooter);
    color: #000;
    color: var(--colorFooterText);
    max-width: 300px;
    width: 100%;
    border: 0;
    border-radius: 0;
    border-bottom: 2px solid;
    border-bottom-color: #000;
    border-bottom-color: var(--colorFooterText);
}
</style>


<!-- <body onload="preloader()"> -->
    <!-- Pre Loader -->
    <!-- <div id="site-loader"><img src="images/gif-loading-logo.gif" alt="logo" width="105" height="105"></div> -->
    <header id="header"></header>
     <!-- Top Banner Start-->
  <div class="top-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                pakistan's biggest kids store
            </div>
        </div>
    </div>
</div>
<!-- Top Banner End -->
   <div id="dvLoading"></div>
    <!-- Navigation Start -->
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-header navbar-mobile">
        <div class="navbar-container container">

            <div class="navbar-brand">
                <a class="navbar-brand-logo" href="#top">
                    <img src="{{asset('tracking/assets/v3/images/becha_partylogo.png')}}" alt="logo">
                </a>
            </div>

        </div>
    </nav>
    <!-- Navigation End -->
    <div id="tracker"></div>
    <section class="tracker-section">
       @yield('content')
    </section>
    </div>

    <div class="last-btn-main">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <h4 class="last-btn"> <a class="button" href="https://bachaaparty.com/">Back To Home</a></h4></div>
        </div>
        </div>
        </div>
    <!-- footer Start -->
      <!-- footer Start -->
      <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-col1">
                       <h4> INFORMATION</h4>
                       <div class="footer__collapsible">
                        <ul class="no-bullets site-footer__linklist">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Store Locator</a></li></ul>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-col2">
                        <h4> Quick Links</h4>
                        <div class="footer__collapsible">
                            <ul class="no-bullets site-footer__linklist">
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Blogs</a></li>
                            </ul>
                          </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-col3">
                        <h4> INFORMATION</h4>
                        <div class="footer__collapsible">
                            <p>Enter your email to receive the latest store news, special offers, exclusive discounts and other useful information.</p>
                            <form method="post" action="/contact#newsletter-footer" id="newsletter-footer" accept-charset="UTF-8" class="contact-form">
                                <input type="hidden" name="form_type" value="customer">
                                <input type="hidden" name="utf8" value="✓">
                                <input type="hidden" name="contact[tags]" value="prospect,newsletter">
                                <input type="hidden" name="contact[context]" value="footer">
                                <div class="footer__newsletter">
                                  <input type="email" value="" placeholder="Enter your email" name="contact[email]" id="Email-1494292487693" class="footer__newsletter-input" autocorrect="off" autocapitalize="off">
                                  <button type="submit" class="footer__newsletter-btn" name="commit" aria-label="Subscribe">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-col4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer End -->
    <!-- footer End -->

    <!-- jQuery Min JS -->
    <script src="{{asset('tracking/assets/v3/js/jquery-min.js')}}"></script>

    <!-- Popper Min JS -->
    <script src="{{asset('tracking/assets/v3/js/popper.min.js')}}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{asset('tracking/assets/v3/js/bootstrap.min.js')}}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{asset('tracking/assets/v3/js/owl.carousel.min.js')}}"></script>
    <!-- Owl Plugins JS -->
    <script src="{{asset('tracking/assets/v3/js/plugins.js')}}"></script>
    <!-- Smooth scroll JS -->
    <script src="{{asset('tracking/assets/v3/js/smoothscroll.js')}}"></script>


    <!-- Custom JS -->
    <script src="{{asset('tracking/assets/v3/js/custom.js')}}"></script>

    <!-- Custom Google Map -->
    <script src="{{asset('tracking/assets/v3/js/custom-map.js')}}"></script>

    <script>
        var preloaderhtml = document.getElementById('site-loader');

        function preloader() {
            preloaderhtml.style.display = "none";
        }
    </script>
</body>

</html>
