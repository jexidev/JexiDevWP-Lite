# JexiDevWP Lite

JexiDevWP Lite is a lightweight, modular WordPress theme built as a clean foundation for bespoke web development projects.

It is designed to prioritise:

- Simplicity
- Maintainability
- Scalable structure
- Modern SCSS architecture
- Minimal opinionated design

This theme serves as the base layer for future JexiDev projects and experimental builds.

## Philosophy

JexiDevWP Lite is not a design-heavy theme.

It provides:

- Core layout structure
- Header behaviour (including mobile toggle)
- Clean loop templates
- Modular SCSS architecture
- Organised PHP structure via `/inc`

The goal is to create a stable, predictable foundation that can be extended via child themes or iterative development.

## Features (v1)

- Standard WordPress template hierarchy
- Modular template parts for loops
- Responsive header with mobile toggle
- SCSS folder architecture (abstracts, base, components, layout, etc.)
- Gulp-based SCSS compilation
- Clean separation of concerns in `/inc/functions`

## File Structure Overview

- `/assets/scss` — SCSS architecture organised by responsibility
- `/assets/css/main.css` — Compiled output (not committed)
- `/assets/js/custom-scripts.js` — Theme JS
- `/inc/functions` — Modularised theme setup and utility logic
- `/template-parts/loops` — Loop templates for posts and pages

The theme follows the 7-1 SCSS structure:

- **abstracts** → variables, mixins, functions
- **base** → resets and base styles
- **components** → reusable UI parts
- **layout** → header and footer structure
- **Pages** → specific page styles
- **themes** → theme overrides
- **vendors** → external libraries/third-party CSS

## SCSS Workflow

SCSS is compiled via Gulp.

`main.scss` serves as the entry point.

Compiled output targets:

assets/css/main.css

This file is not included in version control and is intended to be generated locally.

## SCSS Compilation

This project uses Node.js tooling for SCSS compilation.

### Install Dependencies

Run:

```
npm install
```

This installs all required development dependencies defined in `package.json`.

---

### Development Build (Watch Mode)

To compile SCSS in development mode:

```
npm run dev
```

This runs the development build task and watches for changes.

---

### Production Build (Minimised CSS)

To generate an optimised production build:

```
npm run build
```

This outputs compiled and optimised CSS to:

```
assets/css/main.css
```

---

## Design Constraints

Only minimal structural styling is baked into the base theme:

- Base resets
- Header layout behaviour
- Navigation structure

All visual theming is intended to be handled through extension or iteration.

## Roadmap

Future versions may include:

- Variable standardisation
- Expanded component library
- Additional template parts
- Further optimisation of PHP structure

## Status

**v1.0.0 - Stable foundation release.**

This version establishes structural integrity and core behaviour for future expansion.
