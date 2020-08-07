<?php


//define a variavel "erro" e coloca o codigo do erro como "1"
ini_set('erro', 1);

//mostra todos os erros, caso tenha, no console
error_reporting(E_ALL);

//esse e-mail é o que vai disparar. Precisa ser um e-mail com o domínio da hospedagem do site
$nome = $POST["nome"];

$celular = $POST["celular"];

$email = $POST["email"];

$from = "email@hospedagem.com";

$to = "contato@agg.com";

$subject = "Mensagem de: " . $nome;

$message = $POST["mensagem"];

$body = "
  <strong>Formulário de Contato</strong>
  <p><b>Nome: </b>".$nome."</p>
  <p><b>E-mail: </b>".$email."</p>
  <p><b>Celular: </b>".$nome."</p><br/>
  <p><b>Mensagem: </b>".$message."</p>
  <hr/>";

// fala que o formato é em HTML
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "De:". $from;

mail($to, $subject, $body, $headers);

//confirma o envio do email
echo "A mensagem de e-mail foi enviada.";

?>