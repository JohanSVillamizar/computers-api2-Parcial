# Proyecto Laravel CRUD - Computers

Este proyecto es un taller de la universidad para aprender a crear un CRUD usando **Laravel** con base de datos en **PostgreSQL**.  
El modelo que me correspondió hacer en el ERD es `computers`.

---

## Requisitos

- Tener instalado **PHP 8.2 o superior**
- **Composer** (para instalar dependencias de Laravel)
- **PostgreSQL** con una base de datos creada llamada `computers_db2`
- Extensión de PHP `pdo_pgsql` habilitada

---

## Instalación y configuración

1. Clonar o descargar el proyecto:
   ```bash
   git clone <url-del-repo>
   cd computers-api
   ```

2. Instalar dependencias:
   ```bash
   composer install
   ```

3. Copiar el archivo `.env.example` y renombrarlo como `.env`, después configurar los datos de la base de datos:
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=tu_baseDeDatos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

4. Generar la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```

5. Ejecutar migraciones y seeders para crear la tabla y llenarla con datos de prueba:
   ```bash
   php artisan migrate --seed
   ```

6. Levantar el servidor de Laravel:
   ```bash
   php artisan serve
   ```
   La aplicación quedará disponible en: [http://127.0.0.1:8000](http://127.0.0.1:8000)

   En Postman o en tus pruebas puedes definir una variable `base_url` con este valor:
   ```
   {{base_url}} = http://127.0.0.1:8000/api
   ```

---

## Endpoints principales

> Usa `{{base_url}}` como variable en lugar de escribir la URL completa.

### Listar todos los computadores
```
GET {{base_url}}/computers
```

### Crear un computador
```
POST {{base_url}}/computers
```
Body en JSON:
```json
{
  "computer_brand": "Dell",
  "computer_model": "Latitude 7520",
  "computer_price": 1299.99,
  "computer_ram_size": 16,
  "computer_is_laptop": true
}
```

### Ver un computador por id
```
GET {{base_url}}/computers/{id}
```

### Actualizar un computador
```
PUT {{base_url}}/computers/{id}
```

### Eliminar un computador
```
DELETE {{base_url}}/computers/{id}
```

---

## Probar con Postman

- Definir la variable de entorno `base_url=http://127.0.0.1:8000/api`.  
- Importar la colección o simplemente crear las solicitudes a mano.  
- Probar crear, listar, actualizar y eliminar computadores.

---

## Notas finales

- El proyecto es solo con fines académicos.  
- Me sirvió para repasar migraciones, controladores, factories, seeders y autenticación con Sanctum.  