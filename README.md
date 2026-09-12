# Perito Económico · peritoeconomico.es

- `laravel/` — aplicación Laravel 12 + Blade (la web real). Ver `laravel/README.md`.
- `docs/` — exportación estática generada con `laravel/export-static.sh`, solo para la demo en GitHub Pages
  (https://scarrascodevolver.github.io/perito/). El formulario no envía en la demo.

Regenerar la demo tras cambios:

    cd laravel && ./export-static.sh ../docs /perito
