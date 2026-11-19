# WordPress Studio Instructions

How I like WordPress work done in this environment. Follow these by default; if a task needs to break one, say why first.

## Core principle

Keep it small, contained and core-first. The less custom code a site carries, the less I have to maintain across a multisite network. Prefer extending what WordPress already does over building something new.

## Where things belong

| Concern | Lives in | Not in |
|---|---|---|
| Look and feel (colors, type, spacing, layout) | The theme: `theme.json`, Global Styles, block styles, patterns, templates | Plugins |
| Extra functionality (data, queries, integrations, new behavior) | A small, single-purpose plugin | The theme |
| One-off tweaks | The Site Editor or block settings | Code |

- Plugins add capability. They do not decide what things look like. If a plugin needs a visual default, keep it minimal and make it overridable by the theme.
- A theme should still work if the plugin is deactivated (it just loses the extra feature).
- Don't put functionality in a theme, and don't put styling in a plugin, to save a file.

## Never modify code we don't own

- Never edit WordPress core (`wp-admin/`, `wp-includes/`, root files such as `wp-config.php` beyond settings I ask for).
- Never edit third-party plugins or themes in place. Updates overwrite those edits, and they're hard to track.
- If behavior needs to change, use hooks, filters, block filters, a child theme, `theme.json`, or a small plugin of our own.
- If it can't be done without touching code we don't own, stop and tell me what the options are.

## Build with core blocks

- Start with core blocks and their built-in controls. Reach for custom CSS or a custom block only when core genuinely can't do it.
- When core is close but not enough, **extend** a core block with a variation, a filter or a Block Bindings source, in the way Advanced Query Loop extends the Query Loop. Do not build a replacement block from scratch.
- Preferred tools, roughly in order: block patterns, block variations, Block Bindings sources, query and render filters, then (rarely) a custom dynamic block.
- Use the block's own controls (spacing, color, typography, layout) in patterns and templates. Don't hardcode styling into markup or plugin CSS when a default control or `theme.json` setting can do it.
- **`theme.json` comes first.** Prefer `theme.json` and Global Styles over custom CSS. Don't write PHP or JavaScript workarounds for something the block editor might reasonably provide soon.
- If the same property keeps being set on the same block (a border radius on every image, say), move it into `theme.json`.

## Design tokens, not literals

- Colors, spacing and font sizes come from the theme's presets: `var(--wp--preset--color--contrast)` in CSS, `var:preset|spacing|40` in block attributes, or the `textColor` and `backgroundColor` attributes. Never a literal hex or pixel value.
- A literal freezes one style variation's look into all the others, and Global Styles can no longer change it in one place.
- Read the theme's `theme.json` for the available slugs before using any. A block that asks for a slug the theme doesn't define gets no color.
- Check `settings.custom.controlScheme` or the theme's own documentation to learn whether a palette is light or dark. Don't infer it from a variation's name.

## Patterns and block markup

- Patterns live as plain block markup files, not long PHP strings, so I can paste in markup copied from the editor's Code editor.
- **Don't reformat block markup.** Block delimiters are Gutenberg's own serialization: flush left, one delimiter per line, a blank line between sibling blocks. Reindenting or rewrapping it makes a large diff that the next editor save undoes.
- **Clean copied markup.** Markup built in the editor carries attributes that don't belong in a pattern. Remove `id` and the `wp-image-<id>` class from images, `queryId` from Query blocks, `theme` and `area` from template part blocks, and `patternName` and `categories` from block metadata. Keep the rest of the metadata, such as `name` and `bindings`. The editor adds back what it needs on insert.
- Name blocks (`metadata.name`) by what they do, not what they print: `Meta Separator`, not `·`. List View names are what editors and agents use to tell blocks apart.
- Plan for empty states. If a block can render nothing (no venue, comments closed), hide the text around it, and say in a comment which class does it and that it must stay on the group when the markup is copied.

## Accessibility defaults

- Respect `prefers-reduced-motion`: skip animation and transitions for visitors who ask.
- Hide purely decorative characters (separators, ornaments) from screen readers.
- Keep enough contrast. Don't put translucent text on a ground it wasn't designed for.

## Keep the code light

- Smallest change that solves the problem. No frameworks, abstractions or settings screens I didn't ask for.
- No build step (npm, bundlers) unless there is no reasonable alternative. Plain PHP, and plain JS using the `wp.*` globals, is fine.
- One plugin, one job. A handful of small files beats one large one.
- Don't add options, hooks or extensibility "just in case."
- Prefer WordPress APIs and functions over custom implementations.
- Don't add or recommend a plugin for something a few lines of code or a core feature handles.
- **Every CSS rule gets a comment saying why it exists**, with the Gutenberg or Trac issue link if there is one. That's how the next person knows whether it can be removed.
- **Never edit generated files** (minified CSS, build output). Change the source and rebuild.

## Plugin conventions

- Declare dependencies with the `Requires Plugins` header, **and** check at runtime so the plugin does nothing (and shows an admin notice) if the dependency is missing on that site.
- Must be multisite-safe. Assume network activation is possible, and make behavior correct per site (site-specific URLs, dependencies active on some sites only).
- Unique function prefix and text domain; guard files with `defined( 'ABSPATH' ) || exit;`.
- Escape output, sanitize input, check capabilities.
- Include a short `readme.txt` saying what it does, what it needs and any known limits.
- Use the free versions of third-party plugins unless I say otherwise. Don't depend on Pro features.

## Environment assumptions

- Local development in WordPress Studio. Production is WordPress Multisite.
- WordPress 7.x; block themes and the Site Editor. Don't write for the classic editor or classic themes unless told.
- Check current WordPress and plugin documentation when behavior may have changed. Don't rely on memory for recent APIs.

## How these instructions are organized

- Keep this file short. Detailed guidance for a topic goes in its own linked file, and you read it only when the task needs it (for example, read the design guide before styling or building patterns).
- Each project keeps a short **Key directories** list in its own instructions: where templates, patterns, plugins and generated files live. Read it before searching the tree, and don't guess.
- Markdown files are soft-wrapped: a paragraph, list item or table row is one line, however long. Don't hard-wrap prose, and don't re-flow lines a change doesn't otherwise touch.

## How to work with me

- **Brainstorm before building.** When I ask for ideas or options, give options and trade-offs. Don't build until I say to.
- Ask before a significant choice that changes scope or architecture. For small decisions, pick the sensible default and tell me.
- **Be honest about verification.** Test in Studio where you can (activate the plugin, load the page, check the editor). Say what you actually tested and what you didn't. Never say something is validated or working if it wasn't run.
- When you change something, tell me where it lives and how to undo it.
- Keep explanations short and plain. I'm technical but don't want a lecture.

## Before calling it done

1. Does it use core blocks and controls wherever possible?
2. Is styling in the theme and functionality in the plugin?
3. Do colors, spacing and font sizes use presets, not literals?
4. Is any block markup reformatted, or does it carry editor leftovers (`id`, `queryId`, `patternName`)?
5. Does every CSS rule explain why it exists, and could any be replaced by `theme.json`?
6. Could any file, option or dependency be removed?
7. Does it behave correctly on multisite and when its dependency is missing?
8. Did you test it, and did you say what was and wasn't tested?
