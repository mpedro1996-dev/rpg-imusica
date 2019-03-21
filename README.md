# RPG - iMusica

Projeto com objetivo de criar um RPG de mesa, onde os usuários escolheram entre duas raças

## Requisitos
* PHP >= 7.1.3 ^
* PostgreSQL

### Instalando Projeto

Clone o projeto e aponte para o branch master

```
git clone 
git checkout master
```

Crie o arquivo .env na raiz e copie o conteúdo de .env.example para .env.<br>
O arquivo .env deverá ficar assim por enquanto:
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:Cj2VFfValtR8T98yhjtTcTg+Yflw76RlPakS2GULkkI=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=rpg-imusica
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

Entre no diretório do projeto pelo terminal e execute o comando:
```
php artisan key:generate 
```

Altere no .env, as linhas de conexão com banco, coloque como sua preferência:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=rpg-imusica
DB_USERNAME=homestead
DB_PASSWORD=secret
```

No diretório do projeto pelo terminal, execute o comando:

```
php artisan migrate:refresh --seed
```

Se não estiver rodando o projeto com homestead do laravel, execute para rodar a aplicação localmente:
```
php artisan serve
```

### Arquivos

* routes/api.php => Arquivo de rotas para as APIs construídas
* routes/web.php => Arquivo de rotas para as Views construídas
* app/Entity => Entidades do projeto
* app/Http/Controllers/ => Arquivos Controllers
* app/Http/Requests/ => Validação de requisições
* app/Http/Services/ => Serviços construídos para aplicações de regras de negócio

