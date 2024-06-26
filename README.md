<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistema de Facturación - Tabla de Registro Compras

## Autores

   - [@Calderon Carlos Luis Miguel](https://github.com/Clderon)
   - [@Condori Mañuico Cinthia](https://github.com/Clderon)
   - [@Garcia Guardia Karolay A.](https://github.com/Clderon)
   - [@Hernandez Cuenca Mariela Carlita](https://github.com/Clderon)

Este proyecto esparte  de un sistema de facturación que incluye una tabla para el registro de compras.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- PHP >= 8.1
- Laravel 10
- Composer
- Node.js y NPM
- Servidor de bases de datos (MySQL)


## Instalación

Sigue estos pasos para instalar y configurar el proyecto localmente:

1. **Clona el repositorio:**

   ```bash
   git clone https://github.com/Clderon/Sistema.git
   cd Sistema
   ```
2. **Genera la clave de la aplicación Laravel:**

   ```bash
   php artisan key:generate
   ```
3. **Instala las dependencias de PHP:**

   ```bash
      composer install
   ```

4. **Configura el archivo de entorno:**

   ```bash
      cp .env.example .env
   ```

5. **Abre el archivo .env y ajusta la configuración de la base de datos:**


   ```bash
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=dbsistema
      DB_USERNAME=root
      DB_PASSWORD=
   ```
6. **Ejecuta las migraciones y semillas de la base de datos:**

   ```bash
      php artisan migrate --seed
   ```

   
7. **Instala las dependencias:**

   ```bash
      npm install
   ```

8. **Compila los recursos de frontend:**

   ```bash
      npm run dev
   ```

9. **Inicia el servidor:**

   ```bash
      php artisan serve
      Accede al sistema:
   ```

Abre tu navegador web y navega a http://localhost:8000.

# Generador de CRUD Laravel 10.x 
Este proyecto es un generador de CRUD en Laravel que utiliza una sentencia SQL para generar una carpeta con tres vistas Blade, incluyendo las funciones principales de un CRUD: index, register y create.

1. **Instala las Dependencias:**
   
```bash
   pip install tkinter
   pip install re
   pip install os
```

2. **Determinar la ruta de creacion de los archivo en el archivo generador.py:**
```bash
   ruta_carpeta = r'C:\laragon\www\sistema\resources\views'
```

3. **Tipo de sentencia SQL que soporta :**
```bash
   CREATE TABLE NombreTabla(
      .........
   )
```

4. **Ejecuta el index.py Generador de CRUD:**

Ejecuta el siguiente comando en tu terminal y sigue las instrucciones para ingresar la sentencia SQL y generar las vistas:
