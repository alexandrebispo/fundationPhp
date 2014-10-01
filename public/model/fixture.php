<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Bispo
 * Date: 01/10/14
 * Time: 10:34
 */

require_once("conexao.php");


echo "#### Conectando com banco ####";
$conn = getDb();
echo " - ok </ br>";

echo "##### removendo tabela do Banco de dados ######";
$conn->query("DROP TABLE pages");
echo " - ok! </ br>";

echo "######### Criando tabela de pages #########";
$conn->query("
    /*!40101 SET @saved_cs_client     = @@character_set_client */;
    /*!40101 SET character_set_client = utf8 */;
    CREATE TABLE `pages` (
      `idpages` int(11) NOT NULL AUTO_INCREMENT,
      `title` varchar(45) NOT NULL,
      `path` varchar(45) NOT NULL,
      `content` longtext NOT NULL,
      `date_create` datetime NOT NULL,
      PRIMARY KEY (`idpages`)
    ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
    /*!40101 SET character_set_client = @saved_cs_client */;
");
echo " - ok </ br>";

echo "########## Inserindo dados no database #######";
$conn->query("LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'home','includes/home.php','<h1>home - Banco de Dados!</h1>','2014-08-16 00:04:00'),
                           (2,'empresa','includes/empresas.php','<h1>Empresa - Banco de dados!</h1>','2014-08-16 00:07:00'),
                           (3,'route','model/route.php','<h1>Página de teste para rota</h1>','2014-08-16 01:28:00');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;
");

echo " - ok </ br>";

echo "Tabela com dados inseridos";