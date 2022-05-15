	esse é o codigo para fazer o clone
$(document).ready(function(){
  $("#botao1").click(function(){
   $("#campo:first").clone(true).find("input:text").val("").end().appendTo("#proxp:first");
  });
});   
esse é o algoritmo para pegar as informações do campo duplicado. 

$countn1 = count($_POST['email']); 
      for ($i=0; $i <$countn1 ; $i++) { 
      	 echo "este é meu email:". " ". $_POST['email'][$i]."<br/>";
      	 echo "este é minha senha:". " ". $_POST['senha'][$i]."<br/>"; 
      	 echo "sexo:". " ". $_POST['sexo'][$i]."<br/>"; 
      	  echo"<hr>";
