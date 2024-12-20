//# Aplicación de Productos

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

## Instalación del Proyecto (Actualizado)

### Paso 1: Configurar XAMPP
1. Descarga e instala **XAMPP** desde [https://www.apachefriends.org](https://www.apachefriends.org).
2. Abre **XAMPP** y activa los servicios de **Apache** y **MySQL** haciendo clic en los botones **Start**.

---

### Paso 2: Descargar y Configurar el Proyecto
1. Clona o descarga este repositorio en tu máquina.
2. Copia la carpeta del proyecto dentro de `C:\xampp\htdocs\`.
3. Asegúrate de que el proyecto esté en la ruta: `C:\xampp\htdocs\Aplicacion_Crud-main`.

---

### Paso 3: Configurar la Base de Datos
1. Accede a **phpMyAdmin** en [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
2. Crea una base de datos llamada `Aplicacion_Crud`.
3. Importa el archivo `sql/dump.sql`:
   - Ve a la pestaña **Importar**.
   - Selecciona el archivo: `C:\xampp\htdocs\Aplicacion_Crud-main\sql\dump.sql`.
   - Haz clic en **Continuar** para importar los datos.

> **Nota**: Si prefieres usar migraciones, salta este paso y ejecuta el comando `php artisan migrate` en el paso 4.

---

### Paso 4: Instalar Dependencias y Migrar
1. Abre la terminal en la carpeta raíz del proyecto.
2. Instala las dependencias de PHP y Node.js:
   ```bash
   composer install
   npm install
   ## Genera la clave de la aplicación:
   php artisan key:generate
   php artisan storage:link // para las imagenes , si sale que ya existe la conexion entonces siga al siguiente paso


### Paso 5: Construir Recursos Frontend
Genera los archivos del frontend:


# poner en la terminal: 
npm run build


   # Migra la base de datos:
   php artisan migrate

### Paso 6: Configurar Archivos Generados
Limpia cualquier caché de configuración

En la terminal poner: 

php artisan config:clear
php artisan cache:clear

### Paso 7: Ejecutar la Aplicación
Inicia el servidor de desarrollo:

php artisan serve

Abre tu navegador en http://localhost:8000.



## Capturas de la aplicacion

##Primeras vistas de la aplicacion

#Login
![Pantalla principal](capturas/captura1.png)

#Productos

![Pantalla principal](capturas/captura2.png)

#Crear producto

![Pantalla principal](capturas/captura3.png)

#Registro
![Pantalla principal](capturas/captura5.png)

#Presentacion en video

Link de youtube : https://www.youtube.com/watch?v=CSGmIkCFYUI