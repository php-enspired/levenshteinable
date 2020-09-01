<?php
/**
 * @package    at.levenshteinable
 * @author     Adrian <adrian@enspi.red>
 * @copyright  2017
 * @license    no license, no warranty
 */
declare(strict_types = 1);

namespace at\levenshteinable;

use at\levenshteinable\Levenshteinable;

/**
 * Forgot how to spell the name of that class?
 * Just type in something close, you're golden!
 */
class Levenshteinator {

  public static function register() {
    spl_autoload_register([self::class, 'autolevenshteinator']);
  }

  public static function autolevenshteinator($name) {
    $levenshteins = [];
    foreach (get_declared_classes() as $class) {
      $levenshteins[$class] = levenshtein($class, $name);
    }

    $class = array_search(min($levenshteins), $levenshteins);
    eval("class {$name} extends {$class} { use Levenshteinable; }");
  }
}
