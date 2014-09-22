<?php
require_once("../model/conexao.php");

$sql = "SELECT * FROM pages WHERE content like :searching";
$stmt = $conn->prepare($sql);
$stmt->bindValue("searching", "%{$search}%");
$stmt->execute();
$knownSearch = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($knowSearch != NULL):
    while($knowSearch > 0):
    ?>
        <h1><?php echo $knowSearch['title'];  ?></h1><br />
            <p><?php echo $knowSearch['content'];  ?></p>
                <hr /><br />
<?php
    endwhile;
 else:
?>
            <h1>Não encontrei sua busca!</h1>
 <?php endif; ?>