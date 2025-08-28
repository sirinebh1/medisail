

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
   <div class="midde_cont">
      <div class="container-fluid">
         <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>conge</h2>
               </div>
            </div>
         </div>
         <div class="row column1">
            <div class="dash_blog">
               <div class="dash_blog_inner">
                  <div class="dash_head">
                     <h3 data-toggle="modal" data-target="#exampleModal">
                        <span> gestion de congée
                        </span>
                     </h3>
                  </div>
                  <form method="POST" action="inseremploye_conge.php">
                     <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">NOM:</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="votre nom" value="" />
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">PRENOM:</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="votre prenom" value="" />
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">la raision pour demander un congee:</label>
                        <textarea class="form-control" name="raison" id="raison" rows="3"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="validationDefault05" class="form-label">ROLE:</label>
                        <select class="form-select" aria-label=".form-select-lg example" name="role" id="role">
                           <?php
                           $role = $con->prepare('SELECT * FROM `role_user`');
                           $role->execute();
                           while ($data = $role->fetch()) {
                           ?>
                              <option value="<?php echo $data['id']; ?>"><?php echo $data['role']; ?></option>
                           <?php } ?>
                        </select>

                        <div class="form-group">
                           <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                        <?php
                    
                      
                        ?>
                  </form>
               </div>