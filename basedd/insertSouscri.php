<?php
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
    $choix = $_POST['choix'];
	// Database connection
	 $conn = new mysqli('localhost','u302706399_josuedex','#JosueDex08','u302706399_tradefairoic');
     if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact (nom, prenom, mail, choix) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $nom, $prenom, $mail, $choix );
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
echo "<script>
          alert('formulaire envoyé avec succès');
            window.location.href='../index.php';
              </script>";                                                                                                         

	}	

?>