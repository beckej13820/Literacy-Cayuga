=== Literacy Volunteers ===
Requires at least: 6.7
Tested up to: 7.2
Requires PHP: 7.4
Stable tag: 0.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A child theme of Twenty Twenty-Five for Literacy Volunteers, with a green and yellow palette and patterns for an adult literacy nonprofit.

== Description ==

Literacy Volunteers is a block theme built on Twenty Twenty-Five for adult literacy organizations. It is based on a Figma mockup from the SUNY Oneonta Inclusive Design Lab and keeps most of its look in theme.json, so colors, type and spacing can be changed in Editor > Styles.

Features:

* A palette of dark green, yellow, ink, grays and white, using Twenty Twenty-Five's color slugs so the parent's templates and patterns pick it up. A lighter brand green is used only for large headings on Style 4.
* Five section styles (Style 1 to Style 5) for Group, Columns, Column and Cover blocks. Each sets text, link, button and form field colors that meet WCAG 2.2 AA contrast.
* When a section style is applied to a Cover block in the editor, the overlay switches to that style's background at 80% or more opacity, so text stays readable over any photo.
* Outline buttons take the color of the filled button in the same section.
* Form fields (search, text, email and others) have a translucent fill that adapts to the section they sit in. The Search block keeps a rounded input.
* Block styles: "Eyebrow" (paragraph and heading) and "Arrow link" (paragraph).
* Visible keyboard focus outlines on links and buttons.

Patterns:

* Hero: a full-width photo with a centered translucent green panel, heading, text and two buttons.
* Intro and 3 cards: an eyebrow, a heading and three cards.
* About Us: a yellow section with an image, text, social links and two buttons.
* Get Involved Cards: an intro and three equal-height cards for learners, tutors and volunteers, each ending in an arrow link.

The companion plugin "TEC Upcoming Events Pattern" adds two upcoming-events patterns for The Events Calendar. It is optional; the theme works without it.

== Installation ==

1. Install and keep Twenty Twenty-Five (the parent theme) on the site. It does not need to be active.
2. Upload the literacy-volunteers folder to wp-content/themes/, or upload the zip in Appearance > Themes > Add New Theme > Upload Theme.
3. Activate Literacy Volunteers in Appearance > Themes. On multisite, network-enable it first in Network Admin > Themes.
4. Optional: install The Events Calendar and the TEC Upcoming Events Pattern plugin for the events patterns.

== Frequently Asked Questions ==

= Where did most of the Twenty Twenty-Five patterns go? =

The theme hides most of the parent's patterns from the inserter, so editors see a short, on-brand list. Four stay available: FAQs, Centered heading, Short heading and paragraph and image, and Services 3 columns. The others stay registered because the parent's templates use some of them. Core's bundled patterns and the remote Pattern Directory patterns are also turned off.

= Why are the Style 4 headings two different greens? =

The brand green (#2F8D3C) on light gray reaches 3.55:1 contrast, which passes WCAG AA for large text only. So h1 to h3 use the brand green, and smaller headings use the dark green.

= Why did the overlay change when I applied a style to a Cover block? =

That's on purpose: it keeps text readable over the photo. You can still change the overlay color and opacity afterwards. It only happens when a style is applied, never on blocks you already have.

= The links in the patterns go to pages that don't exist. =

Pattern buttons and links point to /about/, /donate/, /volunteer/, /learn/ and /tutor/. Create those pages, or change the links after inserting a pattern.

== Known limitations ==

* The theme needs Twenty Twenty-Five. If the parent is missing, WordPress will not activate it.
* The hero and About Us images are placeholders. Replace them after inserting the patterns.
* Translucent form fields and the arrow link use color-mix() and newer CSS. Very old browsers show solid fields and no arrow.
* The theme only bundles English text. Its strings are not yet set up for translation.

== Changelog ==

= 0.1.0 =
* Initial development release.

== Credits ==

Built by the SUNY Oneonta Inclusive Design Lab: Ed Beck, Ella McLaughlin, Philip Ojebor and Maya Pauley.

== Copyright ==

Literacy Volunteers WordPress Theme, (C) 2026 SUNY Oneonta Inclusive Design Lab.
Literacy Volunteers is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

This theme incorporates code from:

Twenty Twenty-Five WordPress Theme, (C) 2024-2026 WordPress.org and contributors.
License: GPLv2 or later. License URI: http://www.gnu.org/licenses/gpl-2.0.html
Section styles 1, 3, 4 and 5 (styles/sections/) start from the parent theme's files.

This theme bundles the following third-party resources:

=== Images ===

Person typing on a typewriter.
Free public domain CC0 image, bundled with Twenty Twenty-Five as typewriter.webp.
hero-placeholder.webp
https://www.rawpixel.com/image/12240004/photo-image-face-person-technology
License: CC0 https://creativecommons.org/publicdomain/zero/1.0/

about-placeholder.png
A plain gray placeholder made for this theme.
License: GPLv2 or later, same as the theme.

=== Fonts ===

The theme bundles no fonts. It uses the fonts from Twenty Twenty-Five; see that theme's readme.txt for their licenses.
