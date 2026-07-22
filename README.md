# Actividad 4 - API REST con Laravel 12, Sanctum y CRUD

## Alumno

**Jorge Emilio Núñez Reyes**

---

# Enlaces

## Repositorio GitHub

https://github.com/emilioreyes2219/JENRact4_t4

## API desplegada en VPS

http://217.15.171.252/api

---

# Descripción

Este proyecto consiste en el desarrollo de una **API REST** utilizando **Laravel 12** y **Laravel Sanctum** para la autenticación mediante tokens.

La aplicación permite el registro e inicio de sesión de usuarios y la administración de productos mediante un CRUD completo (Crear, Consultar, Actualizar y Eliminar). El proyecto fue desplegado en un **VPS con Ubuntu**, utilizando **Nginx**, **PHP 8.3** y **MySQL** como servidor de base de datos.

---

# Tecnologías utilizadas

- Laravel 12
- PHP 8.3
- Laravel Sanctum
- MySQL
- Nginx
- Composer
- Git
- GitHub
- Bruno
- Ubuntu VPS

---

# Base de datos

**Nombre de la base de datos**

```
act4_api
```

**Tabla principal**

```
productos
```

| Campo | Tipo |
|--------|------|
| id | bigint |
| nombre | string |
| categoria | string |
| precio | decimal |
| stock | integer |
| proveedor | string |

---

# Autenticación

La autenticación se realiza mediante **Laravel Sanctum** utilizando **Bearer Tokens**.

Después de iniciar sesión se obtiene un token que debe enviarse en cada petición protegida.

Ejemplo:

```
Authorization: Bearer TU_TOKEN
```

---

# Endpoints de la API

## Registro de usuario

**Método**

```
POST
```

**URL**

```
http://217.15.171.252/api/register
```

**Body**

```json
{
    "name":"Emilio",
    "email":"emilio@test.com",
    "password":"12345678",
    "password_confirmation":"12345678"
}
```

### Evidencia

![](img/registropost.jpg)

---

## Inicio de sesión

**Método**

```
POST
```

**URL**

```
http://217.15.171.252/api/login
```

**Body**

```json
{
    "email":"emilio@test.com",
    "password":"12345678"
}
```

### Evidencia

![](img/postlogin.jpg)

---

## Obtener todos los productos

**Método**

```
GET
```

**URL**

```
http://217.15.171.252/api/productos
```

### Evidencia

![](img/getproducto.jpg)

---

## Obtener un producto por ID

**Método**

```
GET
```

**URL**

```
http://217.15.171.252/api/productos/{id}
```

### Evidencia

![](img/getPRoducto2.jpg)

---

## Crear un producto

**Método**

```
POST
```

**URL**

```
http://217.15.171.252/api/productos
```

**Body**

```json
{
    "nombre":"Laptop Lenovo",
    "categoria":"Tecnologia",
    "precio":15000,
    "stock":5,
    "proveedor":"Lenovo"
}
```

### Encabezados

```
Authorization: Bearer TU_TOKEN
Accept: application/json
Content-Type: application/json
```

### Evidencia

![](img/productopost.jpg)

---

## Actualizar un producto

**Método**

```
PUT
```

**URL**

```
http://217.15.171.252/api/productos/{id}
```

**Body**

```json
{
    "nombre":"Laptop Lenovo Legion",
    "categoria":"Gaming",
    "precio":20000,
    "stock":3,
    "proveedor":"Lenovo"
}
```

### Encabezados

```
Authorization: Bearer TU_TOKEN
Accept: application/json
Content-Type: application/json
```

### Evidencia

![](img/putproducto.jpg)

---

## Eliminar un producto

**Método**

```
DELETE
```

**URL**

```
http://217.15.171.252/api/productos/{id}
```

### Encabezados

```
Authorization: Bearer TU_TOKEN
Accept: application/json
```

### Evidencia

![](img/deleteproducto.jpg)

---

# Instalación

## Clonar el repositorio

```bash
git clone https://github.com/emilioreyes2219/JENRact4_t4.git
```

## Entrar al proyecto

```bash
cd JENRact4_t4
```

## Instalar dependencias

```bash
composer install
```

## Copiar el archivo de entorno

```bash
cp .env.example .env
```

## Configurar la conexión con MySQL

Editar el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=act4_api
DB_USERNAME=laravel
DB_PASSWORD=TuPassword123!
```

## Generar la llave de la aplicación

```bash
php artisan key:generate
```

## Ejecutar las migraciones

```bash
php artisan migrate
```

## Limpiar caché

```bash
php artisan optimize:clear
```

## Iniciar el servidor

```bash
php artisan serve
```

---

# Funcionalidades

- Registro de usuarios
- Inicio de sesión
- Autenticación mediante Laravel Sanctum
- Generación de tokens
- CRUD completo de productos
- Validación de datos
- Respuestas en formato JSON
- API REST
- Paginación de productos
- Despliegue en VPS con Ubuntu

---

# Autor

**Jorge Emilio Núñez Reyes**

Programación Web