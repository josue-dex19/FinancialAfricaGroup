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
    include './Nav.php';
    ?>  
                <br>
                <div class="jumbotron">
                    <div class="container">
                        <p>
                            <h4>Voulez-vous obtenir des informations? <strong>Complétez ce formulaire et nous vous contacterons dans les plus brefs délai.</strong>
                            </h4>
                        </p>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center">
                                    <form method="post" action="/basedd/insertSouscri.php">
                                        <div class="form-group ">
                                            <input type="text " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Votre nom " name="nom">
                                        </div>
                                        <div class="form-group ">
                                            <input type="text " class="form-control " id="exampleInputPassword1 " placeholder="Votre prénom " name="prenom">
                                        </div>
                                        <div class="form-group ">
                                            <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Votre adresse mail " name="mail">
                                        </div>

                                        <div id="divInp">
                                            <input type="checkbox" id="Visiteur" name="choix" value="visiteur">
                                            <label for="Visiteur"> Visiteur</label>
                                            <input type="checkbox" id="Exposant" name="choix" value="exposant">
                                            <label for="Exposant"> Exposant</label>
                                            <input type="checkbox" id="Parrainer" name="choix" value="parainer">
                                            <label for="Parrainer"> Parrainer</label>

                                        </div>
                                        <br>
                                        <button type="submit " class="btn btn-primary " name="submit">Envoyer</button>
                                         </button>
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