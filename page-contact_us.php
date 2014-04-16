<?php include('header.php'); ?>


<section class="page-header">
<div class="opacity-black">
	<div class="container">
        <h1 class="title">CONTACT US</h1>
        <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
        <div class="navi">
        	You are here : <a href="">Home</a>  > <a href="">Page</a>  > <span class="active">Contact Us</span>
        
        </div>
	</div> <!-- /.container -->
</div> <!-- /.opacity-black -->
</section> <!-- /.page-header -->

<style type="text/css">


</style>

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

<section class="container">
    <div class="row contact-stuff">
        <div class="col-md-5">
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

        <div class="col-md-6 col-md-offset-1">
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
                    <div class="alert alert-theme alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div><!-- /.row -->

        </div>

    </div> <!--End: Row-->
</section>




    
<?php include('footer.php'); ?>