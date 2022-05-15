<?php

// Create conexao com o banco de dados
$conn = mysqli_connect("localhost", "root", "", "c3po");

$id = $_GET["Id"];

// instruçao sql para deletar 
$sql = "DELETE FROM cliente WHERE Id=$id";
// condiçao se deletou ou deu erro
if ($conn->query($sql) === TRUE) {
  header("Location:index.php");
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
  header("Location:erro.php");
}

$conn->close();
?>