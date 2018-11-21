<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instrucciones de Instalación

Para instalar esta API solo falta seguir las siguientes instrucciones:

- Copiar el repositorio a su ordernador.
- Crear una base de datos con el nombre "noticia" con el cotejamiento utf8_general_ci.
- Ejecutar la terminal o consola y acceder al directorio donde se encuentre el proyecto.
- Ejecutar el comando [$ php artisan migrate] para crear las tablas.
- Ejecutar el comando [$ php artisan db:seed --class=NoticiasTableSeeder] para crear noticias de prueba.
- Ejecutar el comando [$ php artisan db:seed --class=AdminTableSeederder] para crear usuarios de prueba.
- Usar POSTMAN o la herramienta de preferencia para probar las peticiones.

## Las peticiones se realizarán de acuerdo al siguiente formato o estructura:

ADMIN:

- POST http://127.X.X.X:XXX/api/register
- GET http://127.X.X.X:XXX/api/register/4
- PUT http://127.X.X.X:XXX/api/register/7?name=Jose
- DELETE http://127.X.X.X:XXX/api/register/3
- POST http://127.X.X.X:XXX/api/login/
- POST http://127.X.X.X:XXX/api/logout/

NOTICIA:

- GET http://127.X.X.X:XXX/api/noticias/4
- GET http://127.X.X.X:XXX/api/noticias

Nota: Las siguientes operaciones estan protegidas, por lo que se debe estar autenticado para acceder.

Para hacerlo, sólo basta con pasar como parametro en el header [Authorization : Bearer + el api_token almacenado en la base de datos al ejectutar la peticion de  "login"].

- POST http://127.X.X.X:XXX/api/noticias/?title=Novo titulo&body=Novo conteudo 
- PUT http://127.X.X.X:XXX/api/noticias/4?title=Titulo A
- DELETE http://127.X.X.X:XXX/api/noticias/3 http://127.0.0.1:8000/api/noticias/6


## Instruções de instalação

Para instalar esta API, basta seguir as seguintes instruções:

- Copie o repositório para o seu computador.
- Crie um banco de dados com o nome "news" com o agrupamento utf8_general_ci.
- Execute o terminal ou console e acesse o diretório onde o projeto está localizado.
- Execute o comando [$ php artisan migrate] para criar as tabelas.
- Execute o comando [$ php artisan db: seed --class = NewsTableSeeder] para criar notícias de teste.
- Execute o comando [$ php artisan db: seed --class = AdminTableSeederder] para criar usuários de teste.
- Use o POSTMAN ou a ferramenta de preferência para testar as solicitações.

## Os pedidos serão feitos de acordo com o seguinte formato ou estrutura:

ADMIN:

- POST http://127.X.X.X:XXX/api/register
- GET http://127.X.X.X:XXX/api/register/4
- PUT http://127.X.X.X:XXX/api/register/7?name=Jose
- DELETE http://127.X.X.X:XXX/api/register/3
- POST http://127.X.X.X:XXX/api/login/
- POST http://127.X.X.X:XXX/api/logout/

NOTICIA():

- GET http://127.X.X.X:XXX/api/noticias/4
- GET http://127.X.X.X:XXX/api/noticias

Nota: As seguintes operações são protegidas, portanto, você deve estar autenticado para acessar.

Para fazer isso, basta passar como um parâmetro no cabeçalho [Authorization: Bearer + o api_token armazenado no banco de dados ao executar a requisição "login"].

- POST http://127.X.X.X:XXX/api/noticias/?title=Novo titulo&body=Novo conteudo 
- PUT http://127.X.X.X:XXX/api/noticias/4?title=Titulo A
- DELETE http://127.X.X.X:XXX/api/noticias/3 http://127.0.0.1:8000/api/noticias/6


## Instalation Instructions:


To install this API, it is only necessary to follow the following instructions:

- Copy the repository to your computer.
- Create a database with the name "news" with the collation utf8_general_ci.
- Run the terminal or console and access the directory where the project is located.
- Run the [$ php artisan migrate] command to create the tables.
- Run the [$ php artisan db: seed --class = NewsTableSeeder] command to create test news.
- Run the [$ php artisan db: seed --class = AdminTableSeederder] command to create test users.
- Use POSTMAN or the preference tool to test requests.

## The requests will be made according to the following format or structure:

ADMIN:

- POST http://127.X.X.X:XXX/api/register
- GET http://127.X.X.X:XXX/api/register/4
- PUT http://127.X.X.X:XXX/api/register/7?name=Jose
- DELETE http://127.X.X.X:XXX/api/register/3
- POST http://127.X.X.X:XXX/api/login/
- POST http://127.X.X.X:XXX/api/logout/

NOTICIA(NEWS):

- GET http://127.X.X.X:XXX/api/noticias/4
- GET http://127.X.X.X:XXX/api/noticias

Note: The following operations are protected, so you must be authenticated to access.

To do so, just pass as a parameter in the header [Authorization: Bearer + the api_token stored in the database when executing the "login" request].

- POST http://127.X.X.X:XXX/api/noticias/?title=Novo titulo&body=Novo conteudo 
- PUT http://127.X.X.X:XXX/api/noticias/4?title=Titulo A
- DELETE http://127.X.X.X:XXX/api/noticias/3 http://127.0.0.1:8000/api/noticias/6