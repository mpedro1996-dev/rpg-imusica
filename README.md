# RPG - iMusica

Projeto com objetivo de criar um RPG de mesa, onde os usuários escolheram entre duas raças

## Requisitos
* PHP >= 7.1.3
* PostgreSQL
* SO: Linux(Recomendado) ou Windows

### Instalando Projeto

Clone o projeto e aponte para o branch master

```
git clone https://github.com/MPedro1996/rpg-imusica.git
git checkout master
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

