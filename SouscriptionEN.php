<!DOCTYPE html>
<html lang="en">

<head>
<title>tradefairoic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Nav.css">
    <link rel="stylesheet" href="/css/Souscription.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php 
    include './NavEn.php'
    ?>
    <br>
    <div class="jumbotron">
        <div class="container">
            <p>
                <h4>Do you want to get information? <strong>Complete this form and we will contact you as soon as possible.</strong>
                </h4>
            </p>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <form action="/basedd/insertSouscri.php" method="post">
                            <div class="form-group ">
                                <input type="text " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Last name " name="nom">
                            </div>
                            <div class="form-group ">
                                <input type="text " class="form-control " id="exampleInputPassword1 " placeholder="First name " name="prenom">
                            </div>
                            <div class="form-group ">
                                <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="email " name="mail">
                            </div>

                            <div id="divInp">
                                <input type="checkbox" id="Visiteur" name="choix" value="Visiteur">
                                <label for="Visiteur"> Visitor</label>
                                <input type="checkbox" id="Exposant" name="choix" value="Exposant">
                                <label for="Exposant"> Exhibitor</label>
                                <input type="checkbox" id="Parrainer" name="choix" value="Parrainer">
                                <label for="Parrainer"> Sponsor</label>

                            </div>
                            <br>
                            <button type="submit " class="btn btn-success " name="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="/image/open.jpg" alt="" width="100%">
                </div>
            </div>



        </div>
    </div>
</body>

</html>