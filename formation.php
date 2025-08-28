<?php
include 'includes/connect.php';
?>

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
   <title>MediSail</title>
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
   <?php include 'header_employee.php' ?>
   <div class="row column1">
      <div class="col-md-12 col-lg-12">
         <div class="full counter_section margin_bottom_30">
            <div class="couter_icon">
               <div>
                  <i class="fa fa-bug yellow_color"></i>
               </div>
            </div>
            <div class="counter_no">

               <div>
                  <p class="head_couter" data-toggle="modal" data-target="#exampleModal">CHAT GPT</p>
               </div>

            </div>
         </div>
      </div>
   </div>
   <div class="col-md-12 col-lg-12">
      <div class="full counter_section margin_bottom_30">
         <div class="couter_icon">
            <div>
               <i class="fa fa-laptop yellow_color"></i>
            </div>
         </div>
         <div class="counter_no">
            <div>

               <p class="head_couter" data-toggle="modal" data-target="#exampleModal">C#</p>

            </div>
         </div>
      </div>
   </div>

   <div class="col-md-12 col-lg-12">
      <div class="full counter_section margin_bottom_30">
         <div class="couter_icon">
            <div>
               <i class="fa fa-puzzle-piece yellow_color"></i>
            </div>
         </div>
         <div class="counter_no">
            <div>

               <p class="head_couter" data-toggle="modal" data-target="#exampleModal">JEUX VIDEO</p>

            </div>
         </div>
      </div>
   </div>

   <div class="col-md-12 col-lg-12">
      <div class="full counter_section margin_bottom_30">
         <div class="couter_icon">
            <div>
               <i class="fa fa-car yellow_color"></i>
            </div>
         </div>
         <div class="counter_no">
            <div>
               <p class="head_couter" data-toggle="modal" data-target="#exampleModal">ROBOTIQUE</p>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">liste de formation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <ul>
                  <li>date: samedi et dimanche </li>
                  <li>place:medisail </li>
                  <li>durée:3h pour 3mois </li>
                  <li>NB:porter avec vous votre propre pc et un pause cafe inclus </li>
               </ul>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <a href="appliquer.php" button type="button" class="btn btn-primary">participer</button></a>


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
   <!-- fancy box js -->
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/jquery.fancybox.min.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
   <!-- calendar file css -->
   <script src="js/semantic.min.js"></script>