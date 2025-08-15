Levenshteinable
===============

"It's hard to spell on purpose"

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

I'm on [Libera at `#php-enspired`](https://web.libera.chat/%23php-enspired), or open an issue [on github](https://github.com/php-enspired/util/issues).  Feedback is welcomed as well.
