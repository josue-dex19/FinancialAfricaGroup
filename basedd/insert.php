<?php
	$name = $_POST['name'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
    $contact = $_POST['contact'];
    $fonction = $_POST['fonction'];
    $forum = $_POST['forum'];
	// Database connection
	 $conn = new mysqli('localhost','u302706399_josuedex','#JosueDex08','u302706399_tradefairoic');
	 if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into messagerie (name, prenom, email, contact, fonction, forum ) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss", $name, $prenom, $email, $contact, $fonction, $forum);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
		echo "<script>
                alert('formulaire envoyé avec succès');
                window.location.href='../index.php';
                </script>";                                                                                                         

	}

	
?>