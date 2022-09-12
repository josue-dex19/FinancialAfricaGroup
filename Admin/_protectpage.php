
<?php // (avec SESSION)
session_start();
// ------------------------------------------------------
// comparaison avec le code de validation
// si non identifie
if (empty($_SESSION['CODEVALIDE'])
|| md5($_SESSION['MASESSION']) !=
md5($_SESSION['CODEVALIDE']))
{
    // redirection vers le formulaire d identification
    header("Location: index.php");
    exit;
}
// ------------------------------------------------------
// si identifie, on continue
?>