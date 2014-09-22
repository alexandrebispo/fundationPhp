<?php
$field = $_POST;

if($field != NULL){
    $headers = "From: {$field['email']}" . "\r\n" .
               "Reply-To: {$field['email']}" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

    $nome = filter_var($field['nome'], FILTER_SANITIZE_STRING);
    $mail = filter_var($field['email'], FILTER_VALIDATE_EMAIL);
    $assunto = filter_var($field['assunto'], FILTER_SANITIZE_STRING);
    $menssagem = filter_var($field['mensagem'], FILTER_SANITIZE_STRING);

    $to = "alexandrebispo.mestre@gmail.com";
    $dados = array();
    $dados = "Nome: $nome";
    $dados = "Assunto: $assunto";
    $header = "From: $to";
    $msg = $menssagem;

    mail($to,$dados,$msg,$header);
}

include_once "../includes/head.php";
?>
<body role="document">
<?php
    require_once("../includes/navbar.php");

if( $nome != NULL && $mail != NULL && $assunto != NULL && $menssagem != NULL) {
    ?>
    <script language="javascript">
        window.alert("Sua mensagem foi enviada com sucesso!");
    </script>

    <h1>Segue abaixo menssagem enviada para:</h1>

    <span>Nome:     <?php echo $nome; ?></span><br />
    <span>email:    <?php echo $mail; ?></span><br />
    <span>Assunto:  <?php echo $assunto; ?></span><br />
    <span>Mensagem: <?php echo $menssagem; ?></span>

<?php
}
else{
?>
    <script language="javascript">
        window.alert("Você precisa preencher todos os campos!");
    </script>

    <footer>
<?php
}
     require_once("../includes/footer.php");
?>
    </footer>
</body>
</html>