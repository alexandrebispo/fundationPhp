Site simples em PHP
===================

Nessa fase do projeto você deverá criar um pequeno site em PHP com os seguintes requisitos:

Links de navegação
Home
Empresa
Produtos
Serviços
Contato


A estilização deverá ser feito utilizando o Twitter Bootstrap (se você não aprendeu utilizá-lo ainda, será uma ótima oportunidade)

A manutenção desse pequeno site deve ser muito prática, ou seja, utilizando recursos do PHP, você evitará ter que ficar repetindo blocos HTML em diversos arquivos

No rodapé do site, dever ser exibido "Todos os direitos reservados - <ANO>" - O ano precisa ser dinâmico

O sistema deve ser MUITO simples, sem utilização de qualquer banco de dados, etc.

A página de contato deve possuir um formulário de contato com os campos:

Nome
Email
Assunto
Mensagem

Quando o formulário for enviado, uma mensagem deve ser exibida para o usuário final:
Dados enviados com sucesso, abaixo seguem os dados que você enviou

Exibição dos campos preenchidos pelos usuário.



Ajustando as rotas
==================
Agora que você já possui um site simples e funcional com PHP, utilize os conhecimentos passados nesse capítulo para redirecionar todos os requests para seu index.php.

Logo, quando o usuário acessar site.com.br/contato, deverá ser chamada a página de contato.

REGRAS:

Você deverá verificar sempre se o arquivo acessado existe
Você deverá apresentar uma mensagem de erro 404 caso a url acessada seja inválida (não esqueça de enviar o STATUS CODE 404)
Crie uma função para fazer a verificação das rotas
Registre cada uma das rotas em um array.