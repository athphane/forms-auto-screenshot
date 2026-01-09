---
title: Select elements
sidebar_position: 4
---

Besides the `name` attribute, the select element has a required `options` attribute, which should be a simple key-value array.

```php
$countries = [
    'be' => 'Belgium',
    'nl' => 'The Netherlands',
];
```

```html
<x-forms::select name="country_code" :options="$countries" />
```

The `options` attribute also support query builders. If a query builder is supplied, then the name and id attributes will be plucked from the `Model`.

```html
<x-forms::select name="country_code" :options="\App\Models\Country::query()" />
```

By default, the `Model` key would be used as the `id` field and `name` would be used as the name field.
You can customize these fields using the `name-field` and `id-field` attributes.

```html
<x-forms::select name="country_code" :options="\App\Models\Country::query()" name-field="formatted_name" id-field="code" />
```

You can provide a slot to the select element as well:

```html
<x-forms::select name="country_code">
   <option value="be">Belgium</option>
   <option value="nl">The Netherlands</option>
</x-forms::select>
```

If you want a select element where multiple options can be selected, add the multiple attribute to the element. If you specify a default, make sure it is an array. This applies to bound targets as well.

```html
<x-forms::select name="country_code[]" :options="$countries" multiple :default="['be', 'nl']" />
```

For multi-selects, if the bound value is a collection, use the `id-field` to specify which attribute to pluck for the selected values.

```html
<x-forms::select name="categories[]" :options="\App\Models\Category::withDepth()->inDefaultOrder()" name-field="depth_name" id-field="id" />
```

A `sync_<field_name>` hidden input will be added for multi-selects unless the select is disabled. To disable this feature, you can use the `exclude-sync-field` attribute. To customize the sync input name, you can use the `sync-field-name` attribute.

```html
<x-forms::select name="categories[]" :options="\App\Models\Category::query()" sync-field-name="sync_categories" :exclude-sync-field="false" />
```

You may add a `placeholder` attribute to the select element. This will prepend a blank option.

```html
<x-forms::select name="country_code" placeholder="Choose..." />
```

Rendered HTML:

```html
<select>
    <option value="">Choose...</option>
    <!-- other options... -->
</select>
```

# Using Eloquent relationships

This package has built-in support for `BelongsTo`, `BelongsToMany`, `MorphMany`, and `MorphToMany` relationships. To utilize this feature, you must add the `relation` attribute to the select element.

In the example below, you can attach one or more tags to the bound video. By using the `relation` attribute, it will correctly retrieve the selected options (attached tags) from the database.

```html
<x-forms::form :model="$video">
    <x-forms::select name="tags[]" :options="$tags" multiple relation />
</x-forms::form>
```

Without using `relation` attribute, if the bound value is a `Model`, the select will automatically use the `Model` key to choose the selected option.
In the example below the `$address->country->id` would be used to choose the selected option from the country select.

Note that, if the `relation` attribute was used here, it would use the `$address->country_id` instead, which is more efficient than loading `$address->country`.
So, as a best practice use the `relation` attribute when using selects for relations.

```php
class Address extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
```

```html
<x-forms::form :model="$address">
    <x-forms::select name="country" :options="$countries" />
</x-forms::form>
```
