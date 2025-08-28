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
   <?php include 'header_hr.php' ?>
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
            <div class="dash_blog">
               <div class="dash_blog_inner">
                  <div class="dash_head">
                     <h3 data-toggle="modal" data-target="#exampleModal">
                        <span><i class="fa fa-comments-o">

                           </i>les congées</span>
                     </h3>
                  </div>
                  <div class="col-md-12">
                     <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                           <div class="heading1 margin_0">

                              <?php
                              $con = $con->prepare('SELECT * FROM conge ');
                              $con->execute();
                              while ($data = $con->fetch()) {
                              ?>
                                 <table class="table">
                                    <thead>
                                       <tr>

                                          <th>Prenom</th>
                                          <th>nom</th>
                                          <th>raison</th>
                                          <td colspan=2>action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td><?php echo $data['prenom'] ?></td>
                                          <td><?php echo $data['nom'] ?></td>

                                          <td><?php echo $data['raison'] ?></td>

                                          <td><a href="valider.html">valider</a></td>
                                          <td><a href="refuser.html">refuser</a></td>
                                       </tr>
                                    <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>