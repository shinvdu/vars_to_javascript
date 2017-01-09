# Transform PHP Vars to JavaScript

Often, you'll find yourself in situations, where you want to pass some server-side string/array/collection/whatever
to your JavaScript. Traditionally, this can be a bit of a pain - especially as your app grows.

This package simplifies the process drastically.

## Installation

Download vars_to_javascript to module direcotry, then run composer install

> If you use Laravel 4: instead install `~1.0` of this package (and use the documentation for that release). For Laravel 5 (or non-Laravel), `~2.0` will do the trick!

### Drupal Users

1. enable the moudle

2. pass php vars

```
     $javascript= \Drupal::service('javascript');
     $variabes = ['aa' => 32, 'bb' => 'cc', 'dd' => [23421,3423]];
     $javascript->put($variabes);
```     
3. use it in frontend
Using the code above, you'll now be able to access `aa`, `bb`, and `dd` from your JavaScript.

```js
console.log(php.aa); // 32
console.log(php.bb); // cc
```
#### js_namespace
You can your own namespace in settings.php
like
```
$settings['js_namespace'] = 'phpjs';
```

## License
GPL
