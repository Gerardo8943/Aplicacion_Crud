# Aplicación de Productos

## Descripción de la Aplicación
Esta es una aplicación desarrollada con **Laravel** y **Bootstrap 5.3** que incluye funcionalidades como:
- **Login y Registro** de usuarios (Jetstream).
- CRUD de productos: crear, editar, eliminar y listar.
- Gestión de sesiones: iniciar y cerrar sesión.

La aplicación utiliza **Jetstream** para simplificar los formularios de login y registro, con validaciones integradas.

---

## Requisitos
Asegúrate de tener instalados los siguientes programas antes de continuar:
- **PHP** (versión 8.0 o superior).
- **Node.js** (versión 16 o superior).
- **Composer**.
- **MySQL**.
- **XAMPP** (para ejecutar Apache y MySQL).
- **Visual Studio Code** (o cualquier otro editor de texto).

---

## Instalación del Proyecto

### Paso 1: Configurar XAMPP
1. Descarga e instala **XAMPP**.
2. Abre XAMPP y activa los servicios de **Apache** y **MySQL** haciendo clic en los botones **Start**.

---

### Paso 2: Descargar y Configurar el Proyecto
1. Clona o descarga este repositorio en tu máquina.
2. Copia la carpeta del proyecto dentro de `C:\xampp\htdocs\`.
3. Asegúrate de que el proyecto esté en la ruta: `C:\xampp\htdocs\Aplicacion-Crud`.

---

### Paso 3: Configurar la Base de Datos
1. Accede a **phpMyAdmin** en [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
2. Crea una base de datos llamada `Aplicacion_Crud`.
3. Importa el archivo `sql/dump.sql`:
   - Ve a la pestaña **Importar**.
   - Selecciona el archivo: `C:\xampp\htdocs\Aplicacion-Crud\sql\dump.sql`.
   - Haz clic en **Continuar** para importar los datos.
   

> **Nota**: Si prefieres usar migraciones, salta este paso y ejecuta el comando `php artisan migrate` en el paso 4.



### Paso 4: Instalar Dependencias y Migrar
1. Abre el proyecto en **Visual Studio Code** (o tu editor de preferencia).
2. Abre la terminal y ejecuta los siguientes comandos en el directorio raíz del proyecto:
   ```bash
   composer install
   npm install
   php artisan migrate
   php artisan db:seed  # (Opcional) Si tienes datos de ejemplo configurados.

  ### Paso 5: Ejecutar la Aplicación
En la terminal ejecute "php artisan serve" he ingrese luego a  http://localhost:8000/login. en el navegador

# Aplicación de Productos

## Capturas de Pantalla


