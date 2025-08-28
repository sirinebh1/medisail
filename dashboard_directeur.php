<?php include 'includes/connect.php'; ?>
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
   <title>MEDISAIL</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="css/custom.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
   <?php include 'header_directeur.php' ?>
   <div class="midde_cont">
      <div class="container-fluid">
         <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>Dashboard</h2>
               </div>
            </div>
         </div>
         <div class="row column1">
            <div class="col-md-6 col-lg-3">
               <div class="full counter_section margin_bottom_30">
                  <div class="couter_icon">
                     <div>
                        <i class="fa fa-user yellow_color"></i>
                     </div>
                  </div>
                  <div class="counter_no">
                     <div>
                        <p class="total_no">4</p>
                        <p class="head_couter" data-toggle="modal" data-target="#myModal2">Liste des employée</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row column1">
               <div class="col-md-6 col-lg-12">
                  <div class="full counter_section margin_bottom_30">
                     <div class="couter_icon">
                        <div>
                           <i class="fa fa-user yellow_color"></i>
                        </div>
                     </div>
                     <div class="counter_no">
                        <div>
                           <p class="total_no">1</p>
                           <p class="head_couter" data-toggle="modal" data-target="#exampleModal">Liste des staigaire</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
               <div class="heading1 margin_0">
                  <h2>mettre à jour</h2>
               </div>
            </div>
            <div class="full progress_bar_inner">
               <div class="row">
                  <div class="col-md-12">
                     <div class="msg_list_main">
                        <ul class="msg_list">
                           <li>
                              <span>
                                 <span class="name_user">réunion</span>
                                 <span class="msg_user">pour discuter un prbleme</span>
                                 <span class="time_ago">9:00Am</span>
                              </span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row column2 graph">
      <div class="col-md-12">
         <div class="dash_blog">
            <div class="dash_blog_inner">
               <div class="dash_head">
                  <h3 data-toggle="modal" data-target="#exampleModalCenter">
                     <span><i class="fa fa-calendar">3 mai 2023</i></span><span class="plus_green_bt">+</span>
                  </h3>
               </div>
               <div class="list_cont">
                  <p>Tâches d'aujourd'hui pour vous</p>
               </div>
               <div class="task_list_main">
                  <ul class="task_list">
                     <li><a href="#">Réunion sur le plan pour le modèle d'administration </a><br><strong>10:00 AM</strong></li>
                  </ul>
               </div>

            </div>
         </div>
      </div>
   </div>
   </div>
   </div>
   <!-- end dashboard inner -->
   </div>
   </div>
   </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">liste de staigaire</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <ul>
                  <?php
                  $user = $con->prepare('SELECT * FROM `stagiaire`  ');
                  $user->execute();
                  while ($data = $user->fetch()) {
                  ?>
                     <li>
                        <span class="name_user"><?php echo $data['nom'] . " " . $data['prenom']; ?></span>
                     </li>

                     </span>

                  <?php } ?>
               </ul>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">liste de employee</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <ul>
                  <?php
                  $user = $con->prepare('SELECT u.*,ru.role FROM `user` u INNER JOIN role_user ru ON(ru.id = u.`id_role`)ORDER BY `date_ambuche` DESC LIMIT 10');
                  $user->execute();
                  while ($data = $user->fetch()) {
                  ?>
                     <li>

                        <span class="name_user"><?php echo $data['nom'] . " " . $data['prenom']; ?></span>
                        <span class="msg_user"><?php echo $data['role']; ?></span>
                        <!-- <span class="time_ago">12 min ago</span> -->
                        </span>
                     </li>
                  <?php } ?>
               </ul>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="js/animate.js"></script>
   <!-- select country -->
   <script src="js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="js/owl.carousel.js"></script>
   <!-- chart js -->
   <script src="js/Chart.min.js"></script>
   <script src="js/Chart.bundle.min.js"></script>
   <script src="js/utils.js"></script>
   <script src="js/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="js/chart_custom_style1.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>