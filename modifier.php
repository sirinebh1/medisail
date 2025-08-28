<?php
require 'includes/connect.php';
$user = $con->prepare('SELECT * FROM `user` WHERE id_user =:num');
$user->bindValue(':num', $_GET['id'], PDO::PARAM_INT);
$user->execute();
$contact = $user->fetch();
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

                <form action="mod.php" method="get" enctype="multipart/form-data">

                    <div class="modal-body">

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <input type="hidden" name="id" value="<?= $contact['id_user']; ?>">
                                <label for="validationDefault01">Nom</label>
                                <input type="text" name="nom" class="form-control" id="nom" placeholder="nom" value="<?= $contact['nom']; ?>" required>
                            </div>
                            <br></br>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault02">Prenom</label>
                                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom" value="<?= $contact['prenom']; ?>" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefaultUsername">Email</label>
                                <div class="input-group">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="email" aria-describedby="inputGroupPrepend2" value="<?= $contact['email']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault03">ville</label>
                                <input type="text" name="ville" class="form-control" id="ville" placeholder="City" value="<?= $contact['ville']; ?>" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault04">Pays</label>
                                <input type="text" name="etat" class="form-control" id="etat" placeholder="etat" value="<?= $contact['etat']; ?>" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">code</label>
                                <input type="text" name="code" class="form-control" id="code" placeholder="Zip" value="<?= $contact['code']; ?>" required>
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
                        <a href="dashboard_admin.php"><button class="btn btn-primary" type="submit">modifier</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>