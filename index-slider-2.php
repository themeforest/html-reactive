<?php include('header.php'); ?>

<style type="text/css">
section.header .slider-bg-2 {
    background: url('img/bg.jpg') no-repeat center center fixed;
    background-size: auto auto;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 800px;
    position: relative;
    z-index: -1;
}

section.header .slider-bg-2 .bg-slider-overlay {
    background: url('img/Slider-cover.png') repeat repeat;
    width: inherit;
    height: inherit;
    opacity: 0.3;
}

.js-text-left {
    position: absolute;
    background: url('img/navigation-left.png');
    width: 44px;
    height: 82px;
    z-index: 999999;
    cursor: pointer;
    top: 300px;
    left: 100px;
}

.js-text-left:hover {
    background: url('img/Navigation-Left-HOVER.png');
}

.js-text-right {
    position: absolute;
    background: url('img/Navigation-Right.png');
    width: 44px;
    height: 82px;
    z-index: 999999;
    cursor: pointer;
    top: 300px;
    right: 100px;
}

.js-text-right:hover {
    background: url('img/Navigation-Right-hover.png');
}


.js-text-control {
    position: absolute;
    width: 100%;
    text-align: center;
    top: 755px;
}

.js-text-control a {
    border: 1px solid #fff;
    border-radius: 50%;
    height: 13px;
    display: inline-block;
    margin-left: 7px;
    width: 13px;
}

.js-text-control a.active {
    background: #fFf;
}
</style>

<section class="header">

	<div class="slider-bg-2"></div> <!-- /.slider-bg -->
        <div class="opacity-black">
            <div class="texts js-text-effect effect-manuel">
                <div class="js-text-effect-item">
                    <h2 class="js-text-effect-top">WE ARE <span>CREATING</span> AWESOME WORKS.</h2>
                    <p class="js-text-effect-bottom">Wordpress Theme  - HTML 5  -  Bootstrapt  - CSS  -  Parallax</p>
                </div>
                <div class="js-text-effect-item">
                    <h2 class="js-text-effect-top">WE ARE <span>DOING</span> AWESOME WORKS.</h2>
                    <p class="js-text-effect-bottom">Wordpress Theme  - HTML 5  -  Bootstrapt  - CSS  -  Parallax</p>
                </div>
                <div class="js-text-effect-item">
                    <h2 class="js-text-effect-top">WE ARE <span>THINKING</span> AWESOME WORKS.</h2>
                    <p class="js-text-effect-bottom">Wordpress Theme  - HTML 5  -  Bootstrapt  - CSS  -  Parallax</p>
                </div>
            </div> <!-- /.texts -->
            
            <div class="buttons">
                <a href="" class="btn">WHO WE ARE</a>
            </div> <!-- /.buttons -->
        </div> <!-- /.opacity-black -->
</section>






<div class="container js-hide-me">
<div class="page-title hidden-xs hidden-sm">
	<div class="container">
        <div class="row">
        	<div class="col-md-3">
            	<div class="logo">
                    <h2><i class="fa fa-flash"></i> RE<span>ACTIVE</span></h2>
                    <span class="desc">CREATIVE ONE PAGE TEMPLATE</span>
                </div>
            </div> <!-- /.col-md-3 -->
            <div class="col-md-9">
            	<ul class="sub-menu pull-right">
                	<li><a href="">WHO ARE YOU?</a></li>
                    <li><a href="">WHAT WHE DO?</a></li>
                    <li><a href="">PORTFOLIO</a></li>
                    <li><a href="">OUR PROCESS</a></li>
                    <li><a href="">OUR TEAM</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul> <!-- /.sub-menu -->
            </div> <!-- /.col-md-9 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.page-title -->
<div class="h100"></div>

<div class="clearfix"></div>


<div class="promo-text js-hide-me">
	<h2>WE ARE <span>RE</span>ACTIVE</h2>
    <p>Lorem ipsum dolor smit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br />tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
    <a href="javascript:;" class="btn btn-theme">MORE ABOUT US</a>
</div> <!-- /.promo-text -->



</div> <!-- /.container -->



