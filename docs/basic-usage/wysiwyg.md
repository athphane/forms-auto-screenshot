---
title: WYSIWYG
sidebar_position: 8
---

## Setup

WYSIWYG (What You See Is What You Get) inputs can be used for displaying a rich text editor. WYSIWYG inputs uses [`tinymce`](https://www.tiny.cloud) v7. Before using them, make sure tinymce v7 is installed.

You can install tinymce like so and make sure it's published to your public folder:

```bash
npm install tinymce@^7
```

The component will automatically add the tinymce script and config to your `scripts` stack during render.

## Usage

WYWSIWYG can be used with `textarea` components using the `wysiwyg` attribute.

```html
<x-forms::textarea name="message" wysiwyg />
```

or directy using the `wysiwyg` component.


```html
<x-forms::wysiwyg name="message" />
```
