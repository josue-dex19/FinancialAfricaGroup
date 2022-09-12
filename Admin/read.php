<?php
include("_protectpage.php") ;
// -------------------------------------------------------------------
?>
    <?php  

include "../basedd/conn.php";

$sql = "SELECT * FROM messagerie ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$sql2= "SELECT * FROM contact ORDER BY id DESC";
$result2 = mysqli_query($conn, $sql2);
?>
    <!DOCTYPE html>
    <html>

    <head>
    <title>tradefairoic</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <header>
        <style>
            .topnav {
                overflow: hidden;
                background-color: #333;
                height: 50px;
                position: fixed;
                width: 100%;
                z-index: 10000;
            }
            
            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding-left: 15px;
                padding-right: 15px;
                text-decoration: none;
                font-size: 17px;
            }
            
            .topnav a:hover {
                color: black;
            }
            /* Create a right-aligned (split) link inside the navigation bar */
            
            .topnav a.split {
                float: right;
                color: white;
            }
        </style>
        <div class="topnav">

            <a class="active" href="#home"><img src="/image/ICDT_LOGO.png" alt="" width="50px"></a>

            <a class="split">
                <form method="POST" action="_deconnexion.php">
                    <button class="btn btn-danger" type="submit" value="deconnexion" name="deconnexion">deconnexion</button>
                </form>
            </a>
        </div>
    </header>

    <body>
        <div class="text-center">
            <h1>Dashboard</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <h4 class="display-4 text-center">Reception de Formulaire</h4><br>
                        <?php if (isset($_GET['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_GET['success']; ?>
                        </div>
                        <?php } ?>
                        <?php if (mysqli_num_rows($result)) { ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Fonction</th>
                                    <th scope="col">Forum</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                             $i = 0;
                             while($rows = mysqli_fetch_assoc($result)){
                             $i++;
                           ?>
                                <tr>
                                    <th scope="row">
                                        <?=$i?>
                                    </th>
                                    <td>
                                        <?=$rows['name']?>
                                    </td>
                                    <td>
                                        <?php echo $rows['prenom']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['contact']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['fonction']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['forum']; ?>
                                    </td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <h4 class="display-4 text-center">Demande d'information </h4><br>
                        <?php if (isset($_GET['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_GET['success']; ?>
                        </div>
                        <?php } ?>
                        <?php if (mysqli_num_rows($result2)) { ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">choix</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                             $i = 0;
                             while($rows = mysqli_fetch_assoc($result2)){
                             $i++;
                           ?>
                                <tr>
                                    <th scope="row">
                                        <?=$i?>
                                    </th>
                                    <td>
                                        <?=$rows['nom']?>
                                    </td>
                                    <td>
                                        <?php echo $rows['prenom']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['mail']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['choix']; ?>
                                    </td>


                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>

            </div>

        </div>
        <br>

    </body>

    </html>