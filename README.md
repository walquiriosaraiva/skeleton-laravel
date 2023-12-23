<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Informação sobre o sistema da API feito em Laravel

Backend desenvolvido usando Laravel para API, veja como foi construído:

```bash
docker-compose run --rm composer create-project laravel/laravel backend
```
```bash
cd backend
```
Baixando a biblioteca JWT
```bash
docker-compose run --rm composer require tymon/jwt-auth
```
Publicando as configurações do JWT, isso vai criar um arquivo `config/jwt.php`
```bash
docker-compose run --rm artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```
Execute o seguinte comando para gerar a chave secreta usada para assinar os tokens JWT
```bash
docker-compose run --rm artisan jwt:secret
```
```bash
docker-compose run --rm artisan migrate --seed
```
No arquivo `routes/api.php`
```bash
Route::middleware('jwt.auth')->group(function () {    
    //Adicione aqui as rotas autenticadas
});
```
Subindo o projeto local
```bash
docker-compose up -d
```
Caso seja necessários visualizar rotas e demais comandos do artisan siga o exemplo abaixo:
```bash
docker-compose run --rm artisan route:list
```