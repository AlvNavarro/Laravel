# CRM básico en Laravel - Primera Entrega

Este proyecto consiste en un sistema CRM funcional desarrollado con el framework **Laravel**. Permite la gestión integral de una empresa mediante 5 módulos CRUD conectados a una base de datos MySQL.

## 🚀 Requisitos Técnicos
* **Framework:** Laravel
* **Panel Administrativo:** AdminLTE 3
* **Base de Datos:** MySQL (XAMPP)
* **Lenguaje:** PHP 8.x / Composer

## 📂 Módulos Implementados
Se han desarrollado los 5 módulos requeridos, cada uno con su respectivo Modelo, Migración, Controlador y Vistas (Index y Create):

1.  **Clientes (Obligatorio):** Gestión de nombre, email, teléfono y dirección.
2.  **Productos:** Control de inventario, descripción y precios.
3.  **Proveedores:** Directorio de empresas suministradoras y contactos.
4.  **Empleados:** Gestión de plantilla, puestos y salarios.
5.  **Facturas:** Registro de ventas vinculado a los clientes mediante relaciones de Eloquent.

## 🛠️ Instalación y Configuración
Sigue estos pasos para ejecutar el proyecto en tu servidor local:

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/AlvNavarro/Laravel.git](https://github.com/AlvNavarro/Laravel.git)
    ```
2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```
3.  **Configurar el entorno:**
    * Renombrar `.env.example` a `.env`.
    * Configurar las credenciales de MySQL de XAMPP.
    * Crear la base de datos en phpMyAdmin.
4.  **Generar clave y migrar:**
    ```bash
    php artisan key:generate
    php artisan migrate
    ```
5.  **Instalar dependencias frontend:**
    ```bash
    npm install && npm run dev
    ```

## 📋 Funcionalidades
* Menú de navegación lateral integrado con AdminLTE.
* Validación de formularios en todos los módulos.
* Relaciones entre tablas (Facturas -> Clientes).
* Diseño responsivo y profesional.