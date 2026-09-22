# Perito Económico · peritoeconomico.es

Web corporativa en **Laravel 12 + Blade**. Sin base de datos para el contenido: todos los textos y datos viven en `config/sitio.php`.

## Dónde está cada cosa

| Qué | Dónde |
|---|---|
| Textos, ciudades, servicios, equipo, teléfono, email | `config/sitio.php` (único archivo que se edita habitualmente) |
| Rutas | `routes/web.php` |
| Controladores | `app/Http/Controllers/SitioController.php`, `ContactoController.php` |
| Plantilla base (head, SEO, fuentes) | `resources/views/layouts/app.blade.php` |
| Cabecera, pie, formulario, bloques reutilizables | `resources/views/partials/` |
| Páginas | `resources/views/{home,ciudad,servicios,servicio,equipo,metodologia,contacto}.blade.php` |
| Legales | `resources/views/legal/` |
| Correo de consulta | `app/Mail/ConsultaRecibida.php` + `resources/views/emails/consulta.blade.php` |
| Helpers (`sitio()`, `todo()`, `tel_link()`, `json_ld()`) | `app/Support/helpers.php` |
| CSS, logo, fotos, logos de clientes | `public/assets/` |

## Arrancar en local

    composer install
    cp .env.example .env && php artisan key:generate
    php artisan serve --port=8080

Abrir http://localhost:8080. Con `MAIL_MAILER=log` los correos del formulario se escriben en `storage/logs/laravel.log`.

## Datos pendientes de Aurelio

Buscar `TODO` en `config/sitio.php`. Mientras estén a `null` se pintan resaltados en amarillo en la web.

- Por ciudad: `responsable`, `responsable_foto`, `direccion`, `cp`, `telefono` (si hay uno propio), `maps_embed`, `lat`, `lng`.
- `titular_nombre`, `titular_nif`, `titular_domicilio` para aviso legal y privacidad.
- Confirmar los juzgados listados en cada ciudad.

## Producción (IONOS Web Hosting Plus)

La web vive en `/home/www/perito/laravel` del hosting (clon de este repo) y el dominio apunta a
`/perito/laravel/public` desde "Dominios y SSL" del panel de IONOS. PHP 8.3, sin base de datos
(sesiones y caché en archivo). Composer está en `composer.phar` dentro de esa carpeta.

Actualizar tras hacer push a `main`:

    ssh su353553@access-5021484062.webspace-host.com
    cd /home/www/perito/laravel && ./deploy-ionos.sh

`.env` de producción (ya creado en el servidor, no está en el repo):

    APP_ENV=production
    APP_DEBUG=false
    APP_URL=https://peritoeconomico.es
    SESSION_DRIVER=file
    CACHE_STORE=file
    QUEUE_CONNECTION=sync
    MAIL_MAILER=smtp        # "log" hasta que exista el buzón
    MAIL_HOST=smtp.ionos.es
    MAIL_PORT=587
    MAIL_USERNAME=contacto@peritoeconomico.es
    MAIL_PASSWORD=...
    MAIL_FROM_ADDRESS=contacto@peritoeconomico.es
    GA_ID=                  # opcional, Google Analytics 4

Tras cambiar el `.env` hay que volver a ejecutar `php8.3 artisan config:cache`.

## SEO ya incluido

Título y descripción únicos por página, canonical, Open Graph, datos estructurados (ProfessionalService por sede, Service, FAQPage, BreadcrumbList), `sitemap.xml` dinámico y `robots.txt`. Tras publicar: verificar el dominio en Google Search Console y enviar el sitemap; crear un Perfil de Empresa de Google por ciudad enlazando a su página.
