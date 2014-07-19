<form method="post" action="engine/mail.php" enctype="multipart/form-data">
    <label>Nome:</label><br />
        <input type="text" name="nome" value="" /><br />
    <label>E-mail:</label><br />
        <input type="text" name="email" value="" /><br />
    <label>Assunto:</label><br />
        <input type="text" name="assunto" value="" /><br />
    <label>Mensagem:</label><br />
        <textarea name="mensagem"></textarea><br />

    <input type="submit" class="btn btn-default" name="enviar" value="enviar">
</form>