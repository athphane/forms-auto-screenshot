---
title: File Inputs and Image Inputs
sidebar_position: 7
---

Before using these components, make sure [`@javaabu/js-utilities`](https://github.com/Javaabu/js-utilities) is installed and updated to the latest version. Also remember to add the necessary sass.

```scss
// for Bootstrap 5 (add a partial named web/_fileinput.scss)
@import '@javaabu/js-utilities/src/scss/bootstrap-5/fileinput';

// for Material Admin 2.6 (replace the contents of your admin/_fileinput.scss)
@import '@javaabu/js-utilities/src/scss/material-admin-26/fileinput';
```

## File Inputs

This component renders a [`jasny-bootstrap`](https://www.jasny.net/bootstrap) [`fileinput.js`](https://www.jasny.net/bootstrap/components/#fileinput) powered file input that supports [`spatie/laravel-medialibrary`](https://spatie.be/docs/laravel-medialibrary). This component requires `spatie/laravel-medialibrary`.

```html
<x-forms::form :model="$article">
    <x-forms::file name="attachment" type="document" />
</x-forms::form>
```

File inputs supports the following attributes:
- `'name'` - (Required) The name of the file input.
- `'label'` - The input label. If not provided, will be auto generated using the name.
- `'type'` - The file type or an array of types from `AllowedMimetypes` from [`javaabu/helpers`](https://github.com/Javaabu/helpers). Defaults to `'document'`.
- `'mimetypes'` - An array or single allowed mimetype. If not provided, the given `type` will be used to determine the allowed mimetypes. Used in the `accept` attribute of the file input.
- `'extensions'` - An array or single allowed extension. If not provided, the given `type` will be used to determine the allowed extensions. Used in the file hint.
- `'max-size'` - The maximum allowed file size in KB. If not provided, the given `type` will be used to determine the allowed size. Used in the file hint.
- `'collection'` - The media collection name when using `laravel-medialibrary`. By default, the `name` is used as the collection name.
- `'conversion'` - `laravel-medialibrary` media conversion to use for the displayed file url. By default, no conversion is used.
- `'file-input-class'` - Additional CSS class to use on the fileinput div.
- `'clear-icon'` - Icon to use on the clear file button. By default, uses the framework specific icon from config.
- `'download-icon'` - Icon to use on the download file button. By default, uses the framework specific icon from config.
- `'model'` - The model to bind to. By default, uses the currently bound model.
- `'default'` - The default file url or Media object. Can be used to manually set a value to the file input.
- `'show-hint'` - Whether to show a help text that shows the allowed file extensions and the max file size. `true` by default. To display a custom message, can use the `help` slot.
- `'show-errors'` - Whether to show any associated validation errors. `true` by default.
- `'show-label'` - Whether to show the input label. `true` by default. If `false` the component will be rendered without a `form-group`.
- `'required'` - Whether the input is required. `false` by default.
- `'disabled'` - Whether the input is disabled. `false` by default.
- `'ignore-accessor'` - Whether to ignore model accessors when finding the bound media. If true, will only use the `getMedia` method to find the media. This can be useful if the model has an accessor as the same name as the collection which returns a default url when the file is not present. `false` by default.
- `'inline'` - Whether to dispaly the label inline. `false` by default.
- `'framework'` - Which CSS framework to use. Defaults to the framework set in config.
- `'upload'` - Whether to use `fileUploadInput` module from [`@javaabu/js-utilities`](https://github.com/Javaabu/js-utilities). Defaults to `false`.
- `'upload-icon'` - Icon to display in the upload button. Defaults to the framework specific icon from config.

## File Upload Inputs

This component uses `fileUploadInput` module from [`@javaabu/js-utilities`](https://github.com/Javaabu/js-utilities) to upload the selected file through ajax. The file will get uploaded to the parent form's action url, using the parent form's submit method. This component will only work within a form element. This is just a wrapper for the `file` component with the `upload` attribute set to true.

```html
<x-forms::form :model="$article">
    <x-forms::file-upload name="attachment" type="document" />
</x-forms::form>
```

## Image Inputs

Image inputs work similar to file inputs, with a few extra attributes that allow customizing the preview of the selected image.

```html
<x-forms::form :model="$article">
    <x-forms::image name="featured_image" conversion="preview" width="500" height="500" />
</x-forms::form>
```

Here are the additional attributes supported by image inputs:
- `'icon'` - Icon to display in the image preview when no image is selected. Defaults to the framework specific icon from config.
- `'width'` - The recommended width for the image in pixels. Defaults to `400`.
- `'height'` - The recommended height for the image in pixels. Defaults to `400`.
- `'cover'` - Whether the preview image should cover the full preview window. Defaults to `false`.
- `'fullwidth'` - Whether the preview window should take the full available width. Defaults to `false`.
- `'circle'` - Whether the preview window should be displayed as a circle. Defaults to `false`.
- `'aspect-ratio'` - Which aspect ratio to use as number between `0.0` and `1.0`. If using the `circle` option, will be forced to `1.0`. Defaults to the aspect ratio of given `height` and `width`.
- `'maintain-aspect-ratio'` - Whether the preview window should maintain the given aspect ratio. Defaults to `true`.

## Image Upload Inputs

This is just a wrapper for the `image` component with the `upload` attribute set to true and works similar to the `file-upload` component.

```html
<x-forms::form :model="$article">
    <x-forms::image-upload name="featured_image" conversion="preview" width="500" height="500" />
</x-forms::form>
```
