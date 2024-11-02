

# Proyecto de Gestión de Servicios y Vehículos

Este proyecto es una aplicación web para la gestión de servicios y vehículos, que permite administrar clientes, vehículos, servicios, tipos de servicio y marcas de vehículos.

## Estructura de la Base de Datos

La base de datos incluye las siguientes tablas principales:

- **servicios**: Información de los servicios ofrecidos a los clientes.
- **clientes**: Información de los clientes registrados en el sistema.
- **vehiculos**: Detalles de los vehículos, asociados a los clientes.
- **tipo_servicios**: Lista de los tipos de servicios disponibles.
- **marca_vehiculos**: Registro de las marcas de vehículos para clasificación y asociación.

Cada tabla está relacionada para facilitar el acceso y la administración de los datos mediante llaves foráneas.

## Arquitectura de la Aplicación

Esta aplicación está desarrollada en **Laravel 11** y sigue la arquitectura MVC (Modelo-Vista-Controlador):
- **Modelos**: Gestionan la lógica de acceso a los datos para las entidades principales (Clientes, Vehículos, Servicios, Marcas).
- **Vistas**: Proveen la interfaz de usuario para interactuar con el sistema.
- **Controladores**: Manejan las solicitudes de los usuarios, procesan la lógica de negocio y retornan respuestas a las vistas.

La aplicación incluye autenticación básica y validación de datos, además de formularios para la gestión de cada entidad.

## Enlace al Sitio de Pruebas

Accede a la versión de prueba de la aplicación en el siguiente enlace: [Sitio de Pruebas](https://github.com/Jesus-Sente/gestion-servicio-taller.git)
