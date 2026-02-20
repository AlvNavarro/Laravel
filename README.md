# CRM Laravel - Segunda Entrega

Esta entrega amplía las capacidades del CRM inicial mediante la gestión de archivos, control de acceso y mejoras en la interfaz de usuario.

## 🛠️ Nuevas Funcionalidades
* **DataTables:** Implementación de búsqueda en tiempo real y ordenación en el listado de Clientes.
* **Paginación:** Uso del sistema nativo de Laravel (`paginate()`) para optimizar la carga de datos.
* **Gestión de Archivos:** * Subida de imágenes de perfil para clientes.
    * Gestión de documentos PDF asociados a registros.
    * Uso de `storage:link` para el acceso público a recursos.
* **Roles y Permisos:** * Sistema de roles: `admin` y `usuario`.
    * Restricción de interfaz: Solo los administradores pueden visualizar y ejecutar la acción de eliminar.

## 👥 Usuarios de Prueba
Se ha incluido un Seeder para facilitar la corrección. Ejecutar: `php artisan db:seed --class=RoleSeeder`

| Usuario | Email | Password | Rol |
| :--- | :--- | :--- | :--- |
| **Administrador** | admin@crm.com | admin123 | Acceso Total |
| **Usuario** | user@crm.com | user123 | Crear y Editar |

## ⚙️ Instalación Adicional
Tras clonar o actualizar esta rama, es necesario ejecutar:
1. `php artisan migrate` (para añadir columnas de fotos y roles).
2. `php artisan storage:link` (para que las imágenes sean visibles).
3. `php artisan db:seed --class=RoleSeeder` (para los usuarios de prueba).