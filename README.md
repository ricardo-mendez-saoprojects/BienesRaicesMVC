# BienesRaicesMVC

Portal inmobiliario con PHP orientado a objetos, patrón MVC propio, ActiveRecord y MySQL: listado de propiedades, área de administración de propiedades y vendedores, y formulario de contacto con PHPMailer.

## Configuración

Las credenciales de base de datos y de correo no están en el código: se leen de `includes/.env`, que está en `.gitignore`.

1. Copia `includes/.env.example` como `includes/.env` y rellena tus valores.
2. Instala las dependencias con `composer install` y `npm install`.
3. Compila los recursos con `npx gulp` y arranca con `php -S localhost:3000 -t public`.

> **Nota de seguridad:** versiones anteriores de este repo incluían credenciales de un sandbox SMTP de pruebas. Se han eliminado de todo el historial.
