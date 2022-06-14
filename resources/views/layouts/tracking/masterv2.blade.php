
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Track it |  Bachaa Party</title>
    <!-- Plugins CSS -->
    <link href="{{asset('tracking/assets/v2/css/plugins.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('tracking/assets/v2/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('tracking/assets/v3/fonts/TCM-reg_____.TTF')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('tracking/assets/v3/images/becha_partylogo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('tracking/assets/v2/images/becha_partylogo.png')}}">
</head>


<style>

.footer__collapsible ul li a:hover {
 color: #000;
}
    .tracker-form .btn {
      z-index: 2;
      color: #000 !important;
      border: 1px solid lightgray !important;
      padding: 10px 20px !important;
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
      padding: 10px 20px !important;
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
      color: #000;
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
ul.no-bullets.site-footer__linklist.social__icons li {
    display: inline-block;
    padding: 5px;
}
.pay {
    text-align: center;
}
.copy {
    text-align: center;
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
}
.tracker-form .btn {
color: #fff !important;
border: 1px solid lightgray;
background-color: #000;
width: 15%;
height: 40px;
margin-top: -5px;
border-radius: 0px;
font-family: 'Tw Cen MT';
}
    </style>




    <header id="header"></header>
   <div id="dvLoading"></div>
    <!-- Navigation Start -->
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-header navbar-mobile">
        <div class="navbar-container container">

            <div class="navbar-brand">
                <a class="navbar-brand-logo" href="#top">
                    <img src="{{asset('tracking/assets/v2/images/becha_partylogo.png')}}" alt="logo">
                </a>
            </div>

        </div>
    </nav>
    <!-- Navigation End -->

    <!-- Top Banner Start-->
  <div class="top-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <strong> Pakistan's biggest kids store</strong>
            </div>
        </div>
    </div>
</div>
<!-- Top Banner End -->

  <!-- Tracker Start -->
  <div id="tracker"></div>
  <section class="tracker-section">
     @yield('content')
  </section>
  <!-- Tracker End -->
</div>
<div class="last-btn-main">
    <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
        <h4 class="last-btn"> <a class="button" href="https://bachaaparty.com/">Back To Home</a></h4></div>
    </div>
    </div>
</div>
    <!-- <div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div> -->


    <!-- footer Start -->
    <section class="footer">
        <div class="container">
         <div class="row">
            <div class="col-lg-4">
                <div class="footer-col1">
                   <h4> INFORMATION</h4>
                   <div class="footer__collapsible">
                    <ul class="no-bullets site-footer__linklist">
                        <li><a href="https://bachaaparty.com/pages/about-us">About Us</a></li>
                        <li><a href="https://bachaaparty.com/pages/privacy-policy">Privacy Policy</a></li>
                        <li><a href="https://bachaaparty.com/pages/contact-us">Contact Us</a></li>
                        <li><a href="https://bachaaparty.com/pages/store-locator">Store Locator</a></li></ul>
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-col2">
                    <h4> QUICK LINKS</h4>
                    <div class="footer__collapsible">
                        <ul class="no-bullets site-footer__linklist">
                            <li><a href="https://bachaaparty.com/pages/refund-policy">Refund Policy</a></li>
                            <li><a href="https://bachaaparty.com/pages/faqs">FAQs</a></li>
                            <li><a href="https://bachaaparty.com/blogs/news/kids-shoes-in-pakistan">Blogs</a></li>
                        </ul>
                      </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-col2">
                    <h4> FOLLOW US</h4>
                    <div class="footer__collapsible">
                        <ul class="no-bullets site-footer__linklist social__icons">
                            <li><a href="https://instagram.com/bachaa_party"><img src="{{asset('/tracking/assets/v2/images/instagram.png')}}"  width="25px" height="25px"></a></li>
                            <li><a href="https://www.facebook.com/bachaaparty"><img src="{{asset('/tracking/assets/v2/images/facebook.png')}}" width="25px" height="25px"></a></li>
                            <li><a href="https://www.linkedin.com/company/bachaa-party"><img src="{{asset('/tracking/assets/v2/images/linkedin.png')}}" width="30px" height="30px"></a></li>
                        </ul>
                      </div>
                </div>
            </div>

     </div>
     <div class="pay">
     <div class="row">
         <div class="col-md-12">
            <img src="{{asset('/tracking/assets/v2/images/payment.png')}}" width="130px" height="55px">
         </div>
     </div>
    </div>
    <div class="copy">
        <div class="row">
            <div class="col-md-12">
                © {{Date('Y')}} Bachaa Party
            </div>
        </div>
       </div>
     </div>
    </section>
    <!-- footer End -->
    <!-- footer End -->
    <!-- jQuery Min JS -->
    <script src="{{asset('tracking/assets/v2/js/jquery-min.js')}}"></script>

    <!-- Popper Min JS -->
    <script src="{{asset('tracking/assets/v2/js/popper.min.js')}}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{asset('tracking/assets/v2/js/bootstrap.min.js')}}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{asset('tracking/assets/v2/js/owl.carousel.min.js')}}"></script>
    <!-- Owl Plugins JS -->
    <script src="{{asset('tracking/assets/v2/js/plugins.js')}}"></script>
    <!-- Smooth scroll JS -->
    <script src="{{asset('tracking/assets/v2/js/smoothscroll.js')}}"></script>


    <!-- Custom JS -->
    <script src="{{asset('tracking/assets/v2/js/custom.js')}}"></script>

    <!-- Custom Google Map -->
    <script src="{{asset('tracking/assets/v2/js/custom-map.js')}}"></script>
    <!-- <script src="../maps/api/js?key=AIzaSyD5u8QmAP6DxLCQrbI5QnH9Y4n6xLBV2V0&callback=initMap" async="" defer=""></script> -->
    <script>
        var preloaderhtml = document.getElementById('site-loader');

        function preloader() {
            preloaderhtml.style.display = "none";
        }
    </script>
</body>

</html>
