<?php
echo "<h1> Dados enviados </h1>";
echo"<p>Torcedor " . $_POST['nome']  . "</p>";
echo"=====================================";
//echo"<p> Torcedor: {$_POST['nome']} </p>";//
echo" <p> CPF: " . $_POST ['cpf'] . "</p>";
echo"<p> Frequencia" . $_POST['frequencia'] . "</p>";
$socioTorcedor = isset($_POST['socio']) ? $_POST['socio'] : "Sim" ;
echo "<p> É socio torcedor?" . $_POST['socio'] . "</p>";
 
$camisaoficial = isset($_POST['camiseta']) ? $_POST['camiseta'] : "Sim" ;
echo "<p> Possui camisa oficial?" . $_POST['camiseta'] . "</p>";
 
echo "<p> Qual o time de coração?" . $_POST['time']  . "<?p>";
 
var_dump($_POST);
var_dump($_GET);
 


?>