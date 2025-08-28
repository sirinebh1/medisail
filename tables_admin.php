<?php include 'includes/connect.php';

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
   <!-- calendar file css -->
   <link rel="stylesheet" href="js/semantic.min.css" />
   <!-- fancy box js -->
   <link rel="stylesheet" href="css/jquery.fancybox.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page tables_page">
   <?php include 'header_admin.php' ?>
   <div class="midde_cont">
      <div class="container-fluid">
         <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>Tables</h2>
               </div>
            </div>
         </div>
         <!-- row -->
         <div class="row">
            <!-- table section -->
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                     <div class="heading1 margin_0">
                        <h2>liste Des Employéé</h2>
                     </div>
                  </div>
                  <div class="table_section padding_infor_info">
                     <div class="table-responsive-sm">
                        <?php
                        require 'includes\connect.php';
                        $user = $con->prepare('SELECT id_user,nom,prenom,email,ville,etat,code,date_ambuche FROM `user` ');
                        $user->execute();
                        while ($data = $user->fetch()) {

                        ?>
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>id</th>
                                    <th>Prenom</th>
                                    <th>nom</th>
                                    <th>email</th>
                                    <th>ville</th>
                                    <th>pays</th>

                                    <th>code</th>
                                    <th>date_d'ambuche</th>
                                    <td colspan=2>action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><?php echo $data['id_user'] ?></td>
                                    <td><?php echo $data['prenom'] ?></td>
                                    <td><?php echo $data['nom'] ?></td>
                                    <td> <?php echo $data['email'] ?></td>
                                    <td><?php echo $data['ville'] ?></td>
                                    <td><?php echo $data['etat'] ?></td>

                                    <td><?php echo $data['code'] ?></td>

                                    <td><?php echo $data['date_ambuche'] ?></td>
                                    <td><a href="modifier.php?id=<?php echo $data['id_user'] ?>">modifier</a></td>
                                    <td><a href="supprimer_employee.php?id=<?php echo $data['id_user'] ?>">supprimer</a></td>
                                 </tr>

                              <?php } ?>
                              </tbody>
                           </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- end dashboard inner -->
   </div>
   </div>
   <!-- model popup -->
   <!-- The Modal -->
   <div class="modal fade" id="myModal">
      <div class="modal-dialog">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <h4 class="modal-title">Modal Heading</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
               Modal body..
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <!-- end model popup -->
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
</body>

</html>