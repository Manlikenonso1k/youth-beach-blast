# Graphify Setup (Graphviz) for this Project

Graphviz is installed on this PC and mapped to this project through a route-graph generator script.

## Installed tool

- Graphviz version: `15.1.0`
- Binary path: `C:\Program Files\Graphviz\bin\dot.exe`

If `dot` is not recognized in a new terminal yet, restart your terminal session.

## Project mapping

This repository now includes:

- `scripts\graphify-routes.ps1` to generate route graphs from `php artisan route:list --json`
- npm scripts in `package.json`:
  - `npm run graphify` (public-facing routes)
  - `npm run graphify:all` (all routes)

## Generate graphs

From the project root:

```powershell
npm run graphify
```

or

```powershell
npm run graphify:all
```

Output files are created in `docs\graphs`:

- `routes-public.dot` and `routes-public.svg`
- `routes-all.dot` and `routes-all.svg`

## Optional: force Graphviz path for this terminal

If needed, set:

```powershell
$env:GRAPHVIZ_DOT_PATH = 'C:\Program Files\Graphviz\bin\dot.exe'
```