<div class="bg-color-2 full-content">
    <div class="container">
    	
        <div class="h80"></div>
    	<div class="content-header js-hide-me">
            <h2>ABOUT US</h2>
            <p>Lorem ipsum dolor smit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br />tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
        </div> <!-- /.content-header -->
        <div class="h80"></div>
        
        <div class="row js-hide-me">
            <div class="col-md-6">
                <h3>Who We Are?</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
                
                <h3>Our Skills</h3>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
                  <span class="pull-left">Photoshop</span>
                  <span class="pull-right">87%</span>
                  </div>
                </div> <!-- /.progress -->
                
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                  <span class="pull-left">CSS - HTML 5</span>
                  <span class="pull-right">92%</span>
                  </div>
                </div> <!-- /.progress -->
                
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                  <span class="pull-left">Illustrator</span>
                  <span class="pull-right">73%</span>
                  </div>
                </div> <!-- /.progress -->
                
            </div> <!-- /.col-md-6 -->

            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="img/page-slider-1.jpg">
                    </div>
                    <div class="item">
                      <img src="img/page-slider-1.jpg">
                    </div>
                    <div class="item">
                      <img src="img/page-slider-1.jpg">
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-chevron-right"></span>
                  </a>
                </div>
            </div> <!-- /.col-md-6 -->
        </div> <!-- /.row -->	
        
    </div> <!-- /.container -->
    <div class="h100"></div>
</div> <!-- /.bg-color-2 .full-content -->


<div class="container ">
	<div class="h80"></div>
    
     
    <div class="row">
        <div class="col-md-6">

<style type="text/css">


.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin: 0px;
}

.tabs-left > .nav-tabs > li:last-child > a {
    border: 1px solid #607079;
    border-right: none;
}

.tabs-left > .nav-tabs {
  float: left;
  margin: 0px;
}

.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
}

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
}

.tabs-left > .tab-content {
    border: 1px solid #607079;
    padding: 30px;
    width: 66%;
    float: right;
    margin: 0px;
    margin-right: 2px;
}

.tabs-left > .tab-content .tabs-left-content-title {
    color: #607079;
    font-size: 20px;
}

.tabs-left > .tab-content .tabs-left-content-text {
    color: #607079;
    font-size: 16px;
    font-weight: 300;
}

.panel-index {
    background-color: transparent !important;
    border-bottom: 1px solid #607079 !important;
}

.panel-index .accordion-click {
    border: 1px solid #607079;
    border-radius: 100%;
    padding: 1px 5px;
    float: right;
}

