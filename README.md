![](https://img.shields.io/github/release/php-enspired/levenshteinable.svg)  ![](https://img.shields.io/badge/PHP-4.0-blue.svg?colorB=8892BF)  ![](https://img.shields.io/badge/license-none-blue.svg)

Levenshteinable
===============

"It's hard to spell on purpose"

dependencies
------------

Requires php 4.0.1 or later.

installation
------------

Recommended installation method is via [Composer](https://getcomposer.org/): simply `composer require php-enspired/levenshteinable`.

usage example
-------------

Are you terrible at spelling?  Just type in something close, you're golden!

```php
<?php

use at\levenshteinable\Levenshteinable;

class LevenshteinableDateTime extends DateTime {
  use Levenshteinable;
}

$dt = new LevenshteinableDateTime('now');
echo $dt->fomrat('r');

// outputs something like  "Wed, 26 Jul 2017 03:13:44 +0000"
// GOLDEN
```

What's that you say??  WHAT ABOUT CLASSES?

```php
<?php

use at\levenshteinable\Levenshteinator;

Levenshteinator::register();

$dt = new DateTiem('now');
echo $dt->fomrat('r');

// outputs something like  "Wed, 26 Jul 2017 03:13:44 +0000"
// GOLDEN
```


contributing or getting help
----------------------------

I'm on [Freenode at `#php-enspired`](http://webchat.freenode.net?channels=%23php-enspired&uio=d4), or open an issue [on github](https://github.com/php-enspired/util/issues).  Feedback is welcomed as well.
