<!DOCTYPE html>
<html lang="en">

<head>
    <title>tradefairoic</title>
    <meta charset="utf-8">
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
    include './NavEn.php'
    ?>
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-md-6 slide-in-left">
                    <h1>Trade Fair of Islamic Countries</h1>
                    <p style="color: white;">The Islamic Center for the Development of Trade (ICDT) and the Center International d’Echanges de Dakar (CIED) invite you to their joint press conference, on May 10, 2022 at the Hassan Tower in Rabat for the presentation of the Investment
                        Forum which will take place on the sidelines of the 17th Trade Fair of Islamic Countries which will take place in Dakar (Senegal), from June 13 to 19, 2022...
                    </p>
                    <a href="./LirePlusEN.php" class="btn-get-started scrollto">Read More</a>
                </div>
            </div>
        </div>

    </section>

    <br>
    <div class="container ">
        <h1 class="text-center" data-aos="fade-right" data-aos-duration="1000">Calender
            <hr>
        </h1>
        <br>
        <div class="row ">
            <div class="col-md-6 ">
                <h2 data-aos="fade-up" data-aos-duration="1000">
                    Next Edition
                </h2>
                <p>
                    <h3 style="color: green;" data-aos="fade-up" data-aos-duration="1500"><i class="fa fa-calendar ">13th-19th /June / 2022 </i></i> <i class="fa fa-map "> Dakar -Senegal</i></h3>
                </p>
                <br>
                <br>
                <div data-aos="zoom-in-up" data-aos-duration="1000">
                    <h3>
                        <Strong>THEME</Strong>
                    </h3>
                    <p style="font-size: 20px;">Facilitating intra-OIC Trade: Which tools for the development of Trade exchanges ?</p>

                </div>
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
            <p data-aos="zoom-in" data-aos-duration="500">On the sidelines of the 17th Trade Fair of Islamic Countries, the following forums and business meetings are scheduled

            </p>
            <br>
            <hr data-aos="zoom-in" data-aos-duration="500"><a data-aos="fade-up" data-aos-duration="2000" href="./texte1.php" style="color: black;">1- OCL-Senegal Investment Forum with room deals. </a>
            <hr data-aos="zoom-in" data-aos-duration="1000"><a data-aos="fade-up" data-aos-duration="2000" href="./texte2.php" style="color: black;">2-   Forum of Investment Promotion Agencies (IPA) of the OIC Member States.</a>
            <hr data-aos="zoom-in" data-aos-duration="1500"><a data-aos="fade-up" data-aos-duration="2000" href="./texte3.php" style="color: black;">3- Workshop on the knowledge economy. </a>
            <hr data-aos="zoom-in" data-aos-duration="2000"><a data-aos="fade-up" data-aos-duration="2000" href="./texte4.php" style="color: black;">4-  Workshop on the certification of HALAL food products for African countries.</a>
            <hr data-aos="zoom-in" data-aos-duration="2500">
            <button data-aos="fade" data-aos-duration="2000" class="btn btn-success" onclick="inscriptionClick()" id="leClick">Participate in a Forum</button>
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
                        <h4> Participation form</h4>
                    </div>
                    <form class="contact_us_form row" action="/basedd/insert.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="LastName" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="mail" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="tel" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Function" required>
                        </div>
                        <div>
                            <strong>I want to participate in the :</strong>
                            <br>
                            <input type="checkbox" id="forum1" name="forum" value="Forum1">
                            <label for="forum1"> OCL-Senagal Investment Forum</label><br>
                            <input type="checkbox" id="forum2" name="forum" value="Forum2">
                            <label for="forum2"> Promotional agencies forum</label><br>
                            <input type="checkbox" id="forum3" name="forum" value="Forum3">
                            <label for="forum3"> Workshop on the knowledge economy</label><br>
                            <input type="checkbox" id="forum4" name="forum" value="Forum4">
                            <label for="forum4"> Workshop on product certification</label><br>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" value="submit" class="btn btn-success submit_btn form-control">Send</button>
                        </div>

                        <div class="text-center" onclick="inscriptionDeClick()">
                            <i class="fa fa-close"></i>Close
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="container ">
        <h1 class="text-center ">
            About
        </h1>
        <br>
        <p class="text-center " data-aos="fade-down" data-aos-duration="2500">


            The Islamic Countries Trade Fair is one of the major events organized every two years by The Islamic Centre for Development of Trade (ICDT) within the framework of trade promotion and cooperation among the 57 member countries, to date, of the Organization
            of Islamic Cooperation (OIC). It is a platform for exchanges between the various players in the business community who share common values ​​of cooperation and development. For this 17th edition of the fair, which promises to be grandiose
            in the land of Senegal, steeped in history and a point of intersection of trade between West Africa and the rest of the world, we are already counting on the eminent presence of renowned personalities. </p>
        <br>
        <div class="text-center ">
            <button class="btn btn-success " id="btnExpo " data-aos="fade-up" data-aos-duration="2000">
                <a href="/AproposEN.php" style="color: white;">Read More</a>
            </button>
        </div>
    </div>
    <br>
    <div class="container-fluid jumbotron " id="sponsoring">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
                <h1>Registration</h1>
                <p>To register, click below </p>
                <button class="btn btn-success">
                <a href="/SouscriptionEN.php " style="color: white;">Register</a>
            </button>
            </div>

            <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
                <h1>History</h1>
                <p>
                    To learn more about the fair, click below
                </p>
                <button class="btn btn-success">
                        <a href="/rebriqueEn.php " style="color: white;">Discover</a>
                    </button>
            </div>
        </div>
    </div>
    </div>
    <?php include 'footerEN.php'; ?>

</body>
<script src="/js/nav.js"></script>
<script src="/js/main.js"></script>
<script src="/js/aos.js"></script>

</html>