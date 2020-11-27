<?

# alterar a variavel abaixo colocando o seu email

$destinatario = $_REQUEST['email'];

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$assunto = $_REQUEST['assunto'];
$msg = $_REQUEST['msg'];

$body = "===================================" . "\n";
$body = $body . "SpeedyBurger - Fale Conosco" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:faleconosco.html");
exit();


?>