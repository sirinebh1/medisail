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
   <?php include 'header_admin.php' ?>
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

                           </i> liste Des Employées</span><span class="plus_green_bt">+
                        </span>
                     </h3>

                  </div>
                  <div class="list_cont">
                     <p>gestion des Employées</p>
                  </div>
                  <div class="msg_list_main">
                     <ul class="msg_list">
                        <?php
                        $user = $con->prepare('SELECT u.*,ru.role FROM `user` u INNER JOIN role_user ru ON(ru.id = u.`id_role`)ORDER BY `date_ambuche` DESC LIMIT 10');
                        $user->execute();
                        while ($data = $user->fetch()) {
                        ?>
                           <li>
                              <span><img src="uploads/<?php echo $data['img']; ?>" class="img-responsive" alt="#" /></span>
                              <span>
                                 <span class="name_user"><?php echo $data['nom'] . " " . $data['prenom']; ?></span>
                                 <span class="msg_user"><?php echo $data['role']; ?></span>
                                 <!-- <span class="time_ago">12 min ago</span> -->
                              </span>
                           </li>
                        <?php } ?>
                     </ul>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle" aria-hidden="true">
      <div class="modal-dialog " role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">ajouter un personne</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="controller/insertUser.php" method="post" enctype="multipart/form-data">
               <div class="modal-body">

                  <div class="form-row">
                     <div class="col-md-12 mb-3">
                        <label for="validationDefault01">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="nom" required>
                     </div>
                     <br></br>
                     <div class="col-md-12 mb-3">
                        <label for="validationDefault02">Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom" required>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationDefaultUsername">Email</label>
                        <div class="input-group">
                           <input type="text" name="email" class="form-control" id="email" placeholder="email" aria-describedby="inputGroupPrepend2" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="col-md-4 mb-3">
                        <label for="validationDefault03">ville</label>
                        <input type="text" name="ville" class="form-control" id="ville" placeholder="City" required>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label for="validationDefault04">Pays</label>
                        <input type="text" name="etat" class="form-control" id="etat" placeholder="etat" required>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label for="validationDefault05">code</label>
                        <input type="text" name="code" class="form-control" id="code" placeholder="Zip" required>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationDefault05">role</label>
                        <select class="form-select" aria-label="Default select example" name="role">
                           <?php
                           $role = $con->prepare('SELECT * FROM `role_user`');
                           $role->execute();
                           while ($data = $role->fetch()) {
                           ?>
                              <option value="<?php echo $data['id']; ?>"><?php echo $data['role']; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile" name="img">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                           Agree to terms and conditions
                        </label>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="dashboard_admin.php"><button class="btn btn-primary" type="submit">Submit form</button></a>
               </div>
            </form>
         </div>
      </div>
   </div>

   </div>
   <!-- end dashboard inner -->
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