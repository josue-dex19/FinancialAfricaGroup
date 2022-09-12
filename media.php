<!DOCTYPE html>
<html lang="en">

<head>
<title>tradefairoic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Nav.css">
    <link rel="stylesheet" href="/css/Exposition.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php 
    include './Nav.php';
    ?>
    <style>
        p {
            font-size: 20px;
        }
        
        .jumbotron>div a {
            margin-left: 6%;
            font-size: 19px;
            color: rgba(93, 173, 226);
            font-weight: 500;
        }
        
        body {
            background-image: url('/image/presse.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            font-weight: 800;
        }
        
        .jumbotron {
            background-color: transparent;
        }
        
        .js {
            background-color: rgba(0, 0, 0, 0.63);
            position: relative;
            top: 100px;
        }
        
        ul.disc li {
            list-style-type: disc;
            font-size: 2.5em;
        }
        
        @media only screen and (max-width: 720px) {
            body {
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                color: white;
                font-weight: 800;
            }
            p {
                font-size: 10px;
            }
            .jumbotron>div a {
                margin-left: 1%;
                font-size: 15px;
                color: rgba(93, 173, 226);
                font-weight: 500;
            }
            ul.disc li {
                list-style-type: disc;
                font-size: 1.0em;
            }
            .text-center {
                display: -3px;
            }
            
        }
    </style>
    <div class="jumbotron">
        <div class="container " style="background-color: rgba(0, 0, 0, 0.63);">
            <div class="text-center display-3">
                La presse parle de nous
            </div>
            <br>
            <div class="row">

                <ul class="disc">
                    <li>
                        <p> 17e Foire de l’OCI à Dakar : Le CICES prêt à accueillir le plus grand évènement commercial de la Oumma islamique </p>
                        <a href="https://www.seneweb.com/news/Economie/17e-foire-de-l-rsquo-oci-a-dakar-le-cice_n_378345.html" target="_blank">www.seneweb.com/news/Economie/17e-foire-de-l-rsquo-oci-a-dakar-le-cice_n_378345.html</a>
                    </li>
                    <br>
                    <li>
                        <p>Maroc: présentation de la 17ème Foire Commerciale de l’OCI prévue à Dakar</p>
                        <a href="https://www.financialafrik.com/2022/05/11/maroc-presentation-de-a-17eme-foire-commerciale-de-loci-qui-aura-a-dakar/" target="_blank">www.financialafrik.com/2022/05/11/maroc-presentation-de-a-17eme-foire-commerciale.html</a>
                    </li>
                </ul>

            </div>



        </div>
    </div>
</body>


</html>