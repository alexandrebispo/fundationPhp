Conteúdo em banco de dados
==========================

Ao invés de trabalhar com require / include para incluir as páginas de conteúdo no site simples, você deverá agora trazer esse conteúdo de um banco de dados MySQL.

Você também precisará criar um arquivo de configuração (variáveis) para com o banco de dados e também as fixtures necessárias para que seja possível verificar dados de teste.

Não deixe de criar um sistema de busca por palavra-chave, ou seja, quando alguém buscar determinada palavra, o sistema deverá  pesquisar nos conteúdos das páginas no banco de dados e listar as páginas que possuem a palavra buscada. Ao clicar nessa página, o usuário deverá ser redirecionado para a mesma.

A conexão deverá ser realizada via PDO.


OBS para uso:
=============


1 - Criar database education
2 - Colocar os dados de acesso ao banco de dados, no arquivo engine/config.php
3 - Colocar as rotas configuradas para uso, no arquivo engine/config.php
4 - Criar tabela pages rodando a pagina model/fixture.php
5 - para recuperar a conexão basta chamar a function getDb();
6 - As paginas de view estão dentro de /includes

Pronto, desta forma estará tudo funcionando em perfeita armonia;

