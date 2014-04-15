<?php include('header.php'); ?>


<section class="page-header">
	<div class="container">
        <h1 class="title">CONTACT US</h1>
        <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
        <div class="navi">
        	You are here : <a href="">Home</a>  > Contact Us</span>
        
        </div>
	</div> <!-- /.container -->
</section> <!-- /.page-header -->

<style type="text/css">
.contact-page-title {
    border-bottom: 1px solid #607079;
    margin-bottom: 67px;
    position: relative;
    text-align: center;
}

.contact-page-title h4 {
    color: #607079;
    font-size: 24px;
}

.contact-page-title .down-triangle {
    position: absolute;
    width: 0; 
    height: 0;
    border-top: 6px solid #607079;
    border-left: 12px solid transparent; 
    border-right: 12px solid transparent; 
}


.contact-map {
    border-bottom: 1px solid #607079;
    border-top: 1px solid #607079;
    height: 380px;
    width: 100%;
}

#map-canvas { height: 380px; }

.contact-stuff {
    margin: 100px 0px 196px 0px;
}

.contact-title {
    color: #607079;
    font-size: 20px;
    font-weight: 300;
}

.contact-form {
    position: relative;
    height: auto;
    margin-bottom: 15px;
    width: 100%;
}

.contact-form .contact-form-icon {
    position: absolute;
    top: 8px;
    right: 14px;
}

.contact-form .contact-form-input {
    border: 1px solid #8f9ba1;
    border-radius: 2px;
    font-size: 14px;
    color: #607079;
    height: 32px;
    padding: 0px 5px;
    width: 100%;
}

.contact-form .contact-form-textarea {
    border: 1px solid #8f9ba1;
    border-radius: 2px;
    color: #607079;
    font-size: 14px;
    height: 175px;
    padding: 10px 5px;
    width: 100%;
}

.contact-form .contact-form-input::-webkit-input-placeholder,
.contact-form .contact-form-textarea::-webkit-input-placeholder {
    color: #607079;
    font-size: 14px;
}
.contact-form .contact-form-input:-moz-placeholder,
.contact-form .contact-form-textarea:-moz-placeholder {
    color: #607079;
    font-size: 14px;
}
.contact-form .contact-form-input::-moz-placeholder,
.contact-form .contact-form-textarea::-moz-placeholder {
    color: #607079;
    font-size: 14px;
}
.contact-form .contact-form-input:-ms-input-placeholder,
.contact-form .contact-form-textarea:-ms-input-placeholder {
    color: #607079;
    font-size: 14px;
}

.contact-form .contact-form-btn {
    background: #607079;
    border: 1px solid #8f9ba1;
    border-radius: 2px;
    color: #ffffff;
    height: 38px;
    margin-top: 15px;
    width: 126px;
}

.contact-sub-title {
    color: #607079;
    font-size: 16px;
    font-weight: 300;
}

.contact-info {
    margin-bottom: 15px;
}

.contact-info-last {}

.contact-info-icon {
    background: #607079;
    color:#fff;
    margin-right: 15px;
    text-align: center;
    padding: 10px 0px;
    height: 34px;
    width: 34px;
}
.contact-info-icon.address  {
    display: block;
    float:left;
    margin-bottom: 60px;
}

.contact-info-left {
    height: auto;
    margin-bottom: 15px;
    width: 200px;
}

.contact-info-right {
    height: auto;
  
    margin-bottom: 15px;
    width: 270px;
}

.contact-alert {
    background: #f7f7f7;
    border-radius: 2px;
    border: 1px solid #d4d4d4;
    padding: 13px;
    margin-top: 40px;
}

.contact-alert p {
    color: #607079;
    font-size: 14px;
    font-weight: 300;
    margin: 18px 0px;
}

</style>

<section class="container">

