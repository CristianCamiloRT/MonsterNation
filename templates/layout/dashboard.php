<?php $cakeDescription = 'Monster Nation'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> -->

        <?= $this->Html->css(['bootstrap.min', 'style', 'responsive', 'colors', 'bootstrap-select', 'perfect-scrollbar', 'custom']) ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>
<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="index.html"><img class="logo_icon img-responsive" src="./img/logo_icon.png" alt="#" /></a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <div class="user_img"><img class="img-responsive" src="./img/user_img.jpg" alt="#" /></div>
                     <div class="user_info">
                        <h6>Admin</h6>
                        <p><span class="online_animation"></span> Online</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <h4>Menú</h4>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users yellow_color"></i> <span>Usuarios</span></a>
                     <ul class="collapse list-unstyled" id="dashboard">
                        <li>
                           <a href="dashboard.html">> <span>Crear Usuario</span></a>
                        </li>
                        <li>
                           <a href="dashboard_2.html">> <span>Usuarios</span></a>
                        </li>
                     </ul>
                  </li>
                  <!-- <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
                  <li>
                     <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                     <ul class="collapse list-unstyled" id="element">
                        <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                        <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        <li><a href="icons.html">> <span>Icons</span></a></li>
                        <li><a href="invoice.html">> <span>Invoice</span></a></li>
                     </ul>
                  </li>
                  <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                  <li>
                     <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                     <ul class="collapse list-unstyled" id="apps">
                        <li><a href="email.html">> <span>Email</span></a></li>
                        <li><a href="calendar.html">> <span>Calendar</span></a></li>
                        <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                     </ul>
                  </li>
                  <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                  <li>
                     <a href="contact.html">
                     <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                  </li>
                  <li class="active">
                     <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                     <ul class="collapse list-unstyled" id="additional_page">
                        <li>
                           <a href="profile.html">> <span>Profile</span></a>
                        </li>
                        <li>
                           <a href="project.html">> <span>Projects</span></a>
                        </li>
                        <li>
                           <a href="login.html">> <span>Login</span></a>
                        </li>
                        <li>
                           <a href="404_error.html">> <span>404 Error</span></a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                  <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                  <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li> -->
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                           <!-- <ul>
                              <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                              <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                              <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                           </ul> -->
                           <ul class="user_profile_dd">
                              <li>
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">Admin</span></a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="profile.html">My Profile</a>
                                    <a class="dropdown-item" href="settings.html">Settings</a>
                                    <a class="dropdown-item" href="help.html">Help</a>
                                    <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <?= $this->fetch('content') ?>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                           <p>Copyright © 2022 - Monster Nation.<br><br>
                           Universidad Compensar
                           </p>
                     </div>
                  </div>
            </div>
            <!-- end dashboard inner -->
         </div>
      </div>
   </div>
   <?= $this->Html->script(['jquery.min', 'popper.min', 'bootstrap.min', 'animate', 'bootstrap-select', 'owl.carousel', 'Chart.min', 'Chart.bundle.min', 'utils', 'analyser', 'perfect-scrollbar.min', 'custom', 'chart_custom_style1']) ?>
   <?= $this->fetch('script') ?>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
</body>
</html>
