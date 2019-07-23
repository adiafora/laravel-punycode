Laravel Punycode
=====================

This package converts a Unicode encoded domain name to a IDNA ASCII form and vice-versa.

This package is based on another package - fomvasss/laravel-punycode. But the idna_convert class is taken as the main class. And it allows you to use a domain in any writing: only domain, domain with www, Protocol, script, parameters, and so on. 

If You accidentally encoded an English domain in punycode, then nothing will happen to it, no errors and unexpected results. You can safely use this package on all domains, it will do everything for You.

Install
-----------------------------------

Run:
```php
    composer require "adiafora/laravel-punycode"
```
For Laravel < 5.5 Add in ServiceProvider to the providers array in config/app.php
```php
    Adiafora\Punycode\PunycodeServiceProvider::class,
```

Usage
-----------------------------------

### Usage facade
You can now using the Facade by default.

For Laravel < 5.5 Add in Facade to the aliases array in config/app.php
```php
    'Punycode' => Adiafora\Punycode\Facades\Punycode::class,
```

Example usage:

```php
    var_dump(Punycode::encode('мой-веб-сайт.сайт'));
    // outputs: xn-----8kcceszgtu3bo.xn--80aswg

    var_dump(Punycode::decode('xn-----8kcceszgtu3bo.xn--80aswg'));
    // outputs: мой-веб-сайт.сайт
```
### Usage helper functions

```php
    punycode_encode('мой-веб-сайт.сайт');
    punycode_decode('xn-----8kcceszgtu3bo.xn--80aswg');
```

License
-----------------------------------

Faker is released under the MIT Licence. See the bundled LICENSE file for details.
