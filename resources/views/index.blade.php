<!DOCTYPE html>
<html>
  <head>
    <title>OLHIYS | Organisasi Lingkungan Hidup Sehat</title>
    <link rel="shortcut icon" href="images/logo-OLHIYS.png" type="image/x-icon">
    <meta name="keywords" content="" />
	  <meta name="description" content="" />
    <!-- 
    Smoothy Template 
    https://templatemo.com/tm-396-smoothy
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    
    <link href="css/templatemo_style.css" rel="stylesheet">
   	<link rel="stylesheet" href="css/templatemo_misc.css">

    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<style type="text/css">
  body{
    background-color: #72b842;
    /* background: url(images/templatemo_reasonbg.jpg); */
    background-position:center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
  }

  .header-logo{
    width: 80px;
    height: 75px;
    position: relative;
  }

  @media screen and (max-width:800px){
    .templatemo_reasonbg{
      background-position:center;
      background-size: cover;
      background-repeat: no-repeat;
      height: 100%;
    }
    #slider{
      height: 400px;
    }
  }
</style>

  </head>
  <body background="blue">
    <header>
    <!-- start menu -->
    <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="logo">
              <a href="#"><img src="images/logo-OLHIYS.png" alt="smoothy template mo" class="header-logo"> <h2 style="float: right;font-weight:bold;color:#72b842;">OLHIYS</h2></a>
            </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9">
          	<div id="top-menu">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a class="menu" href="#templatemo_home">Home</a></li>
                <li><a class="menu" href="#templatemo_berita">Berita</a></li>
                <li><a class="menu" href="#templatemo_galeri">Galeri</a></li>
                {{-- <li><a class="menu" href="#templatemo_blog">Blog</a></li> --}}
                <li><a class="menu" href="#templatemo_contact">Contact</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!-- end menu -->
    
      	<div  id="slider"  class="nivoSlider templatemo_slider">
        	<a href="#">
            <img src="images/slider/img_1_blank.jpg" alt="slide 1" />
          </a>           	
			    <a href="#"><img src="images/slider/img_2_blank.jpg" alt="slide 2" /></a>  
          <a href="#"><img src="images/slider/img_3_blank.jpg" alt="slide 3" /></a> 	        	
    	  </div>

        <div class="templatemo_caption">
          <div class="templatemo_slidetitle">OLHIY'S (Organisasi Lingkungan Hidup Yang Sehat)</div>
          <div class="clear"></div>
          <h1>Visi & Misi</h1>
          <div class="clear"></div>
          <p>Smoothy Template is from templatemo website. Download it free to edit and use this layout for your personal or commercial websites. Credit goes to <a rel="nofollow" href="https://unsplash.com" target="_parent">Unsplash</a> for photos used in this template.</p>
          <a class="btn btn-large btn-primary" href="#">Read More</a>
        </div>  
          
  </header>
  	<div class="templatemo_lightgrey_about" id="templatemo_berita">
	  <div class="container">    
      <div class="clear"></div>
      <div class="templatemo_reasonbg">
        <h2>Our blog</h2>
        <p>Check out our latest posts.</p>
        <div class="clear"></div>
        <div class="container" style="width:100%">
          @foreach ($dataBerita as $berita)                  
          <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12" style="padding-bottom: 10px;">
            <div class="templatemo_wrapperblogbox">
              <a href="#" class="fa fa-calendar tooltip1" title="{{ $berita->created_at }}"></a>
              <a href="#" class="fa fa-user tooltip2" title="{{ $berita->author }}"></a>              
            </div>
            <div class="clear"></div>
            @if ($berita->image != '')
                <img src="storage/{{ $berita->image }}" alt="{{ $berita->title }}" style="height:200px;">
            @else
                <img src="images/templatemo_blogimage03.jpg" alt="{{ $berita->title }}" style="height:200px;">
            @endif          
            <div class="clear"></div>
            <div class="templatemo_blogtext">
              <span class="left">{{ Str::limit($berita->title,30,'...') }}</span>
              <span class="right">
              <a href="showBerita/{{ $berita->slug }}" title="Click more"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></a>
              </span>
            </div>
          </div>
          @endforeach
        </div>      
      </div>
      <div class="clear"></div>
      <!--Our Portfolio Start-->
      <div class="templatemo_portfolio" id="templatemo_galeri" style="padding-top:10px;">
        <h2>Galeri</h2>
          <p>Kumpulan Dokumentasi dari kegiatan OLHYS</p>
          
          <div class="container" style="width:100%;">
            @foreach ($dataGalery as $item)
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12"  style="height:250px;">              
                <div class="portfolio-item">
                  <div class="portfolio-thumb">
                    <img src="storage/{{ $item->image }}" alt="{{ $item->title }}" style="height:250px;">
                      <div class="overlay-p">
                        <a href="storage/{{ $item->image }}" data-rel="lightbox[portfolio]">
                            <ul>                              
                                <li class="fa fa-circle"></li>
                                <li class="fa fa-circle fsmall"></li>
                                <li class="fa fa-circle"></li>
                                <li class="fa fa-circle fsmall"></li>
                                <li class="fa fa-search fa-2x"></li>
                            </ul>
                        </a>
                      </div>
                  </div> <!-- /.portfolio-thumb -->
                </div>      
              </div>
            @endforeach

          </div>
          <a class="btn btn-large btn-primary" href="#" style="margin-top:20px;">View More</a>
      </div>
      <!--Our Portfolio End-->
      <div class="clear"></div>
      <!--Our Client Start-->
      <div class="templatemo_reasonbg">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="secHeader">
                <h2 class="text-center">Our partners</h2>
                <p class="text-center">Sponsor yang selalu mendukung OLHYS</p>
              </div>
            </div>
          </div>
        </div>
        <div class="partnerWrap">
          <div class="slideshow" 
              data-cycle-fx=carousel
              data-cycle-timeout=0
              data-cycle-carousel-visible=4
              data-cycle-next="#next"
              data-cycle-prev="#prev"
              data-cycle-carousel-fluid=true
              >
              <img alt="partner 1" src="images/partners/partner1.jpg" >
              <img alt="partner 2" src="images/partners/partner2.jpg" >
              <img alt="partner 3" src="images/partners/partner3.jpg" >
              <img alt="partner 4" src="images/partners/partner4.jpg" >
              <img alt="partner 5" src="images/partners/partner5.jpg" >
              <img alt="partner 6" src="images/partners/partner6.jpg" >
              <img alt="partner 7" src="images/partners/partner7.jpg" >
              <img alt="partner 8" src="images/partners/partner8.jpg" >
          </div>
          <a href="#" id="prev">&lt;&lt; Prev </a>
          <a href="#" id="next"> Next &gt;&gt; </a>
        </div>
    	</div>
      <div class="clear"></div>
    <!--Our Client End-->
    <!--Contact Start -->
    <div class="templatemo_portfolio" id="templatemo_contact">
    	<div class="templatemo_paracenter">
        <h2>Contact us</h2>
      </div>
      <div class="clear"></div>
        <div class="container" style="padding:5px;width:100%;">
        	<div class="templatemo_paracenter">
            Pellentesque aliquam in risus eu ultrices. Suspendisse id interdum nibh. Etiam vel mattis augue, a vestibulum arcu. Nam rutrum diam dolor, eu vehicula nisl tincidunt non. Fusce tincidunt id justo eu tempor. Phasellus sit amet ante lobortis, mattis sapien id, dictum ipsum.
          </div>
            <div class="clear"></div>
          <div class="container" style="padding:5px;width:100%;">
            <div class="row">
              <div class="col-md-12">
                <div class="templatemo_maps">
                  <div class="fluid-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d428.5019120788602!2d119.91638727559204!3d-0.9527664595988282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bf107d7216b05%3A0x247ff434eb903f4d!2s2WX8%2B2J7%2C%20Jl.%20Poros%20Palu-Palolo%2C%20Mpanau%2C%20Kec.%20Sigi%20Biromaru%2C%20Kabupaten%20Sigi%2C%20Sulawesi%20Tengah%2094231!5e0!3m2!1sid!2sid!4v1664227514709!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                  </div>
                </div>
              </div>
              <div class="container" style="width: 100%;padding-left:15px;padding-right:15px;">
                <div class="row">
                  <div class="col-md-3">
                    <form role="form">
                      <div class="form-group">
                        <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name" maxlength="30">
                      </div>
                      <div class="form-group">
                        <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" maxlength="30">
                      </div>
                      <div class="form-group">
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject" maxlength="40">
                      </div>
                      <div><button type="button" class="btn btn-primary">Send Message</button></div>
                    </form>
                  </div>
                  <div class="col-md-9">
                    <div class="txtarea">
                      <textarea name="message" rows="10" class="form-control" id="message"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    <!--Contact End-->
    <!--Footer Start-->
    <div class="templatemo_footer">
    	<div class="container">
       	  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            	<h2>About OLHYS</h2>
                <p>Etiam faucibus turpis id ipsum egestas porta. Cras in aliquet purus, ac varius turpis. Proin nibh mauris, lacinia at tincidunt egestas, tincidunt eleifend urna. Aliquam erat volutpat.</p>
          </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            	<h2>Services</h2>
                <ul>
                  <li><a href="admin"> Administrator </a></li>
                  <li>Quisque eget mi felis</li>
                  <li>Mauris placerat lacinia</li>
                  <li>Cras molestie imperdiet</li>
                  <li>Duis vel consectetur</li>
                </ul>
                <div class="clear"></div>
                <div class="templatemo_morelink"><a href="#">and more... </a></div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            	<h2>Flicker</h2>
					<div id="templatemo_flicker" >
          <ul class="nobullet footer_gallery">
                <li><a href="images/flicker/1.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s1.jpg" alt="image 1" /></a></li>
                <li><a href="images/flicker/2.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s2.jpg" alt="image 2" /></a></li>
                <li><a href="images/flicker/3.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s3.jpg" alt="image 3" /></a></li>
                <li><a href="images/flicker/4.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s4.jpg" alt="image 4" /></a></li>
                <li><a href="images/flicker/5.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s5.jpg" alt="image 5" /></a></li>
          	    <li><a href="images/flicker/6.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s6.jpg" alt="image 6" /></a></li>
                <li><a href="images/flicker/7.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s7.jpg" alt="image 7" /></a></li>
                <li><a href="images/flicker/8.jpg" data-rel="lightbox[gallery]"><img src="images/flicker/s8.jpg" alt="image 8" /></a></li>
            </ul>
            <br style="clear: left" />
        </div>
          </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            <h2>Contact</h2>
            	<span class="left col-xs-1 fa fa-map-marker"></span>
                <span class="right col-xs-11">120-240 Nam bibendum consectetur diam et fringilla</span>
                <div class="clear height10"></div>
                <span class="left col-xs-1 fa fa-phone"></span>
                <span class="right col-xs-11">010-020-0680</span>
                <div class="clear height10"></div>
                <span class="left col-xs-1 fa fa-envelope"></span>
                <span class="right col-xs-11">contact@company.com</span>
                <div class="clear height10"></div>
                <span class="left col-xs-1 fa fa-globe"></span>
                <span class="right col-xs-11">www.company.com</span>
                <div class="clear"></div>
            </div>
        </div>
    </div>
   <!--Footer End-->
	  <!-- Bottom Start -->
    <div class="templatemo_bottom">
    	<div class="container" style="width: 100%;">
        	<div class="row" style="padding-left:10px;padding-right:10px;">
            	<div class="left">
                	<span>Copyright ?? 2022 <a href="#">Zul Hisyam</a> 
                    
                    . Design: <a rel="nofollow" href="#">Template Mo</a></span>
              </div>
                <div class="right">
                	<a href="#"><div class="fa fa-rss soc"></div></a>
                    <a href="#"><div class="fa fa-twitter soc"></div></a>
                    <a href="#"><div class="fa fa-linkedin soc"></div></a>
                    <a href="#"><div class="fa fa-dribbble soc"></div></a>
                    <a href="#"><div class="fa fa-facebook soc"></div></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom End -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          } 
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){ 
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1}); 
          } 

          if($.cookie('view') == 'grid'){ 
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){   
              $.cookie('view', 'list'); 
              get_list()
          });

          $('#grid').click(function(){ 
              $.cookie('view', 'grid'); 
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');
              
              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn(); 
              
          });
      });
    </script>
	  <script src="js/jquery.singlePageNav.js"></script>
	
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      
      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
      <script>
     $('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
	});
      </script>
      
      <script> <!-- scroll to specific id when click on menu -->
      	 // Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});
      </script>
</body>
</html>