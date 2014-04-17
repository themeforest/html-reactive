<?php include('header.php'); ?>


<section class="page-header">
<div class="opacity-black">
    <div class="container">
        <h1 class="title">BLOG PAGE RIGHT SIDEBAR</h1>
        <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
        <div class="navi">
            You are here : <a href="index.html">Home</a>  > <a href="page.html">Page</a>  > <span class="active">Blog Page Right Sidebar</span>
        
        </div>
    </div> <!-- /.container -->
</div> <!-- /.opacity-black -->
</section> <!-- /.page-header -->

<style type="text/css">
.blog {
    float: left;
    margin-bottom: 88px;
}

.blog .blog-intro {
    height: auto;
    position: relative;
   width: 100%; 
}

.blog .blog-intro .blog-intro-time {
    background-color: rgba(255,255,255,0.2);
    height: 121px;
    position: absolute;
    top: 0px;
    left: 0px;
    width: 121px; 
    text-align: center;
}

.blog .blog-intro .blog-intro-time .blog-intro-time-day {
    color: #FFF;
    font-size: 48px;
    margin-top: 12px;
}

.blog .blog-intro .blog-intro-time .blog-intro-time-month {
    color: #FFF;
    font-size: 16px;
    font-weight: 300;
}

.blog .blog-intro .blog-intro-detail {
    background-color: rgba(255,255,255,0.2);
    height: 36px;
    position: absolute;
    bottom: 0px;
    left: 0px;
    padding: 0px 15px 0px 0px;
}

.blog .blog-intro .blog-intro-detail .part {
    color: #FFF;
    margin: 6px 0px 0px 16px;
    float: left;
    font-size: 16px;
    font-weight: 300;
}

.blog .blog-intro .blog-intro-img {
    height: auto;
    width: auto;
}

.blog .blog-title {
    color: #607079;
    font-size: 20px;
    margin-top: 26px;
}

.blog .blog-contex {
    color: #607079;
    font-size: 16px;
    font-weight: 300;
}

.blog-search {
    position: relative;
}

.blog-search .blog-search-input{
    border: 1px solid #607079;
    color: #607079;
    font-size: 20px;
    font-weight: 300;
    height: 58px;
    padding: 0px 16px;
    width: 100%;
}

.blog-search .blog-search-input::-webkit-input-placeholder {
    color: #607079;
    font-size: 20px;
    font-weight: 300;
}
.blog-search .blog-search-input:-moz-placeholder { /* Firefox 18- */
    color: #607079;
    font-size: 20px;
    font-weight: 300;
}
.blog-search .blog-search-input::-moz-placeholder {  /* Firefox 19+ */
    color: #607079;
    font-size: 20px;
    font-weight: 300;
}
.blog-search .blog-search-input:-ms-input-placeholder {  
    color: #607079;
    font-size: 20px;
    font-weight: 300;
}

.blog-search .blog-search-icon {
    position: absolute;
    top: 18px;
    right: 12px
}

.blog-sidebar-title {
    color: #607079;
    font-size: 20px;
    border-bottom: 1px solid #607079;
    padding-bottom: 8px;
    position: relative;
    margin: 0px;
    margin-top: 100px;
}

.blog-sidebar-title .point {
    background: #607079;
    position: absolute;
    height: 9px;
    width: 9px;
    right: 0px;
    bottom: -4px;
    border-radius: 50%;
}

ul.blog-categories {
    margin: 0px;
    padding: 0px;
    margin-top: 21px;
}

ul.blog-categories li {
    color: #607079;
    font-weight: 300;
    font-size: 16px;
    margin-left: 18px;
}

.blog-tags .label-theme {
    border: 1px solid #607079;
    border-radius: 0px;
    background: #607079;
    font-size: 16px;
    font-weight: 300;
    color: #FFF;
    display: inline-block;
    margin-top: 10px;
    margin-right: 10px;
    padding: 14px 9px;
    transition-duration: .3s;
    -ms-transition-duration: .3s;
    -o-transition-duration: .3s;
    -moz-transition-duration: .3s;
    -webkit-transition-duration: .3s;
}


.blog-tags .label-theme:hover {
    background: #fff;
    color: #607079;
}

.panel-blog {
    background-color: transparent !important;
    border-bottom: 1px solid #607079 !important;
}

.panel-blog .accordion-click {
    border: 1px solid #607079;
    border-radius: 100%;
    padding: 1px 5px;
    float: right;
}

.panel-group .panel-heading + .panel-collapse .panel-body {
    border-top: none;
}

.blog-latest-post {
    margin-top: 29px;
}
.blog-latest-post .blog-latest-post-img {
    float: left;
    border: 1px solid #607079;
}
.blog-latest-post .blog-latest-post-title {
    font-size: 16px;
    font-weight: 400;
    margin: 0px;
    margin-top: -4px;
}
.blog-latest-post .blog-latest-post-context {
    font-size: 16px;
    font-weight: 300;
    margin: 0px;
    margin-top: 7px;
}
.blog-latest-post .blog-latest-post-detail {
    font-size: 12px;
    margin: 0px;
    margin-top: 5px;
 }

.blog-socials .blog-socials-icon {
    border: 1px solid #99a4a9;
    border-radius: 100%;
    width: 50px;
    height: 50px;
    text-align: center;
    padding: 18px;
    color: #99a4a9;
    margin: 30px 0px 0px 20px;
}

.blog-socials .blog-socials-icon:first-child {
    margin-left: 0px;
}

.blog-input-group {
    position: relative;
}

.blog-input-group .blog-input {
    background-color: transparent;
    color: #607079;
    font-size: 14px;
    height: 33px;
    padding: 0px 5px;
    width: 100%;
    outline: none;
    border: 1px solid #e1e7eb;
    border-radius: 3px;
    margin-bottom: 15px;
}

.blog-input-group i.left-indexed,
.blog-input-group  i.right-indexed {
    position: absolute;
    top: 10px;
}
.blog-input-group  i.right-indexed {
    right: 12px;
}

.blog-input-group i.left-indexed {
    left: 15px;
    color: #fff;
}

.blog-input-group .blog-textarea {
    background-color: transparent;
    color: #607079;
    font-size: 14px;
    height: 98px;
    padding: 10px 5px;
    width: 100%;
    outline: none;
    border: 1px solid #e1e7eb;
    border-radius: 3px;
    margin-bottom: 20px;
}

.blog-input-group .blog-submit {
    background-color: #607079;
    border: 1px solid #e1e7eb;
    border-radius: 3px;
    color: #fff;
    height: 33px;
    font-size: 16px;
    font-weight: 300;
    width: 111px;
    padding-left: 21px;
    position: relative;
}

.blog-input-group .blog-input::-webkit-input-placeholder,
.blog-input-group .blog-textarea::-webkit-input-placeholder {
    color: #607079;
    font-size: 14px;
}
.blog-input-group .blog-input:-moz-placeholder,
 .blog-input-group .blog-textarea:-moz-placeholder { /* Firefox 18- */
    color: #607079;
    font-size: 14px;
}
.blog-input-group .blog-input::-moz-placeholder,
.blog-input-group .blog-textarea::-moz-placeholder {  /* Firefox 19+ */
    color: #607079;
    font-size: 14px;
}
.blog-input-group .blog-input:-ms-input-placeholder,
.blog-input-group .blog-textarea:-ms-input-placeholder {  
    color: #607079;
    font-size: 14px;
}

.blog-sub-title {
    color: #607079;
    font-size: 20px;
    margin: 0px;
    margin-top: 48px;
}

.blog-comment {
    margin-bottom: 40px;
}

.blog-comment .comment-img {
    border: 1px solid #607079;
    height: 76px;
    width: 76px;
    float: left;
    margin-right: 23px;
}

.blog-comment .comment-name {
    color: #607079;
    font-size: 18px;
}

.blog-comment .comment-context {
    color: #607079;
    font-size: 16px;
    font-weight: 300;
}

.blog-comment-input-group {
    position: relative;
}

.blog-comment-input-group .blog-input {
    background-color: transparent;
    color: #607079;
    font-size: 14px;
    height: 33px;
    padding: 0px 5px;
    width: 100%;
    outline: none;
    border: 1px solid #e1e7eb;
    border-radius: 3px;
    margin-bottom: 15px;
}

.blog-comment-input-group i.left-indexed,
.blog-comment-input-group  i.right-indexed {
    position: absolute;
    top: 10px;
}
.blog-comment-input-group  i.right-indexed {
    right: 28px;
}

.blog-comment-input-group i.left-indexed {
    left: 31px;
    color: #fff;
}

.blog-comment-input-group .blog-textarea {
    background-color: transparent;
    color: #607079;
    font-size: 14px;
    height: 98px;
    padding: 10px 5px;
    width: 100%;
    outline: none;
    border: 1px solid #e1e7eb;
    border-radius: 3px;
    margin-bottom: 20px;
}

.blog-comment-input-group .blog-submit {
    background-color: #607079;
    border: 1px solid #e1e7eb;
    border-radius: 3px;
    color: #fff;
    height: 33px;
    font-size: 16px;
    font-weight: 300;
    width: 111px;
    padding-left: 21px;
    position: relative;
}

.blog-comment-input-group .blog-input::-webkit-input-placeholder,
.blog-comment-input-group .blog-textarea::-webkit-input-placeholder {
    color: #607079;
    font-size: 14px;
}
.blog-comment-input-group .blog-input:-moz-placeholder,
.blog-comment-input-group .blog-textarea:-moz-placeholder { /* Firefox 18- */
    color: #607079;
    font-size: 14px;
}
.blog-comment-input-group .blog-input::-moz-placeholder,
.blog-comment-input-group .blog-textarea::-moz-placeholder {  /* Firefox 19+ */
    color: #607079;
    font-size: 14px;
}
.blog-comment-input-group .blog-input:-ms-input-placeholder,
.blog-comment-input-group .blog-textarea:-ms-input-placeholder {  
    color: #607079;
    font-size: 14px;
}


</style>


<div class="h100"></div>

<div class="container">

<div class="row">

<div class="col-md-8">

    <article class="blog">
        <div class="blog-intro">
            <div class="blog-intro-time">
                <p class="blog-intro-time-day">15</p>
                <time class="blog-intro-time-month">Apr, 2014</time>
            </div>
            <div class="blog-intro-detail">
                <span class="part"><i class="fa fa-user"></i>&nbsp;by Admin</span>
                <span class="part"><i class="fa fa-folder"></i>&nbsp;Business Category</span>
            </div>
            <div class="blog-intro-img">
                <img src="img/blog/blog-1.jpg" alt="#" class="img-responsive">
            </div>
        </div>
        <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</h5>
        <p class="blog-contex">Lorem iLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</p>
        <p class="blog-contex">Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo tyi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.Lorem ipsum dolor sit amet. </p>
        <p class="blog-contex">Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
        <p class="blog-contex">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
    
        <h5 class="blog-sub-title"><i class="fa fa-tags"></i> Tags</h5>

        <div class="blog-tags">
            <a href="" class="label label-theme">Photoshop</a>
            <a href="" class="label label-theme">Retro Photos</a>
            <a href="" class="label label-theme">Meetings</a>
            <a href="" class="label label-theme">Wordpress</a>
        </div>

        <h5 class="blog-sub-title"><i class="fa fa-comments"></i >Comments</h5>
        <div class="h20"></div>
        <div class="row">
            <div class="col-md-12 blog-comment">
                <img src="img/team/team-2.jpg" alt="#" class="comment-img img-responsive">
                <p class="comment-name">Jenniffer Doe - Company</p>
                <p class="comment-context">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-push-2 blog-comment">
                <img src="img/team/team-1.jpg" alt="#" class="comment-img img-responsive">
                <p class="comment-name">John Doe - Company</p>
                <p class="comment-context">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
            </div>
        </div>

        <h5 class="blog-sub-title"><i class="fa fa-pencil"></i> Write Your Comment</h5>
        <div class="h20"></div>
        <div class="row">
            <div class="col-md-6 blog-comment-input-group">
                <input type="text" class="blog-input" placeholder="Name*">
                <i class="fa fa-user right-indexed"></i>
            </div>
            <div class="col-md-6 blog-comment-input-group">
                <input type="text" class="blog-input" placeholder="E-Mail*">
                <i class="fa fa-user right-indexed"></i>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 blog-comment-input-group">
                <input type="text" class="blog-input" placeholder="Subject*">
                <i class="fa fa-envelope right-indexed"></i>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 blog-comment-input-group">
                <textarea class="blog-textarea" placeholder="Message*"></textarea>
                <i class="fa fa-pencil right-indexed"></i>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 blog-comment-input-group">
                <input type="submit" class="blog-submit" value="SUBMIT">
                <i class="fa fa-envelope-o left-indexed mr-5"></i>
            </div>
        </div>

    </article><!-- /article.blog -->

</div> <!-- /.col-md-8 -->

