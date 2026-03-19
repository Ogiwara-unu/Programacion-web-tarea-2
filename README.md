# Programación Web - Tarea 2

## Descripción del Proyecto
Esta aplicación es una implementación de una tarea académica utilizando el framework **Laravel**. El objetivo principal es demostrar el manejo de formularios, validación de datos y persistencia temporal de información sin el uso de bases de datos ni controladores.

## Requerimientos Cumplidos
El proyecto satisface los siguientes criterios técnicos:
- **Sin Controladores**: Toda la lógica de negocio (procesamiento de datos y validación) se encuentra directamente en el archivo `routes/web.php`.
- **Sin Base de Datos**: La información se transfiere entre páginas utilizando **Sesiones de PHP/Laravel**, evitando persistencia en disco o memoria externa.
- **Formulario de Contacto**: Captura los siguientes campos obligatorios:
  - Nombre
  - Teléfono
  - Dirección
  - Email
  - Estado Civil
- **Página de Resultados**: Muestra de manera organizada toda la información recopilada en el formulario.

## Tecnologías Utilizadas
- **Framework**: [Laravel 11](https://laravel.com/)
- **Motor de Plantillas**: Blade
- **Estilos**: Tailwind CSS (v4)
- **Bundler**: Vite
- **Tipografía**: DM Sans & Playfair Display (Google Fonts)

## Guía de Instalación
Siga estos pasos para ejecutar el proyecto localmente:

1. **Clonar el repositorio** (si aplica):
   ```bash
   git clone <url-del-repositorio>
   cd Programacion-web-tarea-2
   ```

2. **Instalar dependencias de PHP**:
   ```bash
   composer install
   ```

3. **Instalar dependencias de Node.js**:
   ```bash
   npm install
   ```

4. **Configurar el entorno**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Compilar assets**:
   ```bash
   npm run build
   ```
   *O para desarrollo interactivo:* `npm run dev`

6. **Iniciar el servidor**:
   ```bash
   php artisan serve
   ```
   Acceda a la aplicación en `http://localhost:8000`.

---
*Desarrollado para el curso de Programación Web.*
