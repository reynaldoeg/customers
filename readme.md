# Laravel Customers

Esta aplicación tiene como  funcionalidad principal mostrar un ejemplo de administración de clientes (CRUD).

## Getting Started


### Prerequisitos

 - PHP >= 7.0.0
 - Laravel 5.5
 - MySQL 5.6


### Instalación


Clonar el repositorio de github.
```s 
$ git clone git@github.com:reynaldoeg/customers.git
```

Entrar a la raiz del directorio
```s 
$ cd customers
```

Instalar dependencias con Composer
```s 
$ composer install
```

### Configuración

Copiar archivo .env.example y cambiarle el nombre por .env
```s 
$ cp .env.example .env
```

Configurar opciones locales y acceso a base de datos:
```s 
APP_NAME=Ingenia
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://127.0.0.1

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Generar "application key"
```s 
$ php artisan key:generate
```

### Migraciones
Esta aplicación incluye migraciones para crear las tablas que se utilizan y llenarlas con la información básica para su funcionamiento.

Para crear el repositorio de migraciones:
```s 
$ php artisan migrate:install
```

Para crear las tablas:
```s 
$ php artisan migrate
```

Para crear usuario del sistema y clientes de prueba:
```s 
$ php artisan db:seed
```

### Servidor local

Correr servidor local
```s 
$ php artisan serve
```

<p>Laravel se podrá ejecutar en la siguiente dirección <a href="http://127.0.0.1:8000" target="_blank">http://127.0.0.1:8000</a></p>

Para ingresar al sistema, se pueden usar las siguientes credenciales:
- Usuario: admin@ingenia.com
- Password: 7bN*eYG=;X

Aquí se podrá visualizar los clientes cargados a la base de datos.


## Authors

* **Reynaldo Esparza**  - [Github](https://github.com/reynaldoeg)


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details