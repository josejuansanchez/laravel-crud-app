# laravel-crud-app

Ejemplo de un CRUD muy básico desarrollado con [Laravel 10][1].

## Cómo desplegar el proyecto en un entorno de desarrollo

1. Clona el repositorio en tu máquina local y accede al directorio del proyecto.

2. Creamos los contenedores.

```bash
./vendor/bin/sail up -d
```

3. Creamos la estructura de la base de datos.

```bash
./vendor/bin/sail artisan migrate --force
```

4. Instalamos las dependencias de Node.js

```bash
./vendor/bin/sail npm install
```

5. Compilamos y minimizamos archivos estáticos (CSS y JavaScript)

```bash
./vendor/bin/sail npm run dev
```

## Referencias

- [«Create PHP Laravel 10 CRUD Web App with MySQL»][2] de [Digamber Singh][3].
- [«CRUD en Laravel»][4] de [Cursos de Desarrollo Web][5].

[1]: https://laravel.com/
[2]: https://www.positronx.io/php-laravel-crud-operations-mysql-tutorial/
[3]: https://github.com/SinghDigamber
[4]: https://www.cursosdesarrolloweb.es/blog/crud-laravel
[5]: https://www.cursosdesarrolloweb.es/