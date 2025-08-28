<?php
include 'includes/deconnexion.php'; 
?>
<div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
               
                  <div class="sidebar_user_info">
                     
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" width="150" height="80" src="images/employe.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>employee</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="dashboard_employee" data-toggle="collapse" aria-expanded="false"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard_employee.php">> <span>Dashboard</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="conge.php"><i class="fa fa-clock-o orange_color"></i> <span>gestion des congée</span></a></li>
                     <li><a href="formation.php"><i class="fa fa-clock-o orange_color"></i> <span>gestion des formations</span></a></li>
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
                           <a href="index.php"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/employe.jpg" alt="#" /><span class="name_user">employe</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item"  href="?logout=true"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>