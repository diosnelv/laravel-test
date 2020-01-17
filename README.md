#Laravel 6

##Instalar  el proyecto

###Instalar Dependencias
```composer install```

###Generar la Base de Datos
```php artisan migrate```

###Ejecturar Cargadores
```php artisan db:seed```

###Ejecturar un Cargador Específico
```php artisan db:seed --class=UsersTableSeeder```

###Crear claves
```php artisan key:generate```


##Otros comandos

###Crear Tablas (Migrations)
```php artisan make:migration create_producers_table```

###Crear Cargadores (Seeders)
```php artisan make:seeder GenresTableSeeder```

###Controladores
```php artisan make:controller GenreController --resource```

###Modelos
```php artisan make:model Models/Genre```

###ver rutas
``` php artisan route:list```


