<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = trim($_POST["mensagem"]);

    // Verifica se os campos estão preenchidos
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Opcional: valida o e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "E-mail inválido.";
 
        exit;
    }

    // Enviar por e-mail (opcional)
    $destinatario = "seu-email@exemplo.com"; // Substitua por seu e-mail
    $assunto = "Nova mensagem de $nome no site AC Vida";
    $conteudo = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";

    $headers = "From: $nome <$email>";

    // Função mail() só funciona em servidores com serviço de envio de e-mails habilitado
    if (mail($destinatario, $assunto, $conteudo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método inválido.";
}
?>
