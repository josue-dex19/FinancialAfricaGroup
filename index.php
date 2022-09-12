<!DOCTYPE html>
<html lang="en">

<head></head>
<title>tradefairoic</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/Nav.css">
<link rel="stylesheet" href="/css/aos.css">
<link rel="stylesheet" href="/css/Accueil.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php 
    include './Nav.php';
    ?>
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-md-6 slide-in-left">
                    <h1 id="titre">La Foire Commerciale des Pays Islamiques</h1>
                    <br>
                    <p style="color: white;" id="texte_titre">Le Centre Islamique pour le Développement du Commerce (CIDC) et le Centre International d'Echanges de Dakar (CIED) vous invitent à leur conférence de presse conjointe, le 10 mai 2022 à la Tour Hassan à Rabat pour la présentation du
                        Forum d'Investissement qui aura lieu en marge de la 17ème Foire Commerciale des Pays Islamiques qui se déroulera à Dakar (Sénégal), du 13 au 19 juin 2022...</p>
                    <a href="LirePlus.php" class="btn-get-started scrollto">Lire Plus</a>
                </div>
            </div>
        </div>

    </section>

    <br>

    <div class="container">
        <h1 class="text-center " data-aos="fade-right" data-aos-duration="1000">Calendrier
            <hr>
        </h1>
        <br>
        <div class="row ">
            <div class="col-md-6 ">
                <h2 data-aos="fade-up" data-aos-duration="1000">
                    Prochaine édition
                </h2>
                <p>
                    <h3 style="color: green; " data-aos="fade-up" data-aos-duration="1500"><i class="fa fa-calendar ">13-19 /Juin / 2022 </i></i> <i class="fa fa-map "> Dakar -Senegal</i></h3>
                </p>
                <br>
                <br>
                <h3 data-aos="zoom-in-up" data-aos-duration="1000">
                    <h3>THÈME</h3>
                    <p style="font-size:20px ;">FACILITER LE COMMERCE INTRA-OCI : QUELS INSTRUMENTS POUR LE DEVELOPPEMENT DES ECHANGES ?</p>

                </h3>
            </div>
            <div class="col-md-6">
                <img src="/image/imgLocaux.jpg " alt=" " width="100% " height="100% " data-aos="fade-down" data-aos-duration="1500">
            </div>
        </div>
    </div>
    <br>
    <div class="jumbotron">

        <div class="container" id="forum">
            <h1 data-aos="fade-up" data-aos-duration="500">
                Forums
            </h1>
            <p data-aos="zoom-in" data-aos-duration="500">En marge de la 17ème Foire commerciale des Pays Islamiques, voici les forums et les rencontres d'affaires prévus

            </p>
            <br>
            <hr data-aos="zoom-in" data-aos-duration="500">
            <a data-aos="fade-up" data-aos-duration="2000" href="./texte1.php " style="color: black; ">1- Forum d'investissement OCL-Sénégal avec des room deals.</a>

            <hr data-aos="zoom-in " data-aos-duration="1000 ">
            <a data-aos="fade-up" data-aos-duration="2000" href="./texte2.php" style="color: black;">2- Forum des Agences de Promotion des Investissements (API) des Etats membres de l'OCI.</a>
            <hr data-aos="zoom-in" data-aos-duration="1500">
            <a data-aos="fade-up" data-aos-duration="2000" href="./texte3.php" style="color: black; ">3- Atelier sur l'économie du savoir.</a>
            <hr data-aos="zoom-in " data-aos-duration="2000 ">
            <a data-aos="fade-up" data-aos-duration="2000" href="./texte4.php" style="color: black;">4- Atelier sur la certification des produits HALAL alimentaires pour les pays africains.</a>
            <hr data-aos="zoom-in" data-aos-duration="2500">
            <button data-aos="fade" data-aos-duration="2000" class="btn btn-success" onclick="inscriptionClick()" id="leClick">Participer a un Forum</button>
            <br>
            <br>
            <script>
                document.getElementById("leClick").onclick = function() {
                    inscriptionClick();
                }

                function inscriptionClick() {
                    console.log("clicked");
                    document.getElementById("ficheInscription").style.display = "block";
                }

                function inscriptionDeClick() {
                    document.getElementById("ficheInscription").style.display = "none";
                }
            </script>
        </div>
        <div class="container" style="display: none;" id="ficheInscription">

            <div class="row get_touch_inner">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h4> Fiche de participation</h4>
                    </div>
                    <form class="contact_us_form row" action="/basedd/insert.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="tel" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Fonction" required>
                        </div>
                        <div>
                            <strong>Je veux participer au :</strong>
                            <br>
                            <input type="checkbox" id="forum1" name="forum" value="Forum1">
                            <label for="forum1"> Forum d'investissement OCL-Senagal</label><br>
                            <input type="checkbox" id="forum2" name="forum" value="Forum2">
                            <label for="forum2"> Forum des agences de promotions</label><br>
                            <input type="checkbox" id="forum3" name="forum" value="Forum3">
                            <label for="forum3"> Atelier sur l'economie du savoir</label><br>
                            <input type="checkbox" id="forum4" name="forum" value="Forum4">
                            <label for="forum4"> Atelier sur la certification des produits</label><br>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" value="submit" class="btn btn-success submit_btn form-control">Envoyer</button>
                        </div>
                        <div class="text-center" onclick="inscriptionDeClick()">
                            <i class="fa fa-close"></i>Fermer
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center ">
                    A Propos
                </h1>
                <br>
                <p class="text-center " data-aos="fade-down" data-aos-duration="2500">


                    La Foire Commerciale des Pays Islamiques est l'un des événements majeurs organisés tous les deux ans par le Centre Islamique International d'Echanges de Dakar (CIED) dans le cadre de la promotion commerciale et de la coopération entre les 57 pays membres,
                    à ce jour, de l'Organisation des Coopération islamique (OCI). C'est une plateforme d'échanges entre les différents acteurs du monde des affaires qui partagent des valeurs communes de coopération et de développement. Pour cette 17ème
                    édition de la foire qui s'annonce grandiose en terre sénégalaise, chargée d'histoire et carrefour des échanges entre l'Afrique de l'Ouest et le reste du monde, nous comptons déjà sur la présence éminente de personnalités de renom .
                </p>
                <br>
                <div class="text-center ">
                    <button class="btn btn-success " id="btnExpo " data-aos="fade-up" data-aos-duration="2000">
                        <a href="Apropos.php " style="color: white;">Voir Plus</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid jumbotron" id="sponsoring">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
                <h1>Inscription</h1>
                <p>Pour vous inscrire, cliquez en dessous </p>
                <button class="btn btn-success">
                    <a href="Souscription.php " style="color: white;">S'inscrire</a>
                </button>
            </div>

            <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
                <h1>Historique</h1>
                <p>Pour vous en savoir plus sur la foire, cliquez en dessous </p>
                <button class="btn btn-success">
                    <a href="rebriqueFr.php " style="color: white;">Découvrir</a>
                </button>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<script src="/js/nav.js"></script>
<script src="/js/main.js"></script>
<script src="/js/aos.js"></script>

</html>