<div class="col-md-3">
    <ul class="page-menu">
        <li><a href="page-about_us.php">About Us Page</a></li>
        <li><a href="">Who We Are?</a></li>
        <li><a href="">Our Clients</a></li>
        <li><a href="">Meet the Team</a></li>
        <li><a href="">What We Did?</a></li>
        <li class="active"><a href="page-contact_us_left-sidebar.php">Contact Page <i class="fa fa-angle-right pull-right"></i></a></li>
        <li><a href="">Pricing</a></li>
        <li><a href="">Help</a></li>
        <li><a href="">FAQ</a></li>
        <li><a href="">Our Services</a></li>
    </ul>
</div> <!-- /.col-md-3 -->

<div class="col-md-9">
    
    <div class="contact-page-title">
        <h4>Contact Us</h4>
        <span class="down-triangle"></span>
    </div>

    <div class="contact-map">
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAau7Ek4GgkgGAqZigLq_huSgdwQIL_dlE&sensor=true"></script>

        <script>
              function initialize() {
                var mapOptions = {
                  center: new google.maps.LatLng(41.0101999, 28.9724369),
                  zoom: 15,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map-canvas"),
                    mapOptions);
                    
                  var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    map: map,
                    title: 'Click to zoom'
                  });
                
                  google.maps.event.addListener(map, 'center_changed', function() {
                    // 3 seconds after the center of the map has changed, pan back to the
                    // marker.
                    window.setTimeout(function() {
                      map.panTo(marker.getPosition());
                    }, 3000);
                  });
                
                  google.maps.event.addListener(marker, 'click', function() {
                    map.setZoom(8);
                    map.setCenter(marker.getPosition());
                  });
              }
              google.maps.event.addDomListener(window, 'load', initialize);
        </script>
            
        <div id="map-canvas"/></div>

    </div>


        <div class="row contact-stuff">
            <div class="col-md-4">
                <h4 class="contact-title">Leave us a Message</h4>
                <form action="#" method="#">
                    <div class="contact-form">
                        <input type="text" class="contact-form-input" placeholder="Name*" />
                        <i class="fa fa-user contact-form-icon"></i>
                    </div>
                    <div class="contact-form">
                        <input type="text" class="contact-form-input" placeholder="E-Mail*" />
                        <i class="fa fa-envelope-o contact-form-icon"></i>
                    </div>
                    <div class="contact-form">
                        <textarea class="contact-form-textarea" placeholder="Message*"></textarea>
                        <i class="fa fa-pencil contact-form-icon"></i>
                    </div>
                    <div class="contact-form">
                        <button class="contact-form-btn"><i class="fa fa-envelope-o"></i>&nbsp;SUBMIT</button>
                    </div>
                </form>
            </div>

            <div class="col-md-7 col-md-offset-1">
                <h4 class="contact-title">Contact Information</h4>
                <p class="contact-sub-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <div class="row">
                    <div class="col-md-6">
                        
                        <span><i class="fa fa-phone contact-info-icon"></i></span>
                        <span class="contact-info-text">+ 90 212 444 44 22</span>

                        <div class="h10"></div>
                        <span><i class="fa fa-keyboard-o contact-info-icon"></i></span>
                        <span class="contact-info-text">www.company.com</span>

                        <div class="h10"></div>
                        <span><i class="fa fa-envelope-o contact-info-icon"></i></span>
                        <span class="contact-info-text">mail@company.com</span>
                            
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        
                                <span><i class="fa fa-print contact-info-icon"></i></span>
                                <span class="contact-info-text">+ 90 232 333 09 09</span>
                                <div class="h10"></div>
                                <span><i class="fa fa-map-marker contact-info-icon address"></i></span>
                                <span class="contact-info-text">53th Street, 25th Floor Red St. Park Residence No:8979 No:9 Postal:32000  Fatih/ISTANBUL</span>

                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-alert">
                            <button type="button" class="close">&times;</button>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div><!-- /.row -->

            </div>

        </div> <!--End: Row-->
</div> <!-- /.col-md-9 -->
</section>




    
<?php include('footer.php'); ?>