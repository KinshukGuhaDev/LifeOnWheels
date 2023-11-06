<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Life On Wheels - Services</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj4VXG9J23GDZ1snRdf-NLO8nxZz8Gi58 &libraries=places"></script>
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta tag Keywords -->
        <!-- Custom-Files -->
        <link rel="stylesheet" href="{{url('Frontend/css/bootstrap.css')}}">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="{{url('Frontend/css/style.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{url('Frontend/css/style2.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{url('Frontend/css/slider.css')}}" type="text/css" media="all" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        <!-- Style-CSS -->
        <!-- font-awesome-icons -->
        <link href="{{url('Frontend/css/font-awesome.css')}}" rel="stylesheet">

        <!-- //font-awesome-icons -->
        <!-- /Fonts -->
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
      @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap");

      * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      .section {
        width: 100%;
      }
      .section .container {
        width: 100%;
        display: block;
        padding: 2rem;
      }
      .container .title {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 50px;
      }
      .container .title h1 {
        text-transform: uppercase;
        font-size: 35px;
        color: #00D2FF;
      }
      .container .title h1::after {
        content: "";
        height: 5px;
        width: 100px;
        background-color: #00D2FF;
        display: block;
        margin: auto;
      }
      .content {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-self: auto;
      }
      .image-section {
        display: flex;
        flex-direction: row;
        column-gap: 10px;
      }
      .fullimg {
        display: flex;
        flex-direction: column;
        row-gap: 10px;
      }

      .content .article h3 {
        color: #a3a3a3;
        font-size: 17px;
      }
      .content .article p {
        margin-top: 20px;
        font-size: 17px;
        line-height: 1.5;
        color: #333;
      }
      .content .article .button {
        margin-top: 50px;
      }
      .content .article .button a {
        text-decoration: none;
        padding: 8px 25px;
        background-color: #00D2FF;
        border-radius: 40px;
        color: #fff;
        font-size: 18px;
        letter-spacing: 1.5px;
      }
      .content .article .button a:hover {
        color: #fff;
        background-color: #f28f92;
        transition: 1s ease;
      }
      .container .social {
        width: 100%;
        clear: both;
        margin-top: 50px;

        display: inline-block;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .button {
        width: 8rem;
        height: 2.5rem;
        background-color: #00D2FF;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 0.5rem;
        margin-top: 1rem;

        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1),
          0 4px 6px -4px rgb(0 0 0 / 0.1);
      }
      .container .social i {
        color: #fff;
        font-size: 22px;
        height: 50px;
        width: 50px;
        border-radius: 50px;

        align-items: center;
        background-color: #00D2FF;
        margin: 0px 5px;
        display: flex;
        justify-content: center;
      }
      .container .social i:hover {
        color: #fff;
        background-color: #00e1ff;
        transition: rotate(360deg);
      }
      .team {
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: center;
        margin-top: 5rem;
        height: fit-content;
      }
      .team .team_member {
        background: #00D2FF;
        margin: 5px;
        margin-bottom: 50px;
        width: 300px;
        padding: 20px;
        line-height: 20px;
        color: #8e8b8b;
        position: relative;
      }
      .team .team_member h3 {
        color: black;
        font-size: 26px;
        margin-top: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 5rem;
      }
      .team .team_member p.role {
        color: #141414;
        font-size: 12px;
        text-transform: uppercase;
        margin: 12px 0;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .team .team_member .team_img {
        width: 150px;
        height: 150px;
        border-radius: 77px;
        position: absolute;
        top: -63px;
        left: 50%;
        transform: translateX(-50%);
        background: #fff;
      }
      .team .team_member .team_img img {
        width: 150px;
        height: 150px;

        border-radius: 50%;
      }

      @media screen and (max-width: 768px) {
        .section .containter {
          width: 100%;
          display: block;
          margin: auto;
        }
        .content {
          float: none;
          width: 100%;
          display: flex;
          flex-direction: column;
        }
        .imge-section {
          float: none;
          width: 100%;
        }

        .container .title h1 {
          text-align: center;
          font-size: 30px;
        }
        .container .article .button {
          text-align: center;
        }
        .container .article .button a {
          padding: 6px 15px;
          font-size: 16px;
        }
        .container.social i {
          font-size: 19px;
          height: 35px;
          width: 35px;
          line-height: 35px;
        }
      }
      
    </style>
        <!-- //Fonts -->
    </head>

    <body>
            <!-- mian-content -->
            <div class="main-w3layouts-header-sec inner" id="home">
                <div class="overlay inner">
                    <!-- header -->
                    <header>
                        <div class="container">
                            <div class="header d-lg-flex justify-content-between align-items-center">
                                <div class="header-section">
                                    <h1>
                                        <a class="navbar-brand logo editContent" href="{{url('/')}}">
                                            <span class="fa fa-heartbeat"></span> Life On Wheels
                                        </a>
                                    </h1>
                                </div>
                                @include("inc/menuAbout")

                            </div>
                        </div>
                    </header>
                    <!-- //header -->
                </div>
            </div>
            <!-- //header -->

 
            
            <div class="section">
      <div class="container">
        <div class="title">
          <h1>About Us</h1>
        </div>
        <div class="content">
          <div class="arricle" style="text-align: justify">
            <p style="font-size: x-large">
              Welcome to "Life On Wheels," your trusted partner in ambulance
              services. In an era where convenience and accessibility reign
              supreme, we are here to redefine the way you access and experience
              emergency medical assistance. With our innovative online platform,
              you can book an ambulance tailored to your specific needs with
              ease and efficiency.
            </p>
            <p style="font-size: x-large">
              At "Life On Wheels," we understand that every emergency is unique,
              and so are your requirements. That's why we offer two distinct
              service tiers: Premium and Non-Premium. Our Premium service is
              designed to cater to those who require immediate, top-notch
              medical attention. Whether it's a critical situation or you simply
              prefer a higher level of service, our Premium option ensures you
              receive the best care available.
            </p>
            
            <p style="font-size: x-large">
              For those seeking a more budget-friendly option without
              compromising on reliability, our Non-Premium service is the
              perfect choice. We maintain the same dedication to quality but at
              a price point accessible to a wider range of individuals.
            </p>
            <br /><br />
            <div
              style="
                display: flex;
                width: 100%;
                justify-content: center;
                align-items: center;">
            <div class="button">
            <a href="#" id="read-more-button" style="text-decoration: none; color: aliceblue; font-size: 1.2rem; display: block; text-align: center; margin: 0 auto;">>
                Read More
            </a>
            </div>
    </div>
            <div id="hidden-paragraph" style="display: none; margin: 20px;">
            <p
              style="
                text-decoration: underline;
                font-size: xx-large;
                margin-bottom: 10px;
                background-color: #00D2FF">
              <b>Seamless Navigation with Google Maps Integration:</b>
            </p>
            <p style="font-size: x-large">
              Getting the right help to the right place at the right time is our
              priority. With our integrated Google Maps feature, you can
              pinpoint your current location and destination effortlessly. No
              more uncertainty or delays in reaching your desired healthcare
              facility. "Life On Wheels" takes the guesswork out of the
              equation, providing you with a smooth and efficient experience
              during stressful times.
            </p>
            <br /><br />

            <p
              style="
                text-decoration: underline;
                font-size: xx-large;
                margin-bottom: 10px;
                background-color: #00D2FF"
            >
              <b>User-Friendly Experience:</b>
            </p>
            <p style="font-size: x-large">
              We believe in making your experience as straightforward as
              possible. Our user-friendly website ensures that booking an
              ambulance is a hassle-free process. With just a few clicks, you
              can secure the help you need, when you need it most. Our intuitive
              interface has been designed with your comfort in mind, putting you
              in control of your emergency.
            </p>
            <br /><br />

            <p
              style="
                text-decoration: underline;
                font-size: xx-large;
                margin-bottom: 10px;
                background-color: #00D2FF"
            >
              <b>Engage with Us:</b>
            </p>
            <p style="font-size: x-large">
              Your feedback is invaluable to us. We have incorporated a
              dedicated "Contact Us" section on our platform to encourage open
              communication. Whether you have suggestions, feedback, or any
              concerns, we welcome your input. Our commitment to transparency
              and continuous improvement drives us to be responsive to your
              needs.
            </p>
            <br /><br />
            <p
              style="
                text-decoration: underline;
                font-size: xx-large;
                margin-bottom: 10px;
                background-color: #00D2FF"
            >
              <b>Connect with Us on Social Media:</b>
            </p>
            <p style="font-size: x-large">
              Stay connected with "Life On Wheels" beyond your immediate needs.
              Follow us on WhatsApp, Instagram, Facebook, LinkedIn, and Twitter
              to stay updated on the latest developments, tips for emergency
              preparedness, and more. Our social media platforms are not just
              about ambulance services; they're a channel for us to engage with
              you, share valuable information, and build a stronger, safer
              community.
            </p>
            <p style="font-size: x-large">
              In conclusion, "Life On Wheels" is not just an ambulance service;
              it's a commitment to your well-being. Our premium and non-premium
              options ensure that we cater to your specific needs, while our
              integrated Google Maps feature and user-friendly website make
              accessing our services a breeze. Your feedback and suggestions are
              always welcomed through our "Contact Us" section, and we invite
              you to connect with us on social media for updates and insights.
            </p>
            <p style="font-size: x-large">
              With "Life On Wheels," you can trust that we're here for you,
              delivering care when it matters most. We're not just a service;
              we're a lifeline. Thank you for choosing us as your ambulance
              service provider.
            </p>
    
            </div>
            <script>
        document.getElementById("read-more-button").addEventListener("click", function () {
        var hiddenParagraph = document.getElementById("hidden-paragraph");
        if (hiddenParagraph.style.display === "none") {
            hiddenParagraph.style.display = "block";
            this.innerHTML = "Read Less";
        } else {
            hiddenParagraph.style.display = "none";
            this.innerHTML = "Read More";
        }
        });
        </script>
            
  
          </div>

      <div class="container">
        <div class="title">
          <h1>OUR TEAM</h1>
        </div>
          <div class="team">
            <div class="team_member">
              <div class="team_img">
                <img src="{{url('Frontend/images/king.jpg')}}" alt="team_member_image" />
              </div>
              <h3>Kinshuk Guha</h3>
              <p class="role">Developer Founder & Designer</p>
              <p style="color: black">
                Hi it's Kinshuk currently pursuing Bachelor of Computer
                Application 3rd year from "Institute of Hotel & Restaurant
                Management"
              </p>
            </div>

            <div class="team_member">
              <div class="team_img">
                <img src="{{url('Frontend/images/afrin.jpg')}}" alt="team_member_image" />
              </div>
              <h3>Afrin Gazi</h3>
              <p class="role">Developer & Presentor</p>
              <p style="color: black">
                Hi it's Afrin currently pursuing Bachelor of Computer
                Application 3rd year from "Institute of Hotel & Restaurant
                Management"
              </p>
            </div>

            <div class="team_member">
              <div class="team_img">
                <img src="{{url('Frontend/images/sou.jpg')}}" alt="team_member_image" />
              </div>
              <h3>Sourav Roy</h3>
              <p class="role">Developer & Designer</p>
              <p style="color: black">
                Hi it's Sourav currently pursuing Bachelor of Computer
                Application 3rd year from "Institute of Hotel & Restaurant
                Management"
              </p>
            </div>

            <div class="team_member">
              <div class="team_img">
                <img src="{{url('Frontend/images/puja.jpg')}}" alt="team_member_image" />
              </div>
              <h3>Puja Sarkar</h3>
              <p class="role">Developer & Presentor</p>
              <p style="color: black">
                Hi it's Puja currently pursuing Bachelor of Computer Application
                3rd year from "Institute of Hotel & Restaurant Management"
              </p>
            </div>
          </div>
          <div class="social">
            <a href="https://www.facebook.com/profile.php?id=61550583998897&mibextid=ZbWKwL"><i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com/LifeOnWheels023?t=0_HDTgmFVYxyqAumdhYxBA&s=09"><i class='bx bxl-twitter'></i></a>
            <a href="https://www.instagram.com/lifeonwheels023/"><i class='bx bxl-instagram'></i></a>
            <a href="https://www.linkedin.com/in/life-on-wheels-394a99290"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>
      </div>
    </div>
 

            <!-- //grids-content1 -->
            <!-- footer -->
            <footer>
                <div class="container">
                    <div class="row footer-top">
                        
                        
                                <div class="col-md-4 footer-grid_section_w3layouts">
                                    <h3 class="footer-title mb-lg-4 mb-3">Information</h3>
                                    <ul class="list-unstyled w3layouts-icons">
                                        <li>
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="mt-3">
                                            <a href="{{url('/about_us')}}">About Us</a>
                                        </li>
                                        <li class="mt-3">
                                            <a href="{{url('/premium_service')}}">Services</a>
                                        </li>
                                        <li class="mt-3">
                                            <a href="{{url('/contact_us')}}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 footer-grid_section_w3layouts">
                                    <!-- social icons -->
                                    <div class="agileinfo_social_icons">
                                        <h3 class="footer-title mb-lg-4 mb-3">Customer Service</h3>
                                        <ul class="list-unstyled w3layouts-icons">

                                            <li>
                                                <a href="{{url('/about_us')}}">About Us</a>
                                            </li>
                                            <li class="mt-3">
                                                <a href="{{url('/contact_us')}}">Contact Us</a>
                                            </li>
                                            <li class="mt-3">
                                                <a href="{{url('/terms_and_conditions')}}">Terms & Condition</a>
                                            </li>
                                            <li class="mt-3">
                                                <a href="{{url('/privacy_policy')}}">Privacy Policy</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- social icons -->
                                </div>
                                <div class="col-md-4 footer-grid_section_w3layouts my-md-0 my-5">
                                    <h3 class="footer-title mb-lg-4 mb-3">Contact Info</h3>
                                    <div class="contact-info">
                                        <div class="footer-address-inf">
                                            <h4 class="ad-info mb-2">Phone</h4>
                                            <p>+91 9889079987</p>
                                        </div>
                                        <div class="footer-address-inf my-4">
                                            <h4 class="ad-info mb-2">Email </h4>
                                            <p><a href="mailto:lifeonwheels023@gmail.com">lifeonwheels023@gmail.com</a></p>
                                        </div>
                                        <div class="footer-address-inf">
                                            <h4 class="ad-info mb-2">Location</h4>
                                            <p>Kolkata,West Bengal,India</p>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </footer>
            <!-- //footer -->
            <div class="cpy-right py-3">
                <div class="container">
                    <div class="row">
                        <p class="col-md-10 text-left">© 2023 Life On Wheels. All rights reserved 
                        </p>
                        <!-- move top icon -->
                        <a href="#home" class="move-top text-lg-right text-center col-md-2"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
                        <!-- //move top icon -->
                    </div>
                </div>

            </div>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{url('Frontend/js/index.js')}}"></script>
        
    </body>
</html>
