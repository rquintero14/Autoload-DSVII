# Proyecto de PSR

## Descripción

Este es un proyecto PHP simple que demuestra el uso de estándares PSR-4 para la carga automática de clases utilizando Composer. El proyecto incluye clases básicas como `User` y `ProductModel` para ilustrar la estructura y el funcionamiento.

PSR (PHP Standards Recommendations) son estándares definidos por el PHP Framework Interop Group (PHP-FIG) para promover la interoperabilidad entre bibliotecas y frameworks PHP.

## Requisitos Previos

- PHP 7.4 o superior
- Composer (gestor de dependencias para PHP)

## Instalación

1. Asegúrate de tener PHP y Composer instalados en tu sistema.
2. Clona o descarga el proyecto.
3. Ejecuta `composer install` para instalar las dependencias y configurar la carga automática.

## Uso

Para ejecutar el proyecto, navega al directorio raíz y ejecuta:

```bash
php index.php
```

Esto creará instancias de las clases `User` y `ProductModel` y mostrará sus valores de retorno en la consola:

```
Dave
123
```

## Estructura del Proyecto

- `index.php`: Archivo principal que requiere las clases y las ejecuta.
- `App/User.php`: Clase `User` con un método `getName()` que devuelve "Dave".
- `Database/Model/ProductModel.php`: Clase `ProductModel` con un método `getId()` que devuelve 123.
- `composer.json`: Archivo de configuración de Composer para la carga automática PSR-4.
- `vendor/`: Directorio generado por Composer con las dependencias y archivos de carga automática.

## Dependencias

- Composer: Para la gestión de dependencias y carga automática.

## Contribución

Si deseas contribuir a este proyecto, por favor:

1. Haz un fork del repositorio.
2. Crea una rama para tu feature (`git checkout -b feature/nueva-funcionalidad`).
3. Haz commit de tus cambios (`git commit -am 'Agrega nueva funcionalidad'`).
4. Haz push a la rama (`git push origin feature/nueva-funcionalidad`).
5. Abre un Pull Request.

## Notas

Este proyecto es un ejemplo básico y no incluye funcionalidades avanzadas como bases de datos reales, rutas web o frameworks completos. Está diseñado para demostrar conceptos fundamentales de PHP y PSR.