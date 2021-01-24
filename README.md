# BUENAS PRACTICAS

## Estandar de nomenclatura

Para PHP:

-   Las clases deben estar con la convencion StudlyCaps, la cual nos indica que la primera letra debe ir en mayuscula y si esta implica 2 palabras la segunda tambien con mayuscula sin separadores.

```php
class UserAdmin{}
```

-   Los metodos deber usar la convencion camelCase, la cual nos indica que en metodos la primera letra debe ser minuscula y las demas palabras empezar en mayuscula sin separadores.

```php
function getUser(){}
```

-   Las constantes dentro de las clases deben ser definidas en mayúsculas empleando el caracter "\_" como separador.

## Guia de estilo de codigo

-   Se pueden añadir líneas en blanco para mejorar la legibilidad del código
-   No debe haber más de una instrucción por línea.
-   Usar identacion para mejorar la legibilidad del código.
-   Usar la extension "Prettier - Code formatter" para VSCode

## Comados artisan

Para obtener el Modelo Controlador y migracion con los estadaresdebidos

```
php artisan make:model Todo -mcr
```

Crea el Modelo Controlador, migracion, seeder y factory.

```
php artisan make:model Todo -a
```

Opciones:

-   -c, --controller Crear un nuevo controlador para el modelo
-   -f, --factory Crear una nueva fábrica para el modelo
-   --force Crear la clase incluso si el modelo ya existe
-   -m, --migration Crear un nuevo archivo de migración para el modelo
-   -s, --seed Crear un nuevo archivo de sembradora para el modelo
-   -p, --pivot Indica si el modelo generado debe ser un modelo de mesa rmediate inte personalizada
-   -r, --resource Indica si el controlador generado debe ser un controlador resour ce

Solo el controlador

```
php artisan make:controller NombreController
```

Controlador con metodos

```
php artisan make:controller NombreController –r
```

Crear modelo

```
php artisan make:model Nombre
```

Crear migracion

```
php artisan make:migration CreateNombreTable
```

Crear la migracion con su modelo

```
php artisan make:migration CreateNombreTable -m
```

### Ejemplo "Todo" algunas sugerencias

-   Uso de try catch
-   Uso de Database Transactions
