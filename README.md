<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://m.eltiempo.com/uploads/2019/12/07/5dec47012d257.jpeg" width="400"></a></p>



## Descripción del Proyecto Cecytem



## Créditos

José Ramiro Álvarez


## Instrucciones de Instalación

* Instalación de PHP 7x.
* Instalación de manejador de paquetes para PHP (Composer).
* Instalación de nodejs.
* Instalación de la Base de Datos MySQL 8x.  [detalles] ( https://github.com/JRamyro/cecytem/blob/main/MySQLInstallation.md )
* Instalación de versionador de código GIT.

Se clona el proyecto (se copia link desde la cuenta de Github)

    git clone https://github.com/JRamyro/cecytem.git
   
Se crea carpeta <nombre del Proyecto>
cambiar a carpeta <nombre del proyecto>

    cd <nombre del proyecto>

Ejecutar

    composer install

Para referenciar los archivos situados en Storage hacia public se emplea

    php artisan storage:link

Se copia el proyecto <nombre>

en la terminal se emplea:

    cp .env.example .env
    php artisan key:generate
    
## Configuracion base de datos

Crear una DB y usuario

    mysql -u root -p
    CREATE DATABASE dblaravel; 

Se crea usuario y passw

    create user 'ouser'@'%' identified by 'QqX05.SA%>UNdd';

se otorgan todos los privilegios a usuario ramiro

    GRANT ALL PRIVILEGES ON *.* TO 'ouser'@'%';

Salimos de  la MySQL

    exit


Añandir información de la BD a .env

    DB_DATABASE=<replacename>
    DB_USERNAME=<replacename>
    DB_PASSWORD=<replacename>

Se instalan dependencias de javascript mediante:

    npm install
    npm run dev
    
Generar  modelos

    php artisan migrate

## Ejecutar app

    php artisan serve --host=0.0.0.0
    
Ejecutar comandos de git  para la cuenta en uso
    
    git config --global user.email "you@example.com"
    git config --global user.name "Tu Nombre"

guardar cambios (modificaciones)

    git add .
    git commit -m "comentario"
    git push origin main
    
Se solicita usuario de Github y pass
    
    git status
