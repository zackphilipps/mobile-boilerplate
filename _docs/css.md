---
title: CSS
currentMenu: css
---

## Typography

Scratch makes use of the excellent [Gutenberg](http://matejlatin.github.io/Gutenberg/) framework for responsive typography with the proper vertical rhythm. The configuration for this framework can be controlled within `config/_variables.scss` and `config/_global.scss`:

```
scratch-theme/
├── _assets/
│   └── scss/
│   │   ├── config/
│   │   │   ├── _global.scss
│   │   │   └── _variables.scss
```

## HTML5 Boilerplate

Scratch is built on the [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate). Here are the CSS features that Scratch utilizes in full:

- HTML5 ready. Use the new elements with confidence.
- Designed with progressive enhancement in mind.
- [Normalize.css](https://necolas.github.com/normalize.css/) for CSS normalizations and common bug fixes
- A custom build of [Modernizr](https://modernizr.com/) for feature detection
- Useful CSS helper classes.
- Default print styles, performance optimized.

## Containers

Scratch includes a few full-width containers, found in `config/_global.scss`, with various max-widths. Here they are:

```
.wrap {
  max-width: 1024px;
}

.contain {
  max-width: 700px;
}

.constrain {
  max-width: 450px;
}
```

Use them in your project:

```
<div class="wrap clearfix">
  ...
</div>
```

## Grid System

Scratch includes the simple & lightweight responsive 12-column grid system from [Bones](http://themble.com/bones/). Here's how it works:

- Column classes are available `.onecol` through `.twelvecol`
- Scratch includes a bonus five-column layout accessible through the class `.twoptfourcol`
  - (think 12 divided by 5)
- Columns must add up to 12 and be wrapped in an element with class `.clearfix`
  - (this ensures all floats are cleared, and that the row as a whole has a proper height)
- The first column in a row must have class `.first`
- The last column in a row must have class `.last`
- Columns will stack on top of each other at 100% width below the `$max-width` defined in `config/_variables.scss`

3 columns example:

```
<div class="clearfix">
  <div class="fourcol first"></div>
  <div class="fourcol"></div>
  <div class="fourcol last"></div>
</div>
```

5 columns example:

```
<div class="clearfix">
  <div class="twoptfourcol first"></div>
  <div class="twoptfourcol"></div>
  <div class="twoptfourcol"></div>
  <div class="twoptfourcol"></div>
  <div class="twoptfourcol last"></div>
</div>
```

Example with a main content area taking up 2/3 of the container's width, with a 1/3 sidebar:

```
<div class="clearfix">
  <div class="eightcol first"></div>
  <div class="fourcol last"></div>
</div>
```
