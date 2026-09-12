<?php

use Illuminate\Support\HtmlString;

if (! function_exists('sitio')) {
    /** Acceso corto a config/sitio.php: sitio('site.telefono') */
    function sitio(string $key, mixed $default = null): mixed
    {
        return config("sitio.$key", $default);
    }
}

if (! function_exists('todo')) {
    /** Devuelve el valor escapado o un marcador amarillo visible si está pendiente. */
    function todo(?string $valor, string $etiqueta): HtmlString
    {
        if ($valor) {
            return new HtmlString(e($valor));
        }

        return new HtmlString('<span class="todo">['.e($etiqueta).' pendiente]</span>');
    }
}

if (! function_exists('tel_link')) {
    /** "+34 711 541 524" → "+34711541524" */
    function tel_link(string $tel): string
    {
        return '+'.preg_replace('/\D+/', '', $tel);
    }
}

if (! function_exists('json_ld')) {
    /** Bloque <script type="application/ld+json"> para datos estructurados. */
    function json_ld(array $data): HtmlString
    {
        return new HtmlString('<script type="application/ld+json">'.json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES).'</script>');
    }
}

if (! function_exists('ciudad')) {
    /** Busca una ciudad por slug. */
    function ciudad(string $slug): ?array
    {
        return collect(sitio('ciudades'))->firstWhere('slug', $slug);
    }
}

if (! function_exists('servicio')) {
    /** Busca un servicio por slug. */
    function servicio(string $slug): ?array
    {
        return collect(sitio('servicios'))->firstWhere('slug', $slug);
    }
}
