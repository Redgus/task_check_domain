

<html lang="en">
    <head>
       <script async="" src="https://query.yahooapis.com/v1/public/yql?format=json&amp;rnd=20224322&amp;diagnostics=true&amp;callback=jQuery11020023592769610202957_1652291253633&amp;q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.placefinder%20where%20text=%22Seattle%22%20and%20gflags=%22R%22%20limit%201)%20and%20u=%22c%22&amp;_=1652291253634"></script>
       <meta charset="utf-8">
       <title>{{ env('APP_NAME') }}</title>
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
       <meta name="apple-mobile-web-app-capable" content="yes">
       <meta name="apple-touch-fullscreen" content="yes">
       <meta name="description" content="{{ env('APP_NAME') }}">
       <meta name="author" content="KaijuThemes">
       <link href="http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700" rel="stylesheet" type="text/css">
       <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700" rel="stylesheet" type="text/css">
       <!--[if lt IE 10]>
       <script type="text/javascript" src="assets/js/media.match.min.js"></script>
       <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
       <![endif]-->
       <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
       <!-- Font Awesome -->
       <link type="text/css" href="assets/css/styles.css" rel="stylesheet">
       <!-- Core CSS with all styles -->
       <link type="text/css" href="assets/plugins/jstree/dist/themes/avenger/style.min.css" rel="stylesheet">
       <!-- jsTree -->
       <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">
       <!-- Code Prettifier -->
       <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
       <!-- iCheck -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
       <!--[if lt IE 9]>
       <link type="text/css" href="assets/css/ie8.css" rel="stylesheet">
       <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
       <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
       <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
       <![endif]-->
       <!-- The following CSS are included as plugins and can be removed if unused-->
       <style>
          /*To make sure there is modal displayed with this class for demo*/
          .visiblemodal {
          position: relative;
          top: auto;
          right: auto;
          left: auto;
          bottom: auto;
          z-index: 1;
          display: block;
          overflow: hidden;
          }
       </style>
       <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
    </head>
    <body class="infobar-offcanvas" style="">
       <div id="headerbar">
          <div class="container-fluid">
             <div class="row">
                <div class="col-xs-6 col-sm-2">
                   <a href="#" class="shortcut-tile tile-brown">
                      <div class="tile-body">
                         <div class="pull-left"><i class="fa fa-pencil"></i></div>
                      </div>
                      <div class="tile-footer">
                         Create Post
                      </div>
                   </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                   <a href="#" class="shortcut-tile tile-grape">
                      <div class="tile-body">
                         <div class="pull-left"><i class="fa fa-group"></i></div>
                         <div class="pull-right"><span class="badge">2</span></div>
                      </div>
                      <div class="tile-footer">
                         Contacts
                      </div>
                   </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                   <a href="#" class="shortcut-tile tile-primary">
                      <div class="tile-body">
                         <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                         <div class="pull-right"><span class="badge">10</span></div>
                      </div>
                      <div class="tile-footer">
                         Messages
                      </div>
                   </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                   <a href="#" class="shortcut-tile tile-inverse">
                      <div class="tile-body">
                         <div class="pull-left"><i class="fa fa-camera"></i></div>
                         <div class="pull-right"><span class="badge">3</span></div>
                      </div>
                      <div class="tile-footer">
                         Gallery
                      </div>
                   </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                   <a href="#" class="shortcut-tile tile-midnightblue">
                      <div class="tile-body">
                         <div class="pull-left"><i class="fa fa-cog"></i></div>
                      </div>
                      <div class="tile-footer">
                         Settings
                      </div>
                   </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                   <a href="#" class="shortcut-tile tile-orange">
                      <div class="tile-body">
                         <div class="pull-left"><i class="fa fa-wrench"></i></div>
                      </div>
                      <div class="tile-footer">
                         Plugins
                      </div>
                   </a>
                </div>
             </div>
          </div>
       </div>
       <header id="topnav" class="navbar navbar-midnightblue navbar-fixed-top clearfix" role="banner">
          <div class="row">

            <div class="col-md5">
               
               <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
               <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
               </span>
            </div>

            <div class="col-md-5">

               <h3 style="color:rgb(225, 231, 240); margin-bottom:0px;"> {{ env('APP_NAME') }} </h3>
            </div>

            <div class="col-md-5">

               <div class="yamm navbar-left navbar-collapse collapse in">
                  <ul class="nav navbar-nav">
                  </ul>
               </div>
            </div>

          </div>
       </header>
       <div id="wrapper">
          <div id="layout-static">
             <div class="static-sidebar-wrapper sidebar-midnightblue">
                <div class="static-sidebar" style="top: 50px;">
                   <div class="sidebar">
                      <div class="widget stay-on-collapse" id="widget-sidebar">
                         <nav role="navigation" class="widget-body">
                            <ul class="acc-menu">
                              <li><a href="{{ route('domain') }}"><i class="fa fa-home"></i><span>Продукт</span></a></li>
                            </ul>
                         </nav>
                      </div>
                   </div>
                </div>
             </div>
             <div class="static-content-wrapper">
                <div class="static-content">
                   <div class="page-content">
                      <ol class="breadcrumb">
                         
                         <li class="active">/<a href="#">@yield('title')</a></li>
                      </ol>
                      <div class="page-heading">
                         <h1>@yield('title')</h1>
                      </div>
                      <div class="container-fluid">

                        @yield('content')

                      </div>
                      <!-- .container-fluid -->
                   </div>
                   <!-- #page-content -->
                </div>
                <footer role="contentinfo">
                   <div class="clearfix">
                      <ul class="list-unstyled list-inline pull-left">
                         <li>
                            <h6 style="margin: 0;"> © 2022 {{ env('APP_NAME') }}</h6>
                         </li>
                      </ul>
                      <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
                   </div>
                </footer>
             </div>
          </div>
       </div>
       <div class="infobar-wrapper scroll-pane has-scrollbar">
          <div class="infobar scroll-content" tabindex="0" style="right: -17px;">
             <div id="widgetarea">
                <div class="widget" id="widget-sparkline">
                   <div class="widget-heading">
                      <a href="javascript:;" data-toggle="collapse" data-target="#sparklinestats">
                         <h4>Sparkline Stats</h4>
                      </a>
                   </div>
                   <div id="sparklinestats" class="collapse in">
                      <div class="widget-body">
                         <ul class="sparklinestats">
                            <li>
                               <div class="title">Earnings</div>
                               <div class="stats">$22,500</div>
                               <div class="sparkline" id="infobar-earningsstats" style="100%">
                                  <canvas width="199" height="32" style="display: inline-block; width: 199px; height: 32px; vertical-align: top;"></canvas>
                               </div>
                            </li>
                            <li>
                               <div class="title">Orders</div>
                               <div class="stats">4,750</div>
                               <div class="sparkline" id="infobar-orderstats" style="100%">
                                  <canvas width="199" height="32" style="display: inline-block; width: 199px; height: 32px; vertical-align: top;"></canvas>
                               </div>
                            </li>
                         </ul>
                         <a href="#" class="more">More Sparklines</a>
                      </div>
                   </div>
                </div>
                <div class="widget">
                   <div class="widget-heading">
                      <a href="javascript:;" data-toggle="collapse" data-target="#recentactivity">
                         <h4>Recent Activity</h4>
                      </a>
                   </div>
                   <div id="recentactivity" class="collapse in">
                      <div class="widget-body">
                         <ul class="recent-activities">
                            <li>
                               <div class="avatar">
                                  <img src="http://placehold.it/300&amp;text=Placeholder" class="img-responsive img-circle">
                               </div>
                               <div class="content">
                                  <span class="msg"><a href="#" class="person">Jean Alanis</a> invited 3 unconfirmed members</span>
                                  <span class="time">2 mins ago</span>
                               </div>
                            </li>
                            <li>
                               <div class="avatar">
                                  <img src="http://placehold.it/300&amp;text=Placeholder" class="img-responsive img-circle">
                               </div>
                               <div class="content">
                                  <span class="msg"><a href="#" class="person">Anthony Ware</a> is now following you</span>
                                  <span class="time">4 hours ago</span>
                               </div>
                            </li>
                            <li>
                               <div class="avatar">
                                  <img src="http://placehold.it/300&amp;text=Placeholder" class="img-responsive img-circle">
                               </div>
                               <div class="content">
                                  <span class="msg"><a href="#" class="person">Bruce Ory</a> commented on <a href="#">Dashboard UI</a></span>
                                  <span class="time">16 hours ago</span>
                               </div>
                            </li>
                            <li>
                               <div class="avatar">
                                  <img src="http://placehold.it/300&amp;text=Placeholder" class="img-responsive img-circle">
                               </div>
                               <div class="content">
                                  <span class="msg"><a href="#" class="person">Roxann Hollingworth</a>is now following you</span>
                                  <span class="time">Feb 13, 2015</span>
                               </div>
                            </li>
                         </ul>
                         <a href="#" class="more">See all activities</a>
                      </div>
                   </div>
                </div>
                <div class="widget">
                   <div class="widget-heading">
                      <a href="javascript:;" data-toggle="collapse" data-target="#widget-milestones">
                         <h4>Milestones</h4>
                      </a>
                   </div>
                   <div id="widget-milestones" class="collapse in">
                      <div class="widget-body">
                         <div class="contextual-progress">
                            <div class="clearfix">
                               <div class="progress-title">UI Design</div>
                               <div class="progress-percentage">12/16</div>
                            </div>
                            <div class="progress">
                               <div class="progress-bar progress-bar-lime" style="width: 75%"></div>
                            </div>
                         </div>
                         <div class="contextual-progress">
                            <div class="clearfix">
                               <div class="progress-title">UX Design</div>
                               <div class="progress-percentage">8/24</div>
                            </div>
                            <div class="progress">
                               <div class="progress-bar progress-bar-orange" style="width: 33.3%"></div>
                            </div>
                         </div>
                         <div class="contextual-progress">
                            <div class="clearfix">
                               <div class="progress-title">Frontend Development</div>
                               <div class="progress-percentage">8/40</div>
                            </div>
                            <div class="progress">
                               <div class="progress-bar progress-bar-purple" style="width: 20%"></div>
                            </div>
                         </div>
                         <div class="contextual-progress m0">
                            <div class="clearfix">
                               <div class="progress-title">Backend Development</div>
                               <div class="progress-percentage">24/48</div>
                            </div>
                            <div class="progress">
                               <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                            </div>
                         </div>
                         <a href="#" class="more">See All</a>
                      </div>
                   </div>
                </div>
                <div class="widget">
                   <div class="widget-heading">
                      <a href="javascript:;" data-toggle="collapse" data-target="#widget-contact">
                         <h4>Contacts</h4>
                      </a>
                   </div>
                   <div id="widget-contact" class="collapse in">
                      <div class="widget-body">
                         <ul class="contact-list">
                            <li id="contact-1">
                               <a href="javascript:;"><img src="http://placehold.it/300&amp;text=Placeholder" alt=""><span>Jeremy Potter</span></a>
                               <!-- <div class="contact-card contactdetails" data-child-of="contact-1">
                                  <div class="avatar">
                                      <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                  </div>
                                  <span class="contact-name">Jeremy Potter</span>
                                  <span class="contact-status">Client Representative</span>
                                  <ul class="details">
                                      <li><a href="#"><i class="fa fa-envelope-o"></i>&nbsp;p.bateman@gmail.com</a></li>
                                      <li><i class="fa fa-phone"></i>&nbsp;+1 234 567 890</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp;Hollywood Hills, California</li>
                                  </ul>
                                  </div> -->
                            </li>
                            <li id="contact-2">
                               <a href="javascript:;"><img src="http://placehold.it/300&amp;text=Placeholder" alt=""><span>David Tennant</span></a>
                               <!-- <div class="contact-card contactdetails" data-child-of="contact-2">
                                  <div class="avatar">
                                      <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                  </div>
                                  <span class="contact-name">David Tennant</span>
                                  <span class="contact-status">Client Representative</span>
                                  <ul class="details">
                                      <li><a href="#"><i class="fa fa-envelope-o"></i>&nbsp;p.bateman@gmail.com</a></li>
                                      <li><i class="fa fa-phone"></i>&nbsp;+1 234 567 890</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp;Hollywood Hills, California</li>
                                  </ul>
                                  </div> -->
                            </li>
                            <li id="contact-3">
                               <a href="javascript:;"><img src="http://placehold.it/300&amp;text=Placeholder" alt=""><span>Anna Johansson</span></a>
                               <!-- <div class="contact-card contactdetails" data-child-of="contact-3">
                                  <div class="avatar">
                                      <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                  </div>
                                  <span class="contact-name">Anna Johansson</span>
                                  <span class="contact-status">Client Representative</span>
                                  <ul class="details">
                                      <li><a href="#"><i class="fa fa-envelope-o"></i>&nbsp;p.bateman@gmail.com</a></li>
                                      <li><i class="fa fa-phone"></i>&nbsp;+1 234 567 890</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp;Hollywood Hills, California</li>
                                  </ul>
                                  </div> -->
                            </li>
                            <li id="contact-4">
                               <a href="javascript:;"><img src="http://placehold.it/300&amp;text=Placeholder" alt=""><span>Alan Doyle</span></a>
                               <!-- <div class="contact-card contactdetails" data-child-of="contact-4">
                                  <div class="avatar">
                                      <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                  </div>
                                  <span class="contact-name">Alan Doyle</span>
                                  <span class="contact-status">Client Representative</span>
                                  <ul class="details">
                                      <li><a href="#"><i class="fa fa-envelope-o"></i>&nbsp;p.bateman@gmail.com</a></li>
                                      <li><i class="fa fa-phone"></i>&nbsp;+1 234 567 890</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp;Hollywood Hills, California</li>
                                  </ul>
                                  </div> -->
                            </li>
                            <li id="contact-5">
                               <a href="javascript:;"><img src="http://placehold.it/300&amp;text=Placeholder" alt=""><span>Simon Corbett</span></a>
                               <!-- <div class="contact-card contactdetails" data-child-of="contact-5">
                                  <div class="avatar">
                                      <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                  </div>
                                  <span class="contact-name">Simon Corbett</span>
                                  <span class="contact-status">Client Representative</span>
                                  <ul class="details">
                                      <li><a href="#"><i class="fa fa-envelope-o"></i>&nbsp;p.bateman@gmail.com</a></li>
                                      <li><i class="fa fa-phone"></i>&nbsp;+1 234 567 890</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp;Hollywood Hills, California</li>
                                  </ul>
                                  </div> -->
                            </li>
                            <li id="contact-6">
                               <a href="javascript:;"><img src="http://placehold.it/300&amp;text=Placeholder" alt=""><span>Polly Paton</span></a>
                               <!-- <div class="contact-card contactdetails" data-child-of="contact-6">
                                  <div class="avatar">
                                      <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                  </div>
                                  <span class="contact-name">Polly Paton</span>
                                  <span class="contact-status">Client Representative</span>
                                  <ul class="details">
                                      <li><a href="#"><i class="fa fa-envelope-o"></i>&nbsp;p.bateman@gmail.com</a></li>
                                      <li><i class="fa fa-phone"></i>&nbsp;+1 234 567 890</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp;Hollywood Hills, California</li>
                                  </ul>
                                  </div> -->
                            </li>
                         </ul>
                         <a href="#" class="more">See All</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="scroll-track">
             <div class="scroll-thumb" style="height: 296px; transform: translate(0px, 0px);"></div>
          </div>
       </div>
       <!-- Switcher -->
       <!-- /Switcher -->
       <!-- Load site level scripts -->
       <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
          <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->
       <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
       <script type="text/javascript" src="assets/js/jqueryui-1.9.2.min.js"></script> 							<!-- Load jQueryUI -->
       <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
       <script type="text/javascript" src="assets/plugins/easypiechart/jquery.easypiechart.js"></script> 		<!-- EasyPieChart-->
       <script type="text/javascript" src="assets/plugins/sparklines/jquery.sparklines.min.js"></script>  		<!-- Sparkline -->
       <script type="text/javascript" src="assets/plugins/jstree/dist/jstree.min.js"></script>  				<!-- jsTree -->
       <script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
       <script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->
       <script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->
       <script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->
       <script type="text/javascript" src="assets/js/enquire.min.js"></script> 									<!-- Enquire for Responsiveness -->
       <script type="text/javascript" src="assets/plugins/bootbox/bootbox.js"></script>							<!-- Bootbox -->
       <script type="text/javascript" src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->
       <script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
       <script type="text/javascript" src="assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> 	<!-- Mousewheel support needed for jScrollPane -->
       <script type="text/javascript" src="assets/js/application.js"></script>
       <script type="text/javascript" src="assets/demo/demo.js"></script>
       <script type="text/javascript" src="assets/demo/demo-switcher.js"></script>

       <script type="text/javascript" src="assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js"></script>
       <script type="text/javascript" src="assets/demo/demo-mask.js"></script>
       <!-- End loading site level scripts -->
       <!-- Load page level scripts-->
       <!-- End loading page level scripts-->
       <ul class="vakata-context"></ul>
       <div id="jstree-marker" style="display: none;">&nbsp;</div>
    </body>
 </html> 