.panel-group .panel-heading + .panel-collapse .panel-body {
    border-top: none;
}
</style>            
          <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#a" data-toggle="tab"><i class="fa fa-desktop"></i>Incredible Design!</a></li>
              <li><a href="#b" data-toggle="tab"><i class="fa fa-leaf"></i>Best Theme Ever</a></li>
              <li><a href="#c" data-toggle="tab"><i class="fa fa-magic"></i>Magical Features</a></li>
              <li><a href="#d" data-toggle="tab"><i class="fa fa-link"></i>Fully Responsive</a></li>
            </ul>
            <div class="tab-content">
             <div class="tab-pane active" id="a">
                
                <p class="tabs-left-content-title">Vertical Tab Creative Title</p>
                <p class="tabs-left-content-text">Dam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliqui.</p>
                <p class="tabs-left-content-text">Ex ea commodo consequat. Duis autem vel eum iriure dolor me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, </p>
             
             </div>
             <div class="tab-pane" id="b">
                <p class="tabs-left-content-title">Vertical Tab Outstanding Title</p>
                <p class="tabs-left-content-text">Dam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliqui.</p>
                <p class="tabs-left-content-text">Ex ea commodo consequat. Duis autem vel eum iriure dolor me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, </p>
             </div>
             <div class="tab-pane" id="c">
                <p class="tabs-left-content-title">Vertical Tab Attractive Title</p>
                <p class="tabs-left-content-text">Dam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliqui.</p>
                <p class="tabs-left-content-text">Ex ea commodo consequat. Duis autem vel eum iriure dolor me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, </p>
             </div>
             <div class="tab-pane" id="d">
                <p class="tabs-left-content-title">Vertical Tab Last Title</p>
                <p class="tabs-left-content-text">Dam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliqui.</p>
                <p class="tabs-left-content-text">Ex ea commodo consequat. Duis autem vel eum iriure dolor me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, </p>
             </div>
            </div>
          </div>
          <!-- /tabs -->

        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
            <div class="panel-group" id="accordionBlog">
                <div class="panel panel-index">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordionBlog" href="#collapseBlogOne">
                        Web Design &#38; Development <span class="accordion-click">+</span>
                    </a>
                  </h4>
                </div>
                <div id="collapseBlogOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium .      </div>
                </div>
                </div>
                <div class="panel panel-index">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordionBlog" href="#collapseBlogTwo">
                      PHP &#38; Wordpress Coding <span class="accordion-click">+</span>
                    </a>
                  </h4>
                </div>
                <div id="collapseBlogTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium .      </div>
                </div>
                </div>
                <div class="panel panel-index">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordionBlog" href="#collapseBlogThree">
                      HTML 5 &#38; CSS 3 <span class="accordion-click">+</span>
                    </a>
                  </h4>
                </div>
                <div id="collapseBlogThree" class="panel-collapse collapse">
                  <div class="panel-body">
                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium .      </div>
                </div>
                </div>
                <div class="panel panel-index">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordionBlog" href="#collapseBlogFour">
                      Project Management <span class="accordion-click">+</span>
                    </a>
                  </h4>
                </div>
                <div id="collapseBlogFour" class="panel-collapse collapse">
                  <div class="panel-body">
                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium .      </div>
                </div>
                </div>
            </div>

        </div><!-- /.col-md-6 -->
    </div> <!-- /.row -->
    <div class="h60"></div>
    <div class="h60"></div>
</div> <!-- /.container -->

<style type="text/css">
.index-buy-theme {
    background: #607079;
    color: #FFF;
    padding: 22px;
    font-size: 18px;
}
.index-buy-theme:hover {
    color: #FFF;
}
</style>

<div class="bg-color-2 full-content">
    <div class="container">
        
        <div class="h40"></div>
        <div class="row">
            <div class="col-md-10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</div>
            <div class="col-md-2">
                <a href="#" class="index-buy-theme"><i class="fa fa-check"></i> BUY THEME</a>
            </div>
        </div>
        <div class="h40"></div>
    </div>
</div>

<div class="container">
    <div class="h80"></div>
	<div class="row hidden-xs">
    	<div class="content-header js-hide-me">
            <h2>OUR PROJECTS</h2>
            <p>Lorem ipsum dolor smit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br />tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
        </div> <!-- /.content-header -->
        <div class="h80"></div>
    </div>

    <div class="row">
        <div class="col-md-4 col-xs-6 js-hide-me tag-box tag-php tag-jquery tag-css">
            <div class="portfolio image-hover img-blur-2">
                <div class="opacity op-20 left" rel="tag-php">
                    <div class="buttons">
                        <div class="buttons_in">
                            <a href="img/team-3.jpg" class="btn btn-theme-opacity btn-sm fancybox" title="JHON DOE &raquo; Grapchic Designer"><i class="fa fa-expand"></i> ZOOM</a>
                            <a href="" class="btn btn-theme-opacity btn-sm"><i class="fa fa-eye"></i> VIEW</a>
                        </div> <!-- /.buttons_in -->
                    </div> <!-- /.buttons -->
                </div> <!-- /.opacity -->
                <img src="img/portfolio/portfolio-other-1.jpg" class="team-image img-responsive" alt="image title">
            </div>
            <span class="portfolio-description">Retro Style Camera</span>
        </div> <!-- /.col-md-3 -->
        <div class="col-md-4 col-xs-6 js-hide-me tag-box tag-css">
            <div class="portfolio image-hover img-blur-2">
                <div class="opacity op-20 left" rel="tag-css">
                    <div class="buttons">
                        <div class="buttons_in">
                            <a href="img/team-3.jpg" class="btn btn-theme-opacity btn-sm fancybox" title="JHON DOE &raquo; Grapchic Designer"><i class="fa fa-expand"></i> ZOOM</a>
                            <a href="" class="btn btn-theme-opacity btn-sm"><i class="fa fa-eye"></i> VIEW</a>
                        </div> <!-- /.buttons_in -->
                    </div> <!-- /.buttons -->
                </div> <!-- /.opacity -->
                <img src="img/portfolio/portfolio-other-2.jpg" class="team-image img-responsive" alt="image title">
            </div>
            <span class="portfolio-description">Retro Style Camera</span>
        </div> <!-- /.col-md-3 -->
        <div class="col-md-4 col-xs-6 js-hide-me tag-box tag-php tag-photoshop">
            <div class="portfolio image-hover img-blur-2">
                <div class="opacity op-20 left" rel="tag-php">
                    <div class="buttons">
                        <div class="buttons_in">
                            <a href="img/team-3.jpg" class="btn btn-theme-opacity btn-sm fancybox" title="JHON DOE &raquo; Grapchic Designer"><i class="fa fa-expand"></i> ZOOM</a>
                            <a href="" class="btn btn-theme-opacity btn-sm"><i class="fa fa-eye"></i> VIEW</a>
                        </div> <!-- /.buttons_in -->
                    </div> <!-- /.buttons -->
                </div> <!-- /.opacity -->
                <img src="img/portfolio/portfolio-other-3.jpg" class="team-image img-responsive" alt="image title">
            </div>
            <span class="portfolio-description">Retro Style Camera</span>
        </div> <!-- /.col-md-3 -->
    </div> <!-- /.row -->

