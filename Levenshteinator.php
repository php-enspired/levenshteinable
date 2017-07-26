<?php
/**
 * @package    at.levenshteinable
 * @author     Adrian <adrian@enspi.red>
 * @copyright  2017
 * @license    no license, no warranty
 *
 *  This program is free software: you can redistribute it and/or modify it
 *  under the terms of the GNU General Public License, version 3.
 *  The right to apply the terms of later versions of the GPL is RESERVED.
 *
 *  This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 *  without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *  See the GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License along with this program.
 *  If not, see <http://www.gnu.org/licenses/gpl-3.0.txt>.
 */
declare(strict_types = 1);

namespace at\levenshteinable;

/**
 * forgot how to spell the name of that class?
 * just type in something close, you're golden!
 *
 * credit to profsimm for the idea.
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
    class_alias(array_search(min($levenshteins), $levenshteins), $name);
  }
}
