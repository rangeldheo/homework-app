
## Rodando o projeto

Clone o projeto

Rode composer install

## Configurando arquivo .env

Crie um arquivo .env na pasta raiz

As configurações seguem a convenção do Laravel 7

Você precisará configurar a URL da API, é importante notar que os 
sufixos **/api/v1** são necessários após a url base da API
e um disparador de emails como a seguir:

URL_API=http://url-api/api/v1/

MAIL_MAILER=smtp

MAIL_HOST=smtp.seusmtp.com

MAIL_PORT=587

MAIL_USERNAME=seuusuario@seudominio.com

MAIL_PASSWORD=sua_senha

MAIL_ENCRYPTION=null

MAIL_FROM_ADDRESS=seuusuario@seudominio.com

Rode o comando **php artisan key:generate** para gerar a chave do app Laravel necessária

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
