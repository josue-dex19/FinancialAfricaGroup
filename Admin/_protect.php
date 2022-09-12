<?php // partie commune (cookie ou session)
session_start();
// -------------------------------------------------------------------------
$utilisateur = "admin"; // Remplacer IDENTIFIANT par votre identifiant (au choix)
$mot_de_passe = "admin"; // Remplacer MOTDEPASSE par votre mot de passe (au choix)
// -------------------------------------------------------------------------
// si le visiteur (administrateur ou collaborateur) a validé le formulaire
$login = '';
$pass = '';
if (!empty($_POST['login']) && !empty($_POST['pass'])) {
    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
}
// -------------------------------------------------------------------------
// création d un code de validation aléatoire
// -------------------------------------------------------------------------
$tableau = array("0","1","2","3","4","5","6","7","8","9",
"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
// Tirage aléatoire de 16 caracteres
$taille = 16;
$valeurs_aleatoires = array_rand($tableau, $taille);
// generation du code
$code_valide = '';
foreach($valeurs_aleatoires as $i)
    { $code_valide = $code_valide . $tableau[$i]; }
// -------------------------------------------------------------------------
// On stocke le code_valide sur le serveur dans une variable de session
$_SESSION["CODEVALIDE"] = $code_valide;
// -------------------------------------------------------------------------
?>
<?php
// (suite avec COOKIE)
// ------------------------------------------------------
// Si le login et le mot de passe sont corrects
if ($login == $utilisateur && $pass == $mot_de_passe) {
    // copie du code dans un cookie "perso"
    setcookie ("MONCOOKIE",$code_valide,time()+3600);
    // ------------------------------------------------------
} else {
    setcookie ("MONCOOKIE", "");
}
?>
<?php
// (suite avec SESSION)
// ------------------------------------------------------
// Si le login et le mot de passe sont corrects
if ($login == $utilisateur && $pass == $mot_de_passe) {
    // copie du code dans une variable de session "perso"
    $_SESSION["MASESSION"] = $code_valide;
    // ------------------------------------------------------
} else {
    $_SESSION["MASESSION"] = '';
}
?>