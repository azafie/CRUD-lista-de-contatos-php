<?php
$link = mysqli_connect("localhost", "root", "", "c3po");
$nome = $_POST["nome"];
$sobre = $_POST["SobreNome"];
$cpf = $_POST["CPF"];
$email = $_POST["email"];
$tele = $_POST["telefone"];
$emailops = $_POST["emailops"];
$teleops = $_POST["teleops"];

$sql = "INSERT INTO cliente (Id, Nome, SobreNome, Cpf, Telefone, TelefoneOps, Email, EmailOps) VALUES ('', '$nome', '$sobre', '$cpf', '$tele', '$teleops', '$email', '$emailops')";
if(mysqli_query($link, $sql)){
    echo "seu contato foi salvo com sucesso.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
	//header("location:index.php?link=1"); 

?>
