# 📘 Parcial #2 - Desarrollo y Técnicas de Aplicaciones Web

**Tema:** Almacenamiento Local y Web Services  
**Fecha de entrega:** 🗓️ Jueves 01 de mayo de 2025.

---
## 🔧 Requisitos del Proyecto

Este proyecto Laravel incluye:

- ✅ Lectura de archivos XML desde `storage/xml` y conversión a JSON.
- ✅ Visualización de datos en una tabla Bootstrap.
- ✅ Implementación de un servicio SOAP gratuito para suma y multiplicación.

---
🛠️ **Pasos para ejecutar el proyecto**


📥 **Paso 1: Clonar el repositorio**

El primer paso es clonar el repositorio del proyecto:

```bash
git clone https://github.com/mauriciorosalesues/BaseProject.git

```
---

📦 **Paso 2: Instalar dependencias de PHP**

Luego, se deben instalar las dependencias de PHP utilizando Composer:

```bash
composer install
```
---

🧶 **Paso 3: Instalar dependencias de Node**

A continuación, se deben instalar las dependencias de Node.js ejecutando:

```bash
npm install
```
---
🛢️ **Paso 4: Migrar la base de datos**

Es necesario crear una base de datos llamada `laravel` en MySQL. Para ello, se puede ejecutar el siguiente comando:

```bash
CREATE DATABASE laravel;
```
Después de crear la base de datos, se debe ejecutar la migración con el siguiente comando:

```bash
php artisan migrate
```

🔐 **Configurar archivo `.env`**

Es importante verificar que el archivo `.env` tenga la siguiente configuración para conectar la base de datos correctamente:

```env
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD= [ingrese la contraseña de su gestor de base de datos]
```
Si se tiene contraseña, agrégala después de DB_PASSWORD= 

---

🔄 **Paso 5: Llenar la base de datos con usuarios**

Después de migrar las tablas, es necesario llenar la tabla de usuarios con datos de ejemplo. Para ello, se debe ejecutar el siguiente comando para correr los seeders:


```bash
php artisan db:seed
```
Esto insertará los usuarios en la tabla `users`, los usuarios creados son:

- **Administrador:**
  - Usuario: `admin`
  - Contraseña: `1234`

- **Usuario normal:**
  - Usuario: `usuario`
  - Contraseña: `1234`

Una vez realizado este paso, puedes acceder al proyecto desde la web usando los siguientes datos de login:

- **Administrador:** Usuario: `admin`, Contraseña: `1234`

- **Usuario normal:** Usuario: `usuario`, Contraseña: `1234`
---

▶️ **Paso 6: Iniciar el servidor**

Una vez instaladas las dependencias, se puede iniciar el servidor ejecutando el siguiente comando:

```bash
php artisan serve
```
---




## 👥 Integrantes del Grupo
|            **Nombre**                            | **Carnet** |
|--------------------------------------------------|------------|
| **Hazel Azucena Calderón Bonilla**               | `CB22014`  |
| **Douglas Isaac Barrera Magaña**                 | `BM22025`  |
| **Ricardo Enrique Heredia Ramos**                | `HR21024`  |
| **Gabriel Omar Calderón Calderón**               | `CC22060`  |
| **Fernando José Rosales Valdes**                 | `RV19012`  |
