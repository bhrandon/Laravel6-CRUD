# Laravel6-CRUD
Foi criado um CRUD simples, demostrando algumas funções do laravel para os alunos do curso de extensão de Introdução ao framework Laravel. 

# Para baixar o projeto:
-> 01 - Com o git instalado de um git clone no diretório onde o projeto vai ficar:<br>
<code>git clone git@github.com:seuprojeto</code><br>
-> 02 - Acesse o projeto:<br>
<code>cd Laravel6-CRUD</code><br>
-> 03 - Instale as dependências e o framework:<br>
<code>composer install --no-scripts</code><br>
-> 04 - Criar uma copia do arquivo .env.example com nome .env:<br>
<code>cp .env.example .env</code><br>
-> 05 - Gerar uma nova chave para a aplicação: <br>
<code>php artisan key:generate</code><br>
-> 06 - Criar o banco no MySQL:<br>
<code>CREATE DATABESE nomeBanco</code><br>
-> 07 - Configura o .env colocando os dados do banco:<br>
<code>DB_CONNECTION=mysql</code><br>
<code>DB_HOST=127.0.0.1</code><br>
<code>DB_PORT=3306</code><br>
<code>DB_DATABASE= <b>nomeBanco</b></code><br>
<code>DB_USERNAME= <b>usuarioBanco</b></code><br>
<code>DB_PASSWORD= <b>senhaBanco</b></code><br>
-> 08 - Depois de configurar o .env rodar a migrate:<br>
<code>php artisan migrate</code><br>
-> 09 - Iniciar o servidor de desenvolvimento interno do PHP<br>
<code>php artisan serve</code>
