<?php

$message_sent = false;

if(isset($_POST['email'] )) {

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $Subject = $_POST['subject'];
        $Message = $_POST['message'];
        $PhoneNumber = $_POST['PhoneNumber'];

        $to = "yatin0988@gmail.com";

        $body = "";

        $body .= "From: ".$UserName. "\r\n";
        $body .= "Email: ".$UserEmail. "\r\n";
        $body .= "Phone Number".$PhoneNumber. "\r\n";
        $body .= "Message: ".$Message. "\r\n";

        mail($to,$Subject,$body);
        
        $message_sent = true;
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Integriti | Contact Us</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
<!-- zoom effect -->
<link rel='stylesheet' href='css/hizoom.css'>
<!-- end zoom effect -->

</head>
<body id="default_theme" class="contact_us_2">


        
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">7, Mulbery Apt., Panchpakadi, Thane(w)</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:sales@integritisystem.com">sales@integritisystem.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/Integriti-Systems-212268584239" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="make_appointment.html">Make Appointment</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.html"><img src="images/logos/integriti.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a href="index.html">Home</a></li>
                <li><a href="integriti_about.html">About Us</a></li>
                <li> <a class="active" href="integriti_service_list.html">Services</a></li>
                <li> <a href="it_contact.html">Contact</a></li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Contact</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>GET IN TOUCH</h2>
              </div>
            </div>
            <div class="contact_information">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>7, Mulbery Apt</h4>
                    <p>Panchpakadi, Thane(w)</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>+91 932 004 0999</h4>
                    <p>Mon-Fri 8:30am-6:30pm</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>support@integritisystem.com</h4>
                    <p>24/7 online support</p>
                  </div>
                </div>
              </div>
            </div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Map" align="center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.900476286111!2d72.96428541473178!3d19.199548787017083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9170145f9eb%3A0xeda2972c4a73fe36!2sIntegriti%20systems!5e0!3m2!1sen!2sin!4v1595074920219!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h2 class="text_align_center">SEND MESSAGER</h2>
              <div class="form_section">
                <form  action="integriti_contact.php" method="POST" class="form_contant" onsubmit="alert('Thanks for contacting us, we will get in touch!');">
                  <fieldset>
                  <div class="row">
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Your name" type="text" name="name">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Subject" type="text" name="subject">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Email adress" type="email" name="email">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Phone number" type="text" name="PhoneNumber">
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea class="field_custom" placeholder="Messager" name="message"></textarea>
                    </div>
                    <div class="center"><button type="submit" class="btn main_bt" href="#" name="submit">SUBMIT NOW</button></div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Map -->


<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">What Clients Say?</h2>
            <p class="large">Here are testimonials from clients..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> We are happy with your M/s. Integriti System team as your company has delivered the below key areas:
                      <ul class="RHI-testimonial">
                          <li>Value for your investment</li>
                          <li>Quality</li>
                          <li>Delivery</li>
                          <li>Services</li>
                      </ul> 
                    </div>
                  <div class="testimonial-photo"> <img src="images/it_service/RHI.png" class="img-responsive" alt="#" width="150" height="100"> </div>
                  <div class="testimonial-meta">
                    <h4>Daryll Fernandes</h4>
                    <span class="testimonial-position">RHI Magnesita</span> 
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> My experience working with Team Integriti has been a good one and I found the following qualities worth mentioning here:</br></br>
                  You and your team were absolutely reliable, knowledgeable, concerned about quality, willing to go the extra mile if required.</br></br>
                  This kind of professionalism and commitment to customer satisfaction is worth mentioning here. Having in mind such a pleasant experience with your team, it would be my pleasure to continue doing business with you.</br></br>
                  I wish Team Integriti all the very best for their future endeavours. </div>
                  <div class="testimonial-photo"> <img src="images/it_service/transworld.jpg" class="img-responsive" alt="#" width="150" height="100"> </div>
                  <div class="testimonial-meta">
                    <h4>Mr Abhishek Chaudhary</h4>
                    <span class="testimonial-position">Transworld Group Of Companies</span></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                    <div class="testimonial-content"> Integriti, the name says it all!!!</br>
                    Being a reliable vendor, team integriti has always delivered to the expectations. The after sales service and timely maintenance are their forte.</br></br>
                    Thank you team Integriti and best wishes for all your future goals !!!
                    </div>
                  <div class="testimonial-photo"> <img src="images/it_service/STS_Logo.png" class="img-responsive" alt="#" width="150" height="100"> </div>
                  <div class="testimonial-meta">
                    <h4>Nilesh Abhang</h4>
                    <span class="testimonial-position">Synergy Technology Services</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                    <div class="testimonial-content"> We are satisfied with the services provided by Integriti. Your services have been prompt and staff is also very cooperative.
                    </div>
                  <div class="testimonial-photo"> <img src="images/it_service/CalanthaBiotech.png" class="img-responsive" alt="#" width="150" height="100"> </div>
                  <div class="testimonial-meta">
                    <h4>Dr. Madhura Nerurkar</h4>
                      <span class="testimonial-position">Managing Director, Calantha Biotech Pvt. Ltd.</span></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                    <div class="testimonial-content"> We are very satisfied with the services provided by Integriti. It has been up to the mark and prompt. We look forward to availing your services in the future as well.
                    </div>
                  <div class="testimonial-photo"> <img src="images/it_service/SwiftIndia.png" class="img-responsive" alt="#" width="150" height="100"> </div>
                  <div class="testimonial-meta">
                    <h4>Lizella Maumkel</h4>
                      <span class="testimonial-position">Swift India</span></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                    <div class="testimonial-content"> One stop solution.<br><br>
                    Ever since we have been attached to Integriti Systems, professionally, we have always found a way out for any technical problems. The bond which we have struck is more than a just professional front but more on a personal level.<br><br>
                    I wish the best to team Integriti always and all the best for future.
                    </div>
                  <div class="testimonial-photo"> <img src="images/it_service/JD.png" class="img-responsive" alt="#" width="150" height="100"> </div>
                  <div class="testimonial-meta">
                    <h4>Mr. Bhushan Joshi</h4>
                      <span class="testimonial-position">Joshi Deshaware and associates</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon5.png" alt="#" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
          <div class="proverb">
            <div class="main-heading left_text">
              <h2>Integriti Systems</h2>
            </div>
            <p>“The computer was born to solve problems that did not exist before.”</p>
			<p>- Bill Gates</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="addlinks">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="integriti_about.html"><i class="fa fa-angle-right"></i> About us</a></li>
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li>
            </ul>
          </div>
          <div class="srvcs">
            <div class="main-heading left_text">
              <h2>Services</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="integriti_data_backup.html"><i class="fa fa-angle-right"></i> Backup & Disaster Recovery</a></li>
              <li><a href="integriti_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
              <li><a href="integriti_server_admin.html"><i class="fa fa-angle-right"></i> Server Administrator</a></li>
              <li><a href="integriti_network_sol.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
              <li><a href="integriti_integrated_sol.html"><i class="fa fa-angle-right"></i> Integrated Solution</a></li>
			  <li><a href="integriti_network_design.html"><i class="fa fa-angle-right"></i> Network Design</a></li>
            </ul>
          </div>
          <div class="cntus">
            <div class="main-heading left_text">
              <h2>Contact us</h2>
            </div>
            <p>7, Mulbery Apt.<br>
              Panchpakadi, Thane<br>
              <span style="font-size:18px;"><a href="tel:+9320040999">+932 004 0999</a></span></p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
		  </div>
      <div class="cprt">
        <p>Integriti Systems © Copyrights 2020</p>
      </div>
</footer>


<!-- end footer -->
<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
		  styles: [
               {
                 elementType: 'geometry',
                 stylers: [{color: '#fefefe'}]
               },
               {
                 elementType: 'labels.icon',
                 stylers: [{visibility: 'off'}]
               },
               {
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#616161'}]
               },
               {
                 elementType: 'labels.text.stroke',
                 stylers: [{color: '#f5f5f5'}]
               },
               {
                 featureType: 'administrative.land_parcel',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#bdbdbd'}]
               },
               {
                 featureType: 'poi',
                 elementType: 'geometry',
                 stylers: [{color: '#eeeeee'}]
               },
               {
                 featureType: 'poi',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#757575'}]
               },
               {
                 featureType: 'poi.park',
                 elementType: 'geometry',
                 stylers: [{color: '#e5e5e5'}]
               },
               {
                 featureType: 'poi.park',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#9e9e9e'}]
               },
               {
                 featureType: 'road',
                 elementType: 'geometry',
                 stylers: [{color: '#eee'}]
               },
               {
                 featureType: 'road.arterial',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#3d3523'}]
               },
               {
                 featureType: 'road.highway',
                 elementType: 'geometry',
                 stylers: [{color: '#eee'}]
               },
               {
                 featureType: 'road.highway',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#616161'}]
               },
               {
                 featureType: 'road.local',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#9e9e9e'}]
               },
               {
                 featureType: 'transit.line',
                 elementType: 'geometry',
                 stylers: [{color: '#e5e5e5'}]
               },
               {
                 featureType: 'transit.station',
                 elementType: 'geometry',
                 stylers: [{color: '#000'}]
               },
               {
                 featureType: 'water',
                 elementType: 'geometry',
                 stylers: [{color: '#c8d7d4'}]
               },
               {
                 featureType: 'water',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#b1a481'}]
               }
             ]
		});

        var image = 'images/it_service/location_icon_map_cont.png';
        var beachMarker = new google.maps.Marker({
          position: {lat: 40.645037, lng: -73.880224},
          map: map,
          icon: image
        });
      }
    </script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
<!-- zoom effect -->
<script src='js/hizoom.js'></script>
<script>
        $('.hi1').hiZoom({
            width: 300,
            position: 'right'
        });
        $('.hi2').hiZoom({
            width: 400,
            position: 'right'
        });
    </script>
    
    <script>
    function checkit(){
        $.post( "ajax/test.jsp",
            $('#form').serialize(),
            function( data ) {
            if(data == "success"){
                alert("success");
            }
        });
    }
</script>

    
</body>
</html>
