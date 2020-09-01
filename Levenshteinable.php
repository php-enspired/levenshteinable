<?php
/**
 * @package    at.levenshteinable
 * @author     Adrian <adrian@enspi.red>
 * @copyright  2017
 * @license    no license, no warranty
 */
declare(strict_types = 1);

namespace at\levenshteinable;

/**
 * Forgot how to spell that one method name?
 * Just type in something close, you're golden!
 */
trait Levenshteinable {

  public function __call($name, $arguments) {
    $levenshteins = [];
    foreach (get_class_methods(static::class) as $method) {
      $levenshteins[$method] = levenshtein($method, $name);
    }
    return [$this, array_search(min($levenshteins), $levenshteins)](...$arguments);
  }
}
