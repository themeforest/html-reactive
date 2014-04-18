<?php include('header.php'); ?>


<section class="page-header">
<div class="opacity-black">
    <div class="container">
        <h1 class="title">PORTFOLIO</h1>
        <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
        <div class="navi">
            You are here : <a href="index.html">Home</a>  > <a href="page.html">Portfolio Inner Page</a>
        
        </div>
    </div> <!-- /.container -->
</div> <!-- /.opacity-black -->
</section> <!-- /.page-header -->

<style type="text/css">
.porfolio-gallery .porfolio-gallery-bg {
    position: relative;
    height: auto;
    position: relative;
    height: 341px;
}

.porfolio-gallery .porfolio-gallery-bg img {
    border: 1px solid #607079;
    position: absolute;
    display: none;
}

.porfolio-gallery .porfolio-gallery-thumb {
    margin-top: 25px;
}

.porfolio-gallery .porfolio-gallery-thumb a {
    margin-left: 25px;
    float: left;
    height: 78px;
    width: 120px;
}

.porfolio-gallery .porfolio-gallery-thumb a:first-child {
    margin-left: 0px;
}

.porfolio-gallery .porfolio-gallery-thumb a img {
    height: inherit;
    border: 1px solid #607079;
    width: inherit;
}

.portfolio-detail {}

.portfolio-detail .portfolio-detail-title {
    color: #607079;
    font-size: 20px;
    font-weight: 300;
    margin: 0px;
    padding: 0px;
}

.portfolio-detail .portfolio-detail-context {
    color: #607079;
    font-size: 16px;
    font-weight: 300;
    margin: 0px;
    margin-top: 14px;
    padding: 0px;
    line-height: 18px;
}

.portfolio-detail .portfolio-detail-sub-context {
    color: #607079;
    font-size: 16px;
    font-weight: 300;
    margin: 0px;
    margin-top: 8px !important;
    padding: 0px;
}

.portfolio-detail .portfolio-detail-sub-context.first {
    margin-top: 48px !important;
}

.portfolio-detail .portfolio-detail-sub-context span {
    font-weight: normal;
}

</style>

<script type="text/javascript">
var portfolioGallery = function(root) {
    var me = this;
    me.root = $(root);
    var _init = function(element) {
        var thumbs  = element.find(".porfolio-gallery-thumb"),
        thumb       = thumbs.find("a"),
        bgImgs      = $(".porfolio-gallery-bg"),
        bgImg       = bgImgs.find("img");
        bgImg.eq(0).fadeIn();
        thumb.on('click',this,function(event){
            event.preventDefault();
            thisIndex = $(this).index();
            bgImg.eq(thisIndex).siblings().fadeOut().end().fadeIn();
        });
    }

    me.root.each(function(){
        new _init( $(this) );
    });
}

$(document).ready(function(){
    new portfolioGallery(".porfolio-gallery");
});
</script>

<div class="h100"></div>

<section class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="porfolio-gallery">
                <div class="porfolio-gallery-bg">
                    <img src="img/portfolio/gallery-bg/1.jpg" class="img-responsive" alt="#">
                    
                    <img src="img/portfolio/gallery-bg/3.jpg" class="img-responsive" alt="#">
                    <img src="img/portfolio/gallery-bg/4.jpg" class="img-responsive" alt="#">
                    <img src="img/portfolio/gallery-bg/5.jpg" class="img-responsive" alt="#">
                    
                </div>

                <div class="porfolio-gallery-thumb">
                    <a href="#"><img src="img/portfolio/gallery-thumb/1.jpg" class="img-responsive" alt="#"></a>
                    <a href="#"><img src="img/portfolio/gallery-thumb/2.jpg" class="img-responsive" alt="#"></a>
                    <a href="#"><img src="img/portfolio/gallery-thumb/3.jpg" class="img-responsive" alt="#"></a>
                    <a href="#"><img src="img/portfolio/gallery-thumb/4.jpg" class="img-responsive" alt="#"></a>
                </div>

            </div>
        </div><!-- /.col-md-6 -->

        <div class="col-md-6">
            
            <div class="portfolio-detail">
                <h3 class="portfolio-detail-title">Portfolio Item Title</h3>
                <p class="portfolio-detail-context">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Lorem ipsum dolor sit amet.</p>
                <p class="portfolio-detail-context">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <p class="portfolio-detail-context">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                
                <p class="portfolio-detail-sub-context first"><span>Project Title:</span> Touch Watch</p>
                <p class="portfolio-detail-sub-context"><span>Client Name:</span> Company Name Here</p>
                <p class="portfolio-detail-sub-context"><span>Client Website:</span> www.company.com</p>
                <p class="portfolio-detail-sub-context"><span>Team Members:</span> John Doe, Patrick Doe, Jenniffer John, Patrick Jeniffer</p>
            </div>

        </div><!-- /.col-md-6 -->

    </div> <!-- /.row -->

    <div class="row">
        <div class="col-md-12">
            <div class="content-line">
                <h4><span class="active"><i class="fa fa-file"></i> Contact Us</h4>
                <div class="triangle"></div>
            </div>


      <div class="text-center js-hide-me">
        <a class="btn btn-default btn-filter selected" data-tag="">All</a>
     
        <a class="btn btn-default btn-filter" data-tag="photoshop">Photoshop</a>
   
        <a class="btn btn-default btn-filter" data-tag="css">Css</a>
 
        <a class="btn btn-default btn-filter" data-tag="jquery">jQuery</a>

        <a class="btn btn-default btn-filter" data-tag="php">Php</a>
    </div>
    <div class="h40"></div>
    
    
    
    
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
   
    
    <script>
    /* portfolio */
    $('.btn-filter').click(function() {
        $('.btn-filter').removeClass('selected');
        $(this).addClass('selected');
        
        var tag = $(this).data('tag');
        var box = $('.tag-box');
        box.stop(true, true)
        .animate({
        opacity: '0'},{
        duration: 300,
        complete: function(){
            box.hide();
            $('.tag-'+tag).show();
            $('.tag-'+tag).animate({opacity: '1'}, {
                duration: 300
            });
            
            if(tag == '')
            {
                box.show();
                box.animate({opacity: '1'}, {
                    duration: 300
                });
            }
        }});
    });
    </script>
    



        </div><!-- /.col-md-12 -->
    </div> <!-- /.row -->

</section> <!-- /.container -->

<div class="h100"></div>
    
<?php include('footer.php'); ?>