</div> <!-- /.container -->
<div class="h80"></div>

<div class="blurred-pricing-table">
<section class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="price-table">
                <div class="pricing-header-style-transparent">
                    <h4>Bronz Pack</h4>
                    <p class="pricing-value"><span class="pricing-currency">$</span> 39</p>
                    <p class="pricing-duration">/month</p>
                </div>
                <ul class="pricing-ul-style-transparent">
                    <li class="pricing-first">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</li>
                    <li class="colored">Lorem ipsum dolor sit amet, consectetuer</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li class="colored">Lorem ipsum dolor sit</li>
                    <li>Lorem ipsum dolor sit amet lorem ipsum</li>
                    <li class="colored">Lorem ipsum dolor sit amet lorem ipsum</li>
                    <li>Lorem ipsum dolor  ipsum</li>
                </ul>
                <a href="" class="pricing-buy-transparent">BUY NOW</a>
            </div> <!-- /.price-table-3 -->
        </div> <!-- /.co-md-4 -->

        <div class="col-md-4">
            <div class="price-table">
                <div class="pricing-header-style-transparent">
                    <h4>Gold Pack</h4>
                    <p class="pricing-value"><span class="pricing-currency">$</span> 69</p>
                    <p class="pricing-duration">/month</p>
                </div>
                <ul class="pricing-ul-style-transparent">
                    <li class="pricing-first">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</li>
                    <li class="colored">Lorem ipsum dolor sit amet, consectetuer</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li class="colored">Lorem ipsum dolor sit</li>
                    <li>Lorem ipsum dolor sit amet lorem ipsum</li>
                    <li class="colored">Lorem ipsum dolor sit amet lorem ipsum</li>
                    <li>Lorem ipsum dolor  ipsum</li>
                </ul>
                <a href="" class="pricing-buy-transparent">BUY NOW</a>
            </div> <!-- /.price-table-3 -->
        </div> <!-- /.co-md-4 -->

        <div class="col-md-4">
            <div class="price-table">
                <div class="pricing-header-style-transparent">
                    <h4>Platinum Pack</h4>
                    <p class="pricing-value"><span class="pricing-currency">$</span> 99</p>
                    <p class="pricing-duration">/month</p>
                </div>
                <ul class="pricing-ul-style-transparent">
                    <li class="pricing-first">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</li>
                    <li class="colored">Lorem ipsum dolor sit amet, consectetuer</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li class="colored">Lorem ipsum dolor sit</li>
                    <li>Lorem ipsum dolor sit amet lorem ipsum</li>
                    <li class="colored">Lorem ipsum dolor sit amet lorem ipsum</li>
                    <li>Lorem ipsum dolor  ipsum</li>
                </ul>
                <a href="" class="pricing-buy-transparent">BUY NOW</a>
            </div> <!-- /.price-table-3 -->
        </div> <!-- /.co-md-4 --> 

    </div><!-- /.row -->
