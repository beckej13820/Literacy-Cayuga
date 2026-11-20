# Literacy Volunteers

A WordPress block theme for Literacy Volunteers, built as a child theme of [Twenty Twenty-Five](https://wordpress.org/themes/twentytwentyfive/). It has a green and yellow palette and patterns for an adult literacy nonprofit. It was created in the Fall of 2026 by the SUNY Oneonta Inclusive Design Lab.

Most of the look lives in `theme.json`, so colors, type and spacing can be changed in **Editor > Styles** without touching code. There is no build step.

## Requirements

- WordPress 6.7 or later (tested up to 7.2)
- PHP 7.4 or later
- The [Twenty Twenty-Five](https://wordpress.org/themes/twentytwentyfive/) parent theme, installed (it doesn't need to be active)

## Installation

1. Make sure Twenty Twenty-Five is installed.
2. Put this folder in `wp-content/themes/literacy-volunteers`. You can clone the repository there, or download the zip and upload it in **Appearance > Themes > Add New Theme > Upload Theme**.

## Features

- **Palette:** dark green, yellow, ink, grays and white. It uses Twenty Twenty-Five's color slugs (`base`, `contrast`, `accent-1` to `accent-6`), so the parent's templates and patterns pick it up. A lighter brand green is used only for large headings on Style 4.
- **Section styles:** Style 1 to Style 5 work on Group, Columns, Column and Cover blocks. Each sets text, link, button and form field colors that meet WCAG 2.2 AA contrast.
- **Cover overlays:** applying a section style to a Cover block in the editor switches its overlay to that style's background at 80% or more opacity, so text stays readable over any photo.
- **Buttons and fields:** outline buttons take the color of the filled button in the same section. Form fields have a translucent fill that adapts to their section, and the Search block keeps a rounded input.
- **Block styles:** "Eyebrow" for paragraphs and headings, and "Arrow link" for paragraphs.
- **Accessibility:** visible keyboard focus outlines on links and buttons, a decorative arrow that screen readers skip, and no motion for visitors who ask for reduced motion.

## Patterns

| Pattern | What it is |
|---|---|
| Hero | A full-width photo with a centered translucent green panel, heading, text and two buttons |
| Intro and 3 cards | An eyebrow, a heading and three cards |
| About Us | A yellow section with an image, text, social links and two buttons |
| Get Involved Cards | An intro and three equal-height cards for learners, tutors and volunteers, each ending in an arrow link |

The theme hides most of Twenty Twenty-Five's patterns from the inserter. It keeps four: FAQs, Centered heading, Short heading and paragraph and image, and Services 3 columns. Core's bundled patterns and the remote Pattern Directory patterns are turned off.

## Known limitations

- Pattern links point to `/about/`, `/donate/`, `/volunteer/`, `/learn/` and `/tutor/`. Create those pages, or change the links after inserting a pattern.
- The hero and About Us images are placeholders.
- Translucent form fields and the arrow link use `color-mix()` and newer CSS. Very old browsers show solid fields and no arrow.
- The theme only bundles English text. Its strings are not yet set up for translation.

## Project structure

| Path | Contents |
|---|---|
| `theme.json` | Palette, global styles, button and form field styles |
| `styles/sections/` | Section styles 1 to 5 |
| `styles/blocks/` | Block style variations (Eyebrow, Arrow link) |
| `patterns/` | Theme patterns, as plain block markup with a PHP header |
| `parts/` | Template parts (header) |
| `assets/css/` | Small stylesheets for what `theme.json` can't express |
| `assets/js/` | Editor script for the Cover overlay default (plain JS, no build) |
| `assets/images/` | Placeholder images used by patterns |
| `functions.php` | Pattern curation and asset loading |

## Contributing

- Prefer `theme.json` and core block controls over custom CSS, and use preset tokens (`var:preset|color|…`) instead of literal colors or sizes.
- Every CSS rule gets a comment saying why it exists.
- Patterns are plain block markup. Paste from the editor's Code editor, and remove editor leftovers such as `id`, `wp-image-*` classes and `queryId`.
- Check WCAG 2.2 AA contrast for any new color pairing.

## Credits

Built by the SUNY Oneonta Inclusive Design Lab: Ed Beck, Ella McLaughlin, Philip Ojebor and Maya Pauley.

## License

Copyright (C) 2026 SUNY Oneonta Inclusive Design Lab. Licensed under the [GNU General Public License v2 or later](http://www.gnu.org/licenses/gpl-2.0.html).

The theme includes code from Twenty Twenty-Five, (C) 2024-2026 WordPress.org and contributors, GPLv2 or later. The hero placeholder is a [CC0 public domain photo](https://www.rawpixel.com/image/12240004/photo-image-face-person-technology) bundled with Twenty Twenty-Five. Full attribution is in [readme.txt](readme.txt).
