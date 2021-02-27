<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://m.eltiempo.com/uploads/2019/12/07/5dec47012d257.jpeg" width="400"></a></p>



## Descripción del Proyecto Cecytem



## Créditos

José Ramiro Álvarez


## Instrucciones de Instalación

* Instalación de PHP 7x.
* Instalación de manejador de paquetes para PHP (Composer).
* Instalación de nodejs.
* Instalación de la Base de Datos MySQL 8x.
* Instalación de versionador de código GIT.

Una vez que se copia el proyecto

    cp .env.example .env
    php artisan key:generate

Añandir información de la BD a .env

    DB_DATABASE=<replacename>
    DB_USERNAME=<replacename>
    DB_PASSWORD=<replacename>

Para ejecutar

    composer install
    npm install
    npm run dev

## Ejecutar app

    php artisan serve --host=0.0.0.0
