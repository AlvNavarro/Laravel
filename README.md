# CRM - Sistema de Gestión de Clientes

Este es un sistema CRM desarrollado con **Laravel** para la gestión eficiente de clientes y ventas.

## 🚀 Características
* Gestión de Usuarios (Login/Registro).
* CRUD de Clientes (Crear, Leer, Actualizar, Borrar).
* Gestión de Contactos.
* Panel de Administración.

## 🛠️ Tecnologías utilizadas
* **Backend:** PHP (Laravel)
* **Base de Datos:** MySQL (XAMPP)
* **Frontend:** Blade, Bootstrap/Tailwind (según uses)

## ⚙️ Instalación y Configuración

Si descargas este proyecto, sigue estos pasos para hacerlo funcionar:

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/AlvNavarro/Laravel.git](https://github.com/AlvNavarro/Laravel.git)
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Configurar entorno:**
    * Duplica el archivo `.env.example` y renómbralo a `.env`.
    * Configura tus credenciales de base de datos en el archivo `.env`.

4.  **Generar clave de aplicación:**
    ```bash
    php artisan key:generate
    ```

5.  **Base de datos:**
    * Crea una base de datos vacía en phpMyAdmin.
    * Ejecuta las migraciones:
    ```bash
    php artisan migrate
    ```

6.  **Iniciar servidor:**
    ```bash
    php artisan serve
    ```

---
Desarrollado por **Navarro Chica,Alvaro**.
