{    
     $nom = $_POST['nom'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $sql = "INSERT INTO demandeurs (nom,email,mobile)
     VALUES ('$nom','$email','$mobile')";
     if (mysqli_query($conn, $sql)) {
        echo "Enregistrement réalisé !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