<div class="col-md-4">
    
    <div class="blog-search">
        <input type="text" class="blog-search-input" placeholder="Search">
        <i class="fa fa-search blog-search-icon"></i>
    </div>

    <h5 class="blog-sidebar-title">Categories <span class="point"></span></h5>

    <ul class="blog-categories">
        <li>Category</li>
        <li>Technology Category</li>
        <li>Videos</li>
        <li>Some Category Name Here</li>
        <li>Lorem ipsum Business Category</li>
    </ul>

    <h5 class="blog-sidebar-title">Tags Cloud <span class="point"></span></h5>

    <div class="h20"></div>

    <div class="blog-tags">
        <a href="" class="label label-theme">Photoshop</a>
        <a href="" class="label label-theme">Retro Photos</a>
        <a href="" class="label label-theme">Meetings</a>
        <a href="" class="label label-theme">Business Videos</a>
        <a href="" class="label label-theme">Wordpress</a>
        <a href="" class="label label-theme">Illustrator</a>
        <a href="" class="label label-theme">Ice</a>
        <a href="" class="label label-theme">Cold</a>
        <a href="" class="label label-theme">Commercial</a>
        <a href="" class="label label-theme">Sources</a>
    </div>

    <h5 class="blog-sidebar-title">Accordion Toggles <span class="point"></span></h5>

    <div class="panel-group" id="accordionBlog">
        <div class="panel panel-blog">
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
        <div class="panel panel-blog">
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
        <div class="panel panel-blog">
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
        <div class="panel panel-blog">
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

    <h5 class="blog-sidebar-title">Latest Posts <span class="point"></span></h5>

    <div class="blog-latest-post">
        <div class="row">
            <div class="col-md-3">
                <img src="img/post-1.jpg" alt="#" class="blog-latest-post-img img-responsive">
            </div>
            <div class="col-md-9">
                <p class="blog-latest-post-title">Lorem Ipsum Post Title</p>
                <p class="blog-latest-post-context">Lorem ipsum dolor sit amet, conse adipiscing elit. Lorem ipsum dolor..</p>
                <p class="blog-latest-post-detail">8 April, 2014 - by Admin</p>
            </div>
        </div>
    </div>

    <div class="blog-latest-post">
        <div class="row">
            <div class="col-md-3">
                <img src="img/post-2.jpg" alt="#" class="blog-latest-post-img img-responsive">
            </div>
            <div class="col-md-9">
                <p class="blog-latest-post-title">Lorem Ipsum Post Title</p>
                <p class="blog-latest-post-context">Lorem ipsum dolor sit amet, conse adipiscing elit. Lorem ipsum dolor..</p>
                <p class="blog-latest-post-detail">8 April, 2014 - by Admin</p>
            </div>
        </div>
    </div>

    <div class="blog-latest-post">
        <div class="row">
            <div class="col-md-3">
                <img src="img/post-3.jpg" alt="#" class="blog-latest-post-img img-responsive">
            </div>
            <div class="col-md-9">
                <p class="blog-latest-post-title">Lorem Ipsum Post Title</p>
                <p class="blog-latest-post-context">Lorem ipsum dolor sit amet, conse adipiscing elit. Lorem ipsum dolor..</p>
                <p class="blog-latest-post-detail">8 April, 2014 - by Admin</p>
            </div>
        </div>
    </div>

    <h5 class="blog-sidebar-title">Social Media Icons <span class="point"></span></h5>

    <div class="blog-socials">
        <a href="" class="fa fa-facebook blog-socials-icon"></a>
        <a href="" class="fa fa-twitter blog-socials-icon"></a>
        <a href="" class="fa fa-linkedin blog-socials-icon"></a>
        <a href="" class="fa fa-dribbble blog-socials-icon"></a>
        <a href="" class="fa fa-instagram blog-socials-icon"></a>
    </div>

    <h5 class="blog-sidebar-title">Contact Form Widget <span class="point"></span></h5>

    <div class="h20"></div>

    <div class="blog-input-group">
        <input type="text" class="blog-input" placeholder="Name*">
        <i class="fa fa-user right-indexed"></i>
    </div>
    <div class="blog-input-group">
        <input type="text" class="blog-input" placeholder="E-Mail*">
        <i class="fa fa-envelope right-indexed"></i>
    </div>
    <div class="blog-input-group">
        <textarea class="blog-textarea" placeholder="Message*"></textarea>
        <i class="fa fa-pencil right-indexed"></i>
    </div>
    <div class="blog-input-group">
        <input type="submit" class="blog-submit" value="SUBMIT">
        <i class="fa fa-envelope-o left-indexed mr-5"></i>
    </div>

</div> <!-- /.col-md-4 -->
</div>
</div> <!-- /.container -->

<div class="h200"></div>

<?php include('footer.php'); ?>