</section><!-- /.container -->
</div> <!-- /.blurred-pricing-table -->



<div class="bg-color-2 hidden-xs">
	<div class="container">
    	<div class="h100"></div>
    	<div class="content-header js-hide-me">
            <h2>OUR TEAM</h2>
            <p>Lorem ipsum dolor smit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br />tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
        </div> <!-- /.promo-text -->
        <div class="h80"></div>
        
        <style type="text/css">
                .team-style-2 {
                    margin-bottom: 20px;
                }
                .team-style-2 img {
                    height: 272px;
                }
                .team-style-2:hover > a img {
                    filter: sepia(0.3);
                    -webkit-filter: sepia(0.3);
                    -moz-filter: sepia(0.3);
                    -o-filter: sepia(0.3);
                    -ms-filter: sepia(0.3);
                }
                </style>

                <div class="row">
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-1.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-2.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-3.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-4.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-5.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-6.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-7.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-8.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="team-style-2 js-hide-me">
                            <div class="image-hover img-blur-2">
                                <div class="opacity op-20 left">
                                    <div class="buttons">
                                        <div class="buttons_in style-2">   
                                            <div class="text-white fs-20">Jhon Doe</div>
                                            <div class="text-white fs-14">Web Developer</div>
                                            <div class="h10"></div>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-theme-opacity btn-sm"><i class="fa fa-linkedin"></i></a>
                                            <div class="h10"></div>
                                            <div class="text-white fs-16">jhondoe@domain.com</div>
                                        </div> <!-- /.buttons_in -->
                                    </div> <!-- /.buttons -->
                                </div> <!-- /.opacity -->
                                 <a href="javascript:;">
                                    <img src="img/team/team-9.jpg" class="img-responsive" alt="name surname">
                                </a>
                            </div> <!-- /.image-hover -->
                        </div> <!-- /.team-style-2 -->
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
        
    </div> <!-- /.container -->
    <div class="h100"></div>
</div> <!-- /.bg-color-2 -->


<article class="container">
	<div class="h100"></div>
    <div class="content-header js-hide-me">
        <h2>TIMELINE</h2>
        <p>Lorem ipsum dolor smit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br />tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
    </div> <!-- /.content-header -->
    <div class="h80"></div>
    
   
                <div class="timeline">
                    
                    <div class="timeline-border"></div>
                    
                    <div class="row timeline-item js-hide-me">
                        <div class="col-md-5 text-right">
                            <span class="timeline-title">Foundation</span>
                        </div> <!-- /.col-md-5 -->
                        <div class="col-md-2">
                            <div class="year">
                                1992
                            </div>
                        </div> <!-- /.col-md-2 -->
                        <div class="col-md-5 text-left">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse</p>
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                    
                    
                    <div class="row timeline-item js-hide-me">
                        <div class="col-md-5 text-right">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse</p>
                        </div> <!-- /.col-md-5 -->
                        <div class="col-md-2">
                            <div class="year">
                                1998
                            </div>
                        </div> <!-- /.col-md-2 -->
                        <div class="col-md-5 text-left">
                            <span class="timeline-title">Our New Ceo</span>
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                    
                    
                    <div class="row timeline-item js-hide-me">
                        <div class="col-md-5 text-right">
                            <span class="timeline-title">Enlarge Marketplace Network</span>
                        </div> <!-- /.col-md-5 -->
                        <div class="col-md-2">
                            <div class="year">
                                2002
                            </div>
                        </div> <!-- /.col-md-2 -->
                        <div class="col-md-5 text-left">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse</p>
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                    
                    
                    <div class="row timeline-item js-hide-me">
                        <div class="col-md-5 text-right">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse</p>
                        </div> <!-- /.col-md-5 -->
                        <div class="col-md-2">
                            <div class="year">
                                2009
                            </div>
                        </div> <!-- /.col-md-2 -->
                        <div class="col-md-5 text-left">
                            <span class="timeline-title">First TV Advertising</span>
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                    
                    
                    <div class="row timeline-item js-hide-me">
                        <div class="col-md-5 text-right">
                            <span class="timeline-title">100 Completed Project</span>
                        </div> <!-- /.col-md-5 -->
                        <div class="col-md-2">
                            <div class="year">
                                2011
                            </div>
                        </div> <!-- /.col-md-2 -->
                        <div class="col-md-5 text-left">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse</p>
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                    
                    
                    <div class="row timeline-item js-hide-me">
                        <div class="col-md-5 text-right">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse</p>
                        </div> <!-- /.col-md-5 -->
                        <div class="col-md-2">
                            <div class="year">
                                2013
                            </div>
                        </div> <!-- /.col-md-2 -->
                        <div class="col-md-5 text-left">
                            <span class="timeline-title">Our New CEO -  John Doe</span>
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                    
                    
                    <div class="row timeline-item js-hide-me">
                        <div class="col-md-5 text-right">
                            <span class="timeline-title">Bigger, Biggest.</span>
                        </div> <!-- /.col-md-5 -->
                        <div class="col-md-2">
                            <div class="year">
                                Present
                            </div>
                        </div> <!-- /.col-md-2 -->
                        <div class="col-md-5 text-left">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse</p>
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                    
                    
                    <div class="timeline-border-bottom"></div>
                </div> <!-- /.timeline -->

</article> <!-- /.container -->
<div class="h120"></div>


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

<div class="clearfix"></div>


<section class="bg-color-3 hidden-xs hidden-sm">
	<article class="container client-logo-section">
    	<div class="row js-footer-slider">
        	<div class="col-md-1">
            	<div class="h40"></div>
            	<a href="javascript:;" class="navigation-button js-footer-slider-left"><i class="fa fa-angle-left"></i></a>
            </div>
            <div class="col-md-10">
                <ul class="client-logo">
                    <li><a href="javascript:;"><img src="img/client-logo/logo-graphicriver.png" /></a></li>
                    <li><a href="javascript:;"><img src="img/client-logo/logo-videohive.png" /></a></li>
                    <li><a href="javascript:;"><img src="img/client-logo/logo-themeforest.png" /></a></li>
                    <li><a href="javascript:;"><img src="img/client-logo/logo-photodune.png" /></a></li>
                    <li><a href="javascript:;"><img src="img/client-logo/logo-audiojungle.png" /></a></li>
                </ul>
                <ul class="client-logo">
                    <li><a href="javascript:;"><img src="img/client-logo/logo-graphicriver.png" /></a></li>
                    <li><a href="javascript:;"><img src="img/client-logo/logo-videohive.png" /></a></li>
                    <li><a href="javascript:;"><img src="img/client-logo/logo-themeforest.png" /></a></li>
                    <li><a href="javascript:;"><img src="img/client-logo/logo-photodune.png" /></a></li>
                    <li><a href="javascript:;"><img src="img/client-logo/logo-audiojungle.png" /></a></li>
                </ul>
    		</div> <!-- /.col-md-10 -->
            <div class="col-md-1">
            	<div class="h40"></div>
            	<a href="javascript:;" class="navigation-button js-footer-slider-right"><i class="fa fa-angle-right"></i></a>
            </div> <!-- /.col-md-1 -->
    	</div> <!-- /.row -->
    </article> <!-- /.container -->
</section>

   
   
<script>   
$(document).ready(function(e) {
	if(10 < 11)
	{
	var pageTitle_top = $('.page-title').position().top;
	$('.page-title').fadeOut(0);
	$(window).stop().scroll(function() {
		
		if($(window).scrollTop() > pageTitle_top)
		{
			$('.page-title').css({'position':'fixed', 'top':'0px'});
			$('.page-title').fadeIn();
			
		}
		else
		{
			$('.page-title').css({'position':'absolute', 'top':pageTitle_top+'px'});
			$('.page-title').fadeOut();
		
		}
		
	});
	}
});



</script>
   
    
<?php include('footer.php'); ?>