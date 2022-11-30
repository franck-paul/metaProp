# metaProp

Dotclear 2 plugin

## Purpose

Add properties to metadata.

## Table structure

* meta_id: metadata id (aka value, as 'dotclear' for a tag)
* meta_type: metadata type (as 'tag')
* meta_prop: property name
* meta_value: property value
* meta_options: array of options

Options:

* localized: boolean (default: false) [^1]

## Table indexes

* primary index: meta_id, meta_type, meta_prop

## Foreign keys

* meta_id, meta_type: one to many in dc_meta->meta_id, dc_meta->meta_type (Cascade)

## Notes

[^1]: if true then the meta_value is translated (will use `__()` to render property value)
