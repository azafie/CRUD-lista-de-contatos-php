<?php
// conexao com o banco
$link = mysqli_connect("localhost", "root", "", "c3po");



$query = "SELECT * FROM `cliente`";

if ($result = mysqli_query($link, $query)) {
?>
<table border="1">
    <tr>
        <td>Nome</td>
        <td>Sobre Nome</td>
        <td>CPF</td>
		<td>E-mail</td>
        <td>E-mail opcinal</td>
        <td>Telefone</td>
		<td>Telefone opcinal</td>
    </tr>
 


<?php
    
    while ($row = mysqli_fetch_row($result)) {?>
        
		
		 <tr>
        
        <td><?php  echo $row[1]; ?></td>
        <td><?php  echo $row[2]; ?></td>
		<td><?php  echo $row[3]; ?></td>
        <td><?php  echo $row[4]; ?></td>
        <td><?php  echo $row[5]; ?></td>
		<td><?php  echo $row[6]; ?></td>
		<td><?php  echo $row[7]; ?></td>
		
    </tr>

   <?php }  ?>
</table>
<?php
    
    mysqli_free_result($result);
}


mysqli_close($link